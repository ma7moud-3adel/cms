<?php

namespace Domain\Admin\DTOs;

use Spatie\LaravelData\Data;

class UpdateAdminData extends Data
{
    public function __construct(
        public string $name,
        public string $email,
        public ?string $password = null,
        public ?string $photo = null
    ) {}
}
