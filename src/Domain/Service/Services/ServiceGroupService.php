<?php

namespace Domain\Service\Services;

use App\Http\Requests\Dashboard\Blog\CommentRequest;
use App\Http\Requests\Dashboard\Service\ServiceGroupRequest;
use App\Http\Requests\Dashboard\Service\ServiceRequest;
use Domain\Blog\DTOs\BlogCommentData;
use Domain\Blog\Models\Comment;
use Domain\Service\DTOs\ServiceData;
use Domain\Service\DTOs\ServiceGroupData;
use Domain\Service\Models\Service;
use Domain\Service\Models\ServiceGroup;
use Domain\Shared\Traits\ImageUploadTrait;

class ServiceGroupService
{
    use ImageUploadTrait;
    public function createServiceGroup(ServiceGroupData $data){

        ServiceGroup::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
        ]);
    }
    public function updateServiceGroup( $id, ServiceGroupData $data){
        $serviceGroup=ServiceGroup::findOrFail($id);
        $serviceGroup->update([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
        ]);
    }
    public function deleteServiceGroup($id)
    {
        $serviceGroup = ServiceGroup::findOrFail($id);
        $serviceGroup->delete();
    }
}
