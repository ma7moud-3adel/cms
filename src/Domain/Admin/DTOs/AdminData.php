<?php

namespace Domain\Admin\DTOs;

use Spatie\LaravelData\Data;


class AdminData extends Data
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public ?string $photo = null,
        public bool $is_super_admin = false
    ) {}
}
