<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\DTO\Issue;
use GoodFirstIssue\DTO\Repository;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use LogicException;

readonly class GitHubAPIClient
{
    /**
     * @param ClientInterface $client
     */
    public function __construct(
        private ClientInterface $client,
    ) {
    }

    /**
     * Get information about all repositories.
     *
     * @param array<string> $repository_names
     *
     * @throws GuzzleException
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
     * @throws GuzzleException
     *
     * @return Repository
     */
    public function requestRepositoryData(string $repository_name): Repository
    {
        $api_route = 'https://api.github.com/repos/' . $repository_name;
        $request   = new Request('GET', $api_route);

        $response        = $this->client->send($request);
        $repository_json = $response->getBody()->getContents();

        $repository = json_decode($repository_json, true);
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
     * @throws GuzzleException
     *
     * @return array<Issue>
     */
    public function requestIssues(string $repository_name): array
    {
        $api_route = 'https://api.github.com/repos/' . $repository_name . '/issues?state=open&sort=updated&labels=good%20first%20issue';
        $request   = new Request('GET', $api_route);

        $response    = $this->client->send($request);
        $issues_json = $response->getBody()->getContents();

        $issues_data  = json_decode($issues_json, true);
        if (! is_array($issues_data)) {
            throw new LogicException('Cannot decode issues data');
        }

        foreach ($issues_data as $data) {
            print_r('Issue #' . $data['number'] . ' ' . $data['title'] . "\n");

            $issues[] = new Issue(
                $data['html_url'],
                $data['title'],
                $data['number'],
                $data['updated_at']
            );
        }

        return $issues ?? [];
    }
}
