<?php

declare(strict_types = 1);

namespace GoodFirstIssue\DTO;

class Repository
{
    /**
     * @var array<Issue>
     */
    private array $issues = [];

    /**
     * @param string $html_url
     * @param string $full_name
     * @param string|null $description
     * @param string $language
     * @param int $stargazers_count
     * @param int $open_issues_count
     * @param int $open_issues
     * @param string $updated_at
     */
    public function __construct(
        public readonly string $html_url, // Ex: "https://github.com/octocat/Hello-World"
        public readonly string $full_name,// Ex: "octocat/Hello-World"
        public readonly ?string $description, // Ex: "This your first repo!"
        public readonly string $language, // Ex: null,
        public readonly int $stargazers_count, // Ex: 80,
        public readonly int $open_issues_count, // Ex: 0,
        public readonly int $open_issues, // Ex: 0,
        public readonly string $updated_at // Ex: "2011-01-26T19:14:43Z",
    ) {
    }

    /**
     * @return array<Issue>
     */
    public function getIssues(): array
    {
        return $this->issues;
    }

    /**
     * @param array<Issue> $issues
     *
     * @return void
     */
    public function setIssues(array $issues): void
    {
        $this->issues = $issues;
    }
}
