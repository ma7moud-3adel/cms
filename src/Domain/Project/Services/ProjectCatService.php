<?php

namespace Domain\Project\Services;

use App\Http\Requests\Dashboard\Project\ProjectCatRequest;
use Domain\Project\DTOs\ProjectCatData;
use Domain\Project\Models\ProjectCategory;
use Domain\Shared\Traits\ImageUploadTrait;

class ProjectCatService
{
    use ImageUploadTrait;

    public function createCat(ProjectCatData $data, ProjectCatRequest $request): void
    {
        ProjectCategory::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
        ]);
    }

    public function updateCat($id, ProjectCatData $data, ProjectCatRequest $request): void
    {
        $category = ProjectCategory::findOrFail($id);
        $updateData = [
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
        ];
        $category->update($updateData);
    }
}
