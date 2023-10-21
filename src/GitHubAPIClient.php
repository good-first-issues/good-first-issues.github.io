<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\DTO\Issue;
use GoodFirstIssue\DTO\Repository;
use LogicException;

readonly class GitHubAPIClient
{
    private const OPTS = [
        'http' => [
            'method' => 'GET',
            'header' => ['User-Agent: PHP'],
        ],
    ];

    /**
     * Get information about all repositories.
     *
     * @param array<string> $repository_names
     *
     * @return array<Repository>
     */
    public function requestRepositoriesData(array $repository_names): array
    {
        foreach ($repository_names as $repository_name) {
            $repository     = $this->requestRepositoryData($repository_name);
            $repositories[] = $repository;
        }

        return $repositories ?? [];
    }

    /**
     * @param string $repository_name
     *
     * @return Repository
     */
    public function requestRepositoryData(string $repository_name): Repository
    {
        $context = stream_context_create(self::OPTS);

        $repository_json = file_get_contents($api_route = 'https://api.github.com/repos/' . $repository_name, false, $context);
        if (! is_string($repository_json)) {
            throw new LogicException('Cannot read GitHub API response from ' . $api_route);
        }

        $repository      = json_decode($repository_json, true);
        if (! is_array($repository)) {
            throw new LogicException('Cannot decode repository data');
        }

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
     * @param string $repository_name
     *
     * @return array<Issue>
     */
    public function requestIssues(string $repository_name): array
    {
        $context = stream_context_create(self::OPTS);

        $issues_json  = file_get_contents($api_route = 'https://api.github.com/repos/' . $repository_name . '/issues?state=open&sort=updated&labels=good%20first%20issue', false, $context);
        if (! is_string($issues_json)) {
            throw new LogicException('Cannot read GitHub API response from ' . $api_route);
        }

        $issues_data  = json_decode($issues_json, true);
        if (! is_array($issues_data)) {
            throw new LogicException('Cannot decode issues data');
        }

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
}
