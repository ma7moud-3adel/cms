<?php

namespace Domain\Service\Services;

use App\Http\Requests\Dashboard\Blog\CommentRequest;
use App\Http\Requests\Dashboard\Service\ServiceRequest;
use Domain\Blog\DTOs\BlogCommentData;
use Domain\Blog\Models\Comment;
use Domain\Service\DTOs\ServiceData;
use Domain\Service\Models\Service;
use Domain\Shared\Traits\ImageUploadTrait;

class ServiceService
{
    use ImageUploadTrait;
    public function createService(ServiceData $data,ServiceRequest $request){
        $photoPath = $data->photo
            ? $this->uploadImage($request->file('photo'), 'photo', 'services')
            : null;
        Service::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'service_group_id'=>$data->service_group_id,
            'photo'=> $photoPath
        ]);
    }
    public function updateService( $id, ServiceData $data,ServiceRequest $request){
//        dd($request);
        $service=Service::findOrFail($id);
        $photoPath = $data->photo
            ? $this->updateImage($request->file('photo'), 'photo', 'services', $service->photo)
            : $service->photo;
        $service->update([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'service_group_id'=>$data->service_group_id,
            'photo'=> $photoPath
        ]);
    }
    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        $this->deleteImage($service->photo);
    }
}
