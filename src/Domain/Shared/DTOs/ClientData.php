<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class ClientData extends Data
{
    public function __construct(
        public string $title_en,
        public string $title_ar,
        public int $clientCategory_id,
        public string $link,
        public string $image,
    ) {}
}
