<?php

namespace Domain\Admin\Services;

use Domain\Admin\DTOs\AdminData;
use Domain\Admin\DTOs\UpdateAdminData;
use Domain\Admin\Models\Admin;
use Domain\Admin\Repositories\AdminRepository;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AdminService
{
    use ImageUploadTrait;


    public function createAdmin(AdminData $data, Request $request): void
    {
        $photoPath = $data->photo
            ? $this->uploadImage($request, 'photo', 'admin/photos')
            : null;

        Admin::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'photo' => $photoPath,
            'is_super_admin' => $data->is_super_admin,
        ]);
    }

    public function updateAdmin(int $id, UpdateAdminData $data, Request $request): void
    {
        $admin = Admin::find($id);


        $photoPath = $data->photo
            ? $this->updateImage($request, 'photo', 'admin/photos', $admin->photo)
            : $admin->photo;

        $updateData = [
            'name' => $data->name,
            'email' => $data->email,
            'photo' => $photoPath,
        ];

        if ($data->password) {
            $updateData['password'] = bcrypt($data->password);
        }

        $admin->update($updateData);
    }
    public function deleteAdmin(int $id): void
    {
        $admin = Admin::findOrFail($id);

        if ($admin->photo) {
            $this->deleteImage($admin->photo);
        }

        $admin->delete();
    }

    public function changeStatus(int $id, bool $status): void
    {
        $admin = Admin::findOrFail($id);

        $admin->update([
            'status' => $status ? 1 : 0,
        ]);
    }
}
