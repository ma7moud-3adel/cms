<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\PartnerRequest;
use App\Http\Requests\Dashboard\Shared\TestimonialRequest;
use Domain\Shared\DTOs\PartnerData;
use Domain\Shared\DTOs\TestimonialData;
use Domain\Shared\Models\Partner;
use Domain\Shared\Models\Testimonial;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class PartnerService
{
    use ImageUploadTrait;

    public function createPartner(PartnerData $data, PartnerRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('image', 'public');
        }
        Partner::create([
            'title' => $data->title,
            'photo' => $imagePath,
        ]);
    }

    public function updatePartner($id, PartnerData $data, PartnerRequest $request)
    {
        $partner = Partner::findOrFail($id);
        $imagePath = $data->photo;
        if ($request->hasFile('photo')) {
            if ($imagePath) {
                Storage::delete('public/' . $imagePath);
            }
            $imagePath = $request->file('photo')->store('image', 'public');
        }
        $partner->update([
            'title' => $data->title,
            'photo' => $imagePath,
        ]);
    }
}
