<?php

namespace Domain\Project\Services;

use App\Http\Requests\Dashboard\Project\ProjectRequest;
use Domain\Project\DTOs\ProjectData;
use Domain\Project\Models\Project;
use Domain\Project\Models\ProjectGallery;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    use ImageUploadTrait;

    public function createProject(ProjectData $data, ProjectRequest $request): void
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
//            dd($request->image);
            $imagePath = $request->file('image')->store('image', 'public');
        }
        $project = Project::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'category_id' => $data->category_id,
            'image' => $imagePath,
            'meta_name_en' => $data->meta_name_en,
            'meta_name_ar' => $data->meta_name_ar,
            'meta_description_en' => $data->meta_description_en,
            'meta_description_ar' => $data->meta_description_ar,
            'meta_keywords_en' => $data->meta_keywords_en,
            'meta_keywords_ar' => $data->meta_keywords_ar,
            'slug' => $data->slug,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('projects', 'public');
                ProjectGallery::create([
                    'project_id' => $project->id,
//                    'images' => implode(',', $path)
                    'images' => $path

                ]);
                // $project->images()->create([
                //     'image_path' => $path
                // ]);
            }
        }
    }
    public function updateProject($id, ProjectData $data, ProjectRequest $request): void
    {
        $project = Project::findOrFail($id);
        $photoPath = $data->image
            ? $this->updateImage($request->file('image'), 'image', 'projects', $project->image)
            : $project->image;

//        $imagePath = $data->image;


        if ($request->hasFile('image')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($photoPath) {
//                Storage::delete('public/' . $photoPath);
                $this->deleteImage($project->image);
            }
            // حفظ الصورة الجديدة
//            $imagePath = $request->file('image')->store('image', 'public');
        }
        $updateData = [
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'category_id' => $data->category_id,
            'image' => $photoPath,
            'meta_name_en' => $data->meta_name_en,
            'meta_name_ar' => $data->meta_name_ar,
            'meta_description_en' => $data->meta_description_en,
            'meta_description_ar' => $data->meta_description_ar,
            'meta_keywords_en' => $data->meta_keywords_en,
            'meta_keywords_ar' => $data->meta_keywords_ar,
            'slug' => $data->slug,
        ];
        $project->update($updateData);
    }
}
