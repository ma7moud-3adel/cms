<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\ClientCategoryRequest;
use Domain\Shared\DTOs\ClientCategoryData;
use Domain\Shared\Models\ClientCategory;
use Domain\Shared\Traits\ImageUploadTrait;

class ClientCategoryService
{
    use ImageUploadTrait;


    public function createCat(ClientCategoryData $data, ClientCategoryRequest $request): void
    {

        ClientCategory::create([
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
        ]);
    }


    public function updateCat($id, ClientCategoryData $data, ClientCategoryRequest $request): void
    {
        $clientCat = ClientCategory::findOrFail($id);

        $updateData = [
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
        ];
        $clientCat->update($updateData);
    }
}
