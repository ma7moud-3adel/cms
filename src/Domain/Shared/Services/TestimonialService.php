<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\TestimonialRequest;
use Domain\Shared\DTOs\TestimonialData;
use Domain\Shared\Models\Testimonial;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class TestimonialService
{
    use ImageUploadTrait;

    public function createTestimonial(TestimonialData $data, TestimonialRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('image', 'public');
        }
        Testimonial::create([
            'name' => $data->name,
            'position' => $data->position,
            'photo' => $imagePath,
            'text' => $data->text,
        ]);
    }

    public function updateTestimonial($id, TestimonialData $data, TestimonialRequest $request)
    {
        $testimonial = Testimonial::findOrFail($id);
        $imagePath = $data->photo;
        if ($request->hasFile('photo')) {
            if ($imagePath) {
                Storage::delete('public/' . $imagePath);
            }
            $imagePath = $request->file('photo')->store('image', 'public');
        }
        $testimonial->update([
            'name' => $data->name,
            'position' => $data->position,
            'photo' => $imagePath,
            'text' => $data->text,
        ]);
    }
}
