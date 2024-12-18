<?php

namespace Domain\Shared\Services;

use App\Http\Requests\Dashboard\Shared\ClientRequest;
use Domain\Shared\DTOs\ClientData;
use Domain\Shared\Models\Client;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class ClientService
{
    use ImageUploadTrait;

    public function createClient(ClientData $data, ClientRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }
        Client::create([
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
            'clientCategory_id' => $data->clientCategory_id,
            'link' => $data->link,
            'image' => $imagePath,
        ]);
    }

    public function updateClient($id, ClientData $data, ClientRequest $request)
    {
        $client = Client::findOrFail($id);

        $imagePath = $data->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                Storage::delete('public/' . $imagePath);
            }
            $imagePath = $request->file('image')->store('image', 'public');
        }

        $client->update([
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
            'clientCategory_id' => $data->clientCategory_id,
            'link' => $data->link,
            'image' => $imagePath,
        ]);
    }
}
