<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class GovernmentData extends Data
{
    public function __construct(
        public string $name_en,
        public string $name_ar,
    ) {}
}
