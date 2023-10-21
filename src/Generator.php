<?php

declare(strict_types = 1);

namespace GoodFirstIssue;

use GoodFirstIssue\DTO\Repository;
use LogicException;

readonly class Generator
{
    public function __construct(
        private string $root_path,
        private GitHubAPIClient $github_api_client
    ) {
    }

    public function run(): void
    {
        if (! is_dir($this->root_path . '/lang')) {
            mkdir($this->root_path . '/lang');
        }

        // Get repository names from `repositories.json` file
        $json = file_get_contents('repositories.json');
        if (! is_string($json)) {
            throw new LogicException('Cannot read file: repositories.json');
        }

        $repository_names = json_decode($json, true);
        if (! is_array($repository_names)) {
            throw new LogicException('Cannot decode repository names');
        }

        print_r($repository_names);

        $repositories = $this->github_api_client->requestRepositoriesData($repository_names);

        // TODO сортируем репозитории по updated at

        foreach ($repositories as $repository) {
            print_r('Get issues for repository: ' . $repository->full_name . "\n");

            $issues = $this->github_api_client->requestIssues($repository->full_name);
            $repository->setIssues($issues);
        }

        $renderer = new Renderer($this->root_path);
        $renderer->renderIndexPage($repositories);

        $repositories_by_language = [];
        foreach ($repositories as $repository) {
            $repositories_by_language[$repository->language][] = $repository;
        }

        // TODO $renderer->renderPerLanguagePage($repositories);
    }
}
