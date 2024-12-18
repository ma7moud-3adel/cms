<?php

namespace Domain\Admin\ViewModels;

use Domain\Admin\Models\Admin;

class AdminViewModel
{
    public function __construct(private Admin $admin) {}

    public static function fromCollection($admins)
    {
        return $admins->map(fn ($admin) => new static($admin));
    }

    public function toArray(): array
    {
        return [
            'id' => $this->admin->id,
            'name' => $this->admin->name,
            'email' => $this->admin->email,
            'photo' => $this->admin->photo,
            'status' => $this->admin->status ? 'true' : 'false',
        ];
    }
}
