<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use Carbon\Carbon;
use GoodFirstIssue\DTO\Issue;
use LogicException;
use Throwable;

readonly class Renderer
{
    public function __construct(
        private string $root_path
    ) {
    }

    /**
     * Build HTML-page.
     *
     * @param array<Issue> $issues
     * @param string       $page_name
     * @param string       $repository_language
     *
     * @return void
     */
    public function renderPage(array $issues, string $page_name, string $repository_language): void
    {
        $main_html = file_get_contents($template_path = $this->root_path . '/src/Templates/main.html');

        if (! is_string($main_html)) {
            throw new LogicException('Cannot read file: ' . $template_path);
        }

        $replace_pairs = [
            '%CARDS%' => $this->renderIssuesListHTML($issues, $repository_language),
        ];

        $html = strtr($main_html, $replace_pairs);

        file_put_contents($page_name . '.html', $html);
    }

    /**
     * @param array<Issue> $issues
     * @param string       $repository_language
     *
     * @return string
     */
    private function renderIssuesListHTML(array $issues, string $repository_language): string
    {
        $cards_html = '';
        foreach ($issues as $issue) {
            $cards_html .= $this->renderIssueHTML($issue, $repository_language);
        }

        return $cards_html;
    }

    private function renderIssueHTML(Issue $issue, string $repository_language): string
    {
        $main_card_template = file_get_contents($template_path = $this->root_path . '/src/Templates/issue_card.html');

        if (! is_string($main_card_template)) {
            throw new LogicException('Cannot read file: ' . $template_path);
        }

        $replace_pairs = [
            '_ISSUE_HREF_'       => $issue->html_url,
            '_ISSUE_TITLE_'      => $issue->title,
            '_ISSUE_COMMENTS_'   => $issue->comments,
            '_ISSUE_UPDATED_AT_' => Carbon::parse($issue->updated_at)->diffForHumans(),
            '_USER_AVATAR_URL_'  => $issue->user_avatar_url,
            '_REPO_LANG_'        => $repository_language,
            '_REPO_NAME_'        => $this->extractRepositoryFullname($issue->html_url),
        ];

        return strtr($main_card_template, $replace_pairs);
    }

    /**
     * Convert `https://github.com/gomzyakov/php-cs-fixer-config/issues/189` to `gomzyakov/php-cs-fixer-config`.
     *
     * @param string $issue_html_url
     *
     * @return string
     */
    private function extractRepositoryFullname(string $issue_html_url): string
    {
        try {
            $string = parse_url($issue_html_url, PHP_URL_PATH);
            $string = trim($string, '/');
            $array  = explode('/', $string);

            $repository_fullname = $array[0] . '/' . $array[1];
        } catch (Throwable $exception) {
            $repository_fullname = 'unknown';
        }

        return $repository_fullname;
    }

    // TODO
    //    public function buildLangs(array $repositories): void
    //    {
    //
    //        $repositoriesByLanguage = [];
    //
    //        // Проходимся по всем репозиториям
    //        foreach ($json_data as $line) {
    //            echo 'Line : https://api.github.com/repos/' . $line . "\n";
    //            // Записываем информацию о репозитории в файл data/repositories.json
    //            // Это необходимо для главной страницы
    //
    //            $opts = [
    //                'http' => [
    //                    'method' => 'GET',
    //                    'header' => [
    //                        'User-Agent: PHP',
    //                    ],
    //                ],
    //            ];
    //
    //            $context        = stream_context_create($opts);
    //            $repositoryJson = file_get_contents('https://api.github.com/repos/' . $line, false, $context);
    //            $repository     = json_decode($repositoryJson, true);
    //
    //            $repositoryData = [
    //                'html_url'          => $repository['html_url'], // Ex: "https://github.com/octocat/Hello-World"
    //                'full_name'         => $repository['full_name'], // Ex: "octocat/Hello-World"
    //                'description'       => $repository['description'], // Ex: "This your first repo!"
    //                'language'          => $repository['language'], // Ex: null,
    //                'stargazers_count'  => $repository['stargazers_count'], // Ex: 80,
    //                'open_issues_count' => $repository['open_issues_count'], // Ex: 0,
    //                'open_issues'       => $repository['open_issues'], // Ex: 0,
    //                'updated_at'        => $repository['updated_at'], // Ex: "2011-01-26T19:14:43Z",
    //            ];
    //
    //            print_r($repositoryData);
    //
    //            // Конетент для главной страницы
    //            $indexContent .= '<h2>' . $repositoryData['full_name'] . '</h2>';
    //            $indexContent .= '<p>' . $repositoryData['description'] . '</p>';
    //
    //            $repositoriesByLanguage[$repositoryData['language']][] = $repositoryData['full_name'];
    //
    //            // Записываем ищуйки в общий файл
    //        }
    //
    //
    //        file_put_contents($langFile, $str, FILE_APPEND);
    //
    //        file_put_contents('index.html', $indexContent);
    //
    //
    //        foreach ($repositoriesByLanguage as $lang => $repositories) {
    //            if (strlen($lang) < 1) {
    //                $lang = 'other';
    //            }
    //
    //            print_r('Language: ' . $lang);
    //
    //            $langFile = 'lang/' . $lang . '.html';
    //            if (file_exists($langFile)) {
    //                $status = unlink($langFile) ? 'The file ' . $langFile . ' has been deleted' . "\n" : 'Error deleting ' . $langFile . "\n";
    //                echo $status;
    //            }
    //
    //
    //            // TODO Пишем шапку файла
    //            file_put_contents($langFile, '<h1>Lang: ' . $lang . '</h1>' . "\n");
    //
    //            foreach ($repositories as $repository) {
    //                print_r('Repository: ' . $repository . "\n");
    //
    //                $issuesJson = file_get_contents('https://api.github.com/repos/' . $repository . '/issues?state=open&sort=updated&labels=good%20first%20issue', false, $context);
    //                $issues     = json_decode($issuesJson, true);
    //
    //                foreach ($issues as $issue) {
    //                    print_r('Issue #' . $issue['number'] . ' ' . $issue['title'] . "\n");
    //
    //                    $str = '<p>' . $issue['title'] . '</p>';
    //                    $str .= '<p>' . $issue['html_url'] . '</p>';
    //
    //                    file_put_contents($langFile, $str, FILE_APPEND);
    //                }
    //            }
    //        }
    //    }
}
