<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\References\ProgrammingLanguage;
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

        // todo
        $language = ProgrammingLanguage::PHP;
        // Generate HTML-page with issues for each proramming language
        // foreach (ProgrammingLanguage::cases() as $language) {
        $issues = $this->github_api_client->searchIssuesWithGoodFirtsIssueTag($language->value);
        print_r(PHP_EOL);
        print_r($language->name . ' issues count: ' . count($issues) . PHP_EOL);

        $renderer = new Renderer($this->root_path);
        $renderer->renderPage($issues, $language);

        sleep(2);
        // }
    }
}
