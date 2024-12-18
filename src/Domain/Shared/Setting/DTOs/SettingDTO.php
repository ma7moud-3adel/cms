<?php

namespace Domain\Shared\Setting\DTOs;

use Spatie\LaravelData\Data;

class SettingDTO extends Data
{
    public function __construct(
        public string $key,
        public ?string $value,
        public string $type,
        public string $category,
    ) {}


}
