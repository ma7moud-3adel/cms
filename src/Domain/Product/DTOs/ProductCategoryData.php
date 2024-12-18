<?php

namespace Domain\Product\DTOs;

use Spatie\LaravelData\Data;


class ProductCategoryData extends Data
{
    public function __construct(
        public string $name_en,
        public string $name_ar,
        public string $description_en,
        public string $description_ar,
    ) {}
}
