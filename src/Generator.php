<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GuzzleHttp\Exception\GuzzleException;

readonly class Generator
{
    public function __construct(
        private string $root_path,
        private GitHubAPIClient $github_api_client
    ) {
    }

    /**
     * @throws GuzzleException
     *
     * @return void
     */
    public function run(): void
    {
        if (! is_dir($this->root_path . '/lang')) {
            mkdir($this->root_path . '/lang');
        }

        // TODO
        //        foreach ($prog_lamguages as $prog_lamguage) {
        $issues = $this->github_api_client->searchIssuesWithGoodFirtsIssueTag();
        print_r('Issues count: ' . count($issues) . PHP_EOL);
        //        }



        $renderer = new Renderer($this->root_path);
        $renderer->renderPage($issues, 'index', 'php'); // TODO
    }
}
