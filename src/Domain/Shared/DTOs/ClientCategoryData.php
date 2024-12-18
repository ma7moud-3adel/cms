<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class ClientCategoryData extends Data
{
    public function __construct(
        public string $title_en,
        public string $title_ar,
    ) {}
}
