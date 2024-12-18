<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\SliderRequest;
use Domain\Shared\DTOs\SliderData;
use Domain\Shared\Models\Slider;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class SliderService
{
    use ImageUploadTrait;

    public function createSlider(SliderData $data, SliderRequest $request)
    {
        $imagePath_en = null;
        if ($request->hasFile('image_en')) {
            $imagePath_en = $request->file('image_en')->store('image', 'public');
        }
        $imagePath_ar = null;
        if ($request->hasFile('image_ar')) {
            $imagePath_ar = $request->file('image_ar')->store('image', 'public');
        }
        Slider::create([
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
            'sub_title_en' => $data->sub_title_en,
            'sub_title_ar' => $data->sub_title_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'image_en' => $imagePath_en,
            'image_ar' => $imagePath_ar,
        ]);
    }

    public function updateSlider($id, SliderData $data, SliderRequest $request)
    {
        $slider = Slider::findOrFail($id);

        $imagePath_en = $data->image_en;
        if ($request->hasFile('image_en')) {
            if ($imagePath_en) {
                Storage::delete('public/' . $imagePath_en);
            }
            $imagePath_en = $request->file('image_en')->store('image', 'public');
        }

        $imagePath_ar = $data->image_ar;
        if ($request->hasFile('image_ar')) {
            if ($imagePath_ar) {
                Storage::delete('public/' . $imagePath_ar);
            }
            $imagePath_ar = $request->file('image_ar')->store('image', 'public');
        }

        $slider->update([
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
            'sub_title_en' => $data->sub_title_en,
            'sub_title_ar' => $data->sub_title_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'image_en' => $imagePath_en,
            'image_ar' => $imagePath_ar,
        ]);
    }
}
