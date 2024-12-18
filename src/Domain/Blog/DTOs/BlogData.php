<?php

namespace Domain\Blog\DTOs;

use Spatie\LaravelData\Data;


class BlogData extends Data
{
    public function __construct(
        public string $name_en,
        public string $name_ar,
        public string $description_en,
        public string $description_ar,
        public string $image,
        public string $section,
        public ?string $meta_name_en,
        public ?string $meta_name_ar,
        public ?string $meta_description_en,
        public ?string $meta_description_ar,
        public ?string $meta_keywords_en,
        public ?string $meta_keywords_ar,
        public ?string $slug,
    ) {}
}
