<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class SliderData extends Data
{
    public function __construct(
        public string $title_en,
        public string $title_ar,
        public string $sub_title_en,
        public string $sub_title_ar,
        public ?string $description_en,
        public ?string $description_ar,
        public string $image_en,
        public string $image_ar,
    ) {}
}
