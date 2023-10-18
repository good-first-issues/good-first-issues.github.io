<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\DTO\Issue;
use GoodFirstIssue\DTO\Repository;

readonly class Generator
{
    public function __construct(
        private string $root_path
    ) {
    }

    /**
     * TODO To Client.
     *
     * @param string $repository_name
     *
     * @return Repository
     */
    public function requestRepositoryInfo(string $repository_name): Repository
    {
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => ['User-Agent: PHP'],
            ],
        ];

        $context        = stream_context_create($opts);
        $repositoryJson = file_get_contents('https://api.github.com/repos/' . $repository_name, false, $context);
        $repository     = json_decode($repositoryJson, true);

        $lang = (strlen((string) $repository['language']) < 1) ? 'other' : $repository['language'];

        return new Repository(
            $repository['html_url'],
            $repository['full_name'],
            $repository['description'],
            $lang,
            $repository['stargazers_count'],
            $repository['open_issues_count'],
            $repository['open_issues'],
            $repository['updated_at'],
        );
    }

    /**
     * TODO To Client.
     *
     * @param string $repository_name
     *
     * @return array<Issue>
     */
    public function requestIssues(string $repository_name): array
    {
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => ['User-Agent: PHP'],
            ],
        ];

        $context        = stream_context_create($opts);

        $issuesJson      = file_get_contents('https://api.github.com/repos/' . $repository_name . '/issues?state=open&sort=updated&labels=good%20first%20issue', false, $context);
        $issues_data     = json_decode($issuesJson, true);

        foreach ($issues_data as $data) {
            print_r('Issue #' . $data['number'] . ' ' . $data['title'] . "\n");

            $issues[] = new Issue(
                $data['html_url'],
                $data['title'],
                $data['number']
            );
        }

        return $issues ?? [];
    }

    /**
     * Get information about all repositories
     * TODO To Client.
     *
     * @param array<string> $repository_names
     *
     * @return array<Repository>
     */
    public function requestRepositoriesData(array $repository_names): array
    {
        foreach ($repository_names as $line) {
            $repository     = $this->requestRepositoryInfo($line);
            $repositories[] = $repository;
        }

        return $repositories ?? [];
    }

    public function run(): void
    {
        if (! is_dir($this->root_path . '/lang')) {
            mkdir($this->root_path . '/lang');
        }

        // Get repository names from `repositories.json` file
        $json             = file_get_contents('repositories.json');
        $repository_names = json_decode($json, true);

        print_r($repository_names);

        $repositories = $this->requestRepositoriesData($repository_names);

        // TODO сортируем репозитории по updated at

        foreach ($repositories as $repository) {
            print_r('Get issues for repository: ' . $repository->full_name . "\n");

            $issues = $this->requestIssues($repository->full_name);
            $repository->setIssues($issues);
        }


        $repositories_by_language = [];
        foreach ($repositories as $repository) {
            $repositories_by_language[$repository->language][] = $repository;
        }

        $renderer = new Renderer($this->root_path);
        $renderer->buildIndexHTML($repositories);

        // TODO by lang
    }
}
