<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class PhotoGallaryData extends Data
{
    public function __construct(
        public string $title,
//        public string $link,
        public array $image,
    ) {}
}
