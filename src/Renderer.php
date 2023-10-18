<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\DTO\Issue;
use GoodFirstIssue\DTO\Repository;

readonly class Renderer
{
    public function __construct(
        private string $rootPath
    ) {
    }

    /**
     * Build index.html.
     *
     * @param array<Repository> $repositories
     *
     * @return void
     */
    public function buildIndexHTML(array $repositories): void
    {
        $cards_html = '';
        foreach ($repositories as $repository) {
            $list_items_html = '';
            foreach ($repository->getIssues() as $issue) {
                $list_items_html .= $this->renderCardListItemHTML($issue);
            }

            $cards_html .= $this->renderCardHTML($repository, $list_items_html);
        }

        // TODO To prif
        $mainHTML      = file_get_contents($this->rootPath . '/src/Templates/main.html');
        $replace_pairs = [
            '%CARDS%' => $cards_html,
        ];

        $html = strtr($mainHTML, $replace_pairs);

        file_put_contents('index.html', $html);
    }

    private function renderCardHTML(Repository $repository, string $list_items_html): string
    {
        $main_card_template = file_get_contents($this->rootPath . '/src/Templates/main_card.html');

        $replace_pairs = [
            '%REPO_URL%'         => $repository->html_url,
            '%REPO_NAME%'        => $repository->full_name,
            '%REPO_DESCRIPTION%' => $repository->description,
            '%ISSUES_LIST_HTML%' => $list_items_html,
        ];

        return strtr($main_card_template, $replace_pairs);
    }

    private function renderCardListItemHTML(Issue $issue): string
    {
        $mainCardLiTemplate = file_get_contents($this->rootPath . '/src/Templates/main_card_li.html');

        $replace_pairs = [
            '_ISSUE_HREF_'       => $issue->html_url,
            '_ISSUE_TITLE_'      => $issue->title,
            '_ISSUE_UPDATED_AT_' => 'TODO',
        ];

        return strtr($mainCardLiTemplate, $replace_pairs);
    }

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
