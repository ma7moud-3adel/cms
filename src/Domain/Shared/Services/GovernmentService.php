<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\GovernmentRequest;
use Domain\Shared\DTOs\GovernmentData;
use Domain\Shared\Models\Government;
use Domain\Shared\Traits\ImageUploadTrait;

class GovernmentService
{
    use ImageUploadTrait;


    public function createGov(GovernmentData $data, GovernmentRequest $request): void
    {

        Government::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
        ]);
    }


    public function updateGov($id, GovernmentData $data, GovernmentRequest $request): void
    {
        $gov = Government::findOrFail($id);

        $updateData = [
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
        ];
        $gov->update($updateData);
    }


    public function deleteGov($id): void
    {
        $gov = Government::findOrFail($id);
        $gov->delete();
    }
}
