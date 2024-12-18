<?php

namespace Domain\Service\DTOs;

use Spatie\LaravelData\Data;


class ServiceData extends Data
{
    public function __construct(
        public string $name_en,
        public string $name_ar,
        public string $description_en,
        public string $description_ar,
        public ?string $photo,
        public string $service_group_id,
        public ?string $meta_name_en,
        public ?string $meta_name_ar,
        public ?string $meta_description_en,
        public ?string $meta_description_ar,
        public ?string $meta_keywords_en,
        public ?string $meta_keywords_ar,
        public ?string $slug,
    ) {}
}
