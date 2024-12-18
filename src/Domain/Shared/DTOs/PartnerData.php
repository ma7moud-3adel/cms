<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class PartnerData extends Data
{
    public function __construct(
        public string $title,
        public string $photo,
    ) {}
}
