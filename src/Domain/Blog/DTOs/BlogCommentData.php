<?php

namespace Domain\Blog\DTOs;

use Spatie\LaravelData\Data;

class BlogCommentData extends Data
{
    public function __construct(
        public string $user_name,
        public string $phone,
        public string $comment,
        public string $blog_id,
    ) {}
}
