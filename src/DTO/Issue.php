<?php

declare(strict_types = 1);

namespace GoodFirstIssue\DTO;

readonly class Issue
{
    public function __construct(
        public string $html_url,
        public string $title,
        public int $number,
        public int $comments,
        public string $user_avatar_url,
        public string $updated_at
    ) {
    }
}
