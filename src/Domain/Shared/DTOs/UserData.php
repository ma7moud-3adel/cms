<?php

namespace Domain\Shared\DTOs;

use Spatie\LaravelData\Data;


class UserData extends Data
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        // public ?string $photo = null,
    ) {}
}
