<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\DTO\Issue;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use LogicException;

readonly class GitHubAPIClient
{
    public function __construct(
        private ClientInterface $client,
    ) {
    }

    /**
     * Search issues with "good firts issue" tag.
     *
     * @throws GuzzleException
     *
     * @return array<Issue>
     */
    public function searchIssuesWithGoodFirtsIssueTag(?string $programming_language = null): array
    {
        $query_url = 'https://api.github.com/search/issues?q=label:"good+first+issue"+state:open+no:assignee';

        if ($programming_language !== null) {
            $query_url .= '+language:' . urlencode($programming_language);
        }

        $query_url .= '&sort=updated&order=desc&per_page=50'
            . '&page=1'; // TODO

        $request = new Request('GET', $query_url);

        $response    = $this->client->send($request);
        $issues_json = $response->getBody()->getContents();

        $issues_data = json_decode($issues_json, true);
        if (! is_array($issues_data)) {
            throw new LogicException('Cannot decode issues data');
        }

        foreach ($issues_data['items'] as $item) {
            print_r('Issue #' . $item['number'] . ' ' . $item['title'] . PHP_EOL);

            $issues[] = new Issue(
                $item['html_url'],
                $item['title'],
                $item['number'],
                $item['comments'],
                $item['user']['avatar_url'],
                $item['updated_at']
            );
        }

        return $issues ?? [];
    }
}
