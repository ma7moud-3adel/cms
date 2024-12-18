<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\PhotoGallaryRequest;
use Domain\Shared\DTOs\PhotoGallaryData;
use Domain\Shared\Models\PhotoGallary;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class PhotoGallaryService
{
    use ImageUploadTrait;

    public function createGallary(PhotoGallaryData $data, PhotoGallaryRequest $request)
    {
//        $imagePath = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('image', 'public');
                PhotoGallary::create([
                    'title' => $data->title,
//            'link' => $data->link,
                    // 'image' => $imagePath,
                    'image' => $imagePath,
                ]);
            }
        }
    }

    public function updateGallary($id, PhotoGallaryData $data, PhotoGallaryRequest $request)
    {
        $gallary = PhotoGallary::findOrFail($id);
        $imagePath = [];
        if ($request->hasFile('image')) {
            if ($gallary->image) {
                $oldImages= $gallary->image;
                foreach ($oldImages as $oldImage) {
                    Storage::delete('public/' . $oldImage);
                }
            }
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('image', 'public');
            }
        }
        $gallary->update([
            'title' => $data->title,
//            'link' => $data->link,
            'image' => implode(',', $imagePath),
        ]);
    }
}
