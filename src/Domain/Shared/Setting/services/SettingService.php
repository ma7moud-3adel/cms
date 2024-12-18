<?php

namespace Domain\Shared\Setting\services;

use Domain\Shared\Common\enum\SettingCategory;
use Domain\Shared\Models\Setting;
use Illuminate\Http\UploadedFile;


class SettingService
{
    public function updateSetting(string $key, mixed $value, string $type = 'text', string $category = null): Setting
    {
        $setting = Setting::firstOrCreate(
            ['key' => $key],
            [
                'category' => $category ?? SettingCategory::SETTING->value,
                'type' => $type,
            ]
        );


        if ($type === 'file' && $value instanceof UploadedFile) {
            $value = $this->uploadFile($value, $category);
        }


        $setting->update([
            'value' => $value,
            'type' => $type,
        ]);

        return $setting;
    }


    public function getSettingsByCategory(): array
    {
        return [
            'system' => [
                'title' => 'System Settings',
                'categories' => [
                    'setting' => 'General Settings',
                    'seo' => 'SEO Settings',
                    'feature' => 'Feature Settings'
                ]
            ],
            'content' => [
                'title' => 'Content Settings',
                'categories' => [
                    'about' => 'About Settings',
                    'home_page' => 'Homepage Settings',
                    'contact_info' => 'Contact Information',
                    'social_media' => 'Social Media'
                ]
            ]
        ];
    }



    public function uploadFile(UploadedFile $file, string $category)
    {

        $destinationPath = public_path('settings/' . $category);


        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();


        $file->move($destinationPath, $fileName);


        return 'settings/' . $category . '/' . $fileName;
    }
}
