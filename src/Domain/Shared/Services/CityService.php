<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\CityRequest;
use Domain\Shared\DTOs\CityData;
use Domain\Shared\Models\City;
use Domain\Shared\Traits\ImageUploadTrait;

class CityService
{
    use ImageUploadTrait;

    public function createCity(CityData $data, CityRequest $request)
    {
        City::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'gov_id' => $data->gov_id,
        ]);
    }

    public function updateCity($id, CityData $data, CityRequest $request)
    {
        $city = City::findOrFail($id);
        $city->update([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'gov_id' => $data->gov_id,
        ]);
    }

    public function deleteCity($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
    }
}
