<?php

namespace Database\Seeders;

use Domain\Shared\Enums\SettingCategory;
use Domain\Shared\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [

            [
                'key' => 'phone',
                'value' => json_encode(['ar' => '01116846859', 'en' => '01116846859']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'رقم الهاتف', 'en' => 'Phone Number']),
                'category' => SettingCategory::CONTACT_INFO->value,
            ],
            [
                'key' => 'site_logo',
                'value' => 'settings/logo.png',
                'type' => 'file',
                'title' => json_encode(['ar' => 'شعار الموقع', 'en' => 'Site Logo']),
                'category' => SettingCategory::SETTING->value,
            ],
            [
                'key' => 'site_name',
                'value' => json_encode(['ar' => 'إسم الموقع باللغة العربية', 'en' => 'Site Name in English']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'إسم الموقع', 'en' => 'Site Name']),
                'category' => SettingCategory::SETTING->value,
            ],
            [
                'key' => 'seo_title',
                'value' => json_encode(['ar' => 'عنوان الموقع', 'en' => 'SEO Title']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'عنوان الموقع SEO', 'en' => 'SEO Title']),
                'category' => SettingCategory::SEO->value,
            ],
            [
                'key' => 'seo_description',
                'value' => json_encode(['ar' => 'وصف الموقع', 'en' => 'SEO Description']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'وصف الموقع SEO', 'en' => 'SEO Description']),
                'category' => SettingCategory::SEO->value,
            ],
            [
                'key' => 'about_en',
                'value' => json_encode(['ar' => 'عن الشركة باللغة العربية', 'en' => 'About Company in English']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'عن الشركة بالعربية', 'en' => 'About Company']),
                'category' => SettingCategory::ABOUT->value,
            ],
            [
                'key' => 'about_ar',
                'value' => json_encode(['ar' => 'عن الشركة باللغة العربية', 'en' => 'About Company in Arabic']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'عن الشركة بالعربية', 'en' => 'About Company']),
                'category' => SettingCategory::ABOUT->value,
            ],
            [
                'key' => 'address_en',
                'value' => json_encode(['ar' => 'العنوان باللغة العربية', 'en' => 'Address in English']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'العنوان بالعربية', 'en' => 'Address']),
                'category' => SettingCategory::CONTACT_INFO->value,
            ],
            [
                'key' => 'address_ar',
                'value' => json_encode(['ar' => 'العنوان باللغة العربية', 'en' => 'Address in Arabic']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'العنوان بالعربية', 'en' => 'Address']),
                'category' => SettingCategory::CONTACT_INFO->value,
            ],
            [
                'key' => 'facebook',
                'value' => json_encode(['ar' => 'رابط الفيس بوك', 'en' => 'Facebook URL']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'رابط الفيس بوك', 'en' => 'Facebook URL']),
                'category' => SettingCategory::SOCIAL_MEDIA->value,
            ],
            [
                'key' => 'twitter',
                'value' => json_encode(['ar' => 'رابط تويتر', 'en' => 'Twitter URL']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'رابط تويتر', 'en' => 'Twitter URL']),
                'category' => SettingCategory::SOCIAL_MEDIA->value,
            ],
            [
                'key' => 'instagram',
                'value' => json_encode(['ar' => 'رابط الانستجرام', 'en' => 'Instagram URL']),
                'type' => 'text',
                'title' => json_encode(['ar' => 'رابط انستجرام', 'en' => 'Instagram URL']),
                'category' => SettingCategory::SOCIAL_MEDIA->value,
            ],

        ];

        // Insert settings into the database
        Setting::insert($settings);
    }
}
