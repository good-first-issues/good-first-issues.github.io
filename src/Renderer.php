<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use Carbon\Carbon;
use GoodFirstIssue\DTO\Issue;
use GoodFirstIssue\References\ProgrammingLanguage;
use LogicException;
use Throwable;

readonly class Renderer
{
    public function __construct(
        private string $root_path
    ) {
    }

    /**
     * Build a HTML-page.
     *
     * @param array<Issue>        $issues
     * @param ProgrammingLanguage $language
     *
     * @return void
     */
    public function renderPage(array $issues, ProgrammingLanguage $language): void
    {
        $main_html = file_get_contents($template_path = $this->root_path . '/src/Templates/main.html');

        if (! is_string($main_html)) {
            throw new LogicException('Cannot read file: ' . $template_path);
        }

        $replace_pairs = [
            '%CARDS%' => $this->renderIssuesListHTML($issues, $language->value),
        ];

        $html = strtr($main_html, $replace_pairs);

        if ($language === ProgrammingLanguage::PHP) {
            $filename = 'index.html';
        } else {
            $filename = $this->root_path . '/lang/' . $language->name . '.html';
        }

        file_put_contents($filename, $html);
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
            $string = (string) parse_url($issue_html_url, PHP_URL_PATH);
            $string = trim($string, '/');
            $array  = explode('/', $string);

            $repository_fullname = $array[0] . '/' . $array[1];
        } catch (Throwable $exception) {
            $repository_fullname = 'unknown';
        }

        return $repository_fullname;
    }
}
