<?php

namespace Domain\Shared\Services;

use Domain\Shared\DTOs\UserData;
use Domain\Shared\Models\User;
use Domain\Shared\Traits\ImageUploadTrait;

class UserService
{
    use ImageUploadTrait;


    public function createUser(UserData $data): void
    {
        User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($data->password),
        ]);
    }

    public function updateUser(int $id, UserData $data): void
    {
        $user = User::find($id);

        $updateData = [
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($data->password),
        ];

        if ($data->password) {
            $updateData['password'] = bcrypt($data->password);
        }

        $user->update($updateData);
    }
    public function deleteUser(int $id): void
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    public function changeStatus(int $id, bool $status): void
    {
        $user = User::findOrFail($id);

        $user->update([
            'status' => $status ? 1 : 0,
        ]);
    }
}
