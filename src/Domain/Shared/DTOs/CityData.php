<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class CityData extends Data
{
    public function __construct(
        public string $name_en,
        public string $name_ar,
        public int $gov_id,
    ) {}
}
