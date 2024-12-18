<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class TestimonialData extends Data
{
    public function __construct(
        public string $name,
        public string $position,
        public string $photo,
        public string $text,
    ) {}
}
