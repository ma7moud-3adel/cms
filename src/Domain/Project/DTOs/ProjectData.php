<?php

namespace Domain\Project\DTOs;

use LibDNS\Records\Types\Long;
use Spatie\LaravelData\Data;


class ProjectData extends Data
{
    public function __construct(
        public string $name_en,
        public string $name_ar,
        public string $description_en,
        public string $description_ar,
        public int $category_id,
        public ?string $image,
        public ?array $images,
        public ?string $meta_name_en,
        public ?string $meta_name_ar,
        public ?string $meta_description_en,
        public ?string $meta_description_ar,
        public ?string $meta_keywords_en,
        public ?string $meta_keywords_ar,
        public ?string $slug,
    ) {}
}
