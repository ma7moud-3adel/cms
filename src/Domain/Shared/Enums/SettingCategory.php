<?php

namespace Domain\Shared\Enums;

enum SettingCategory:string
{
    case SETTING = 'setting';
    case SEO = 'seo';
    case CONTACT_INFO = 'contact_info';
    case FEATURE = 'feature';
    case ABOUT = 'about';
    case HOME_PAGE = 'home_page';
    case SOCIAL_MEDIA = 'social_media';


    public static function systemCategories(): array
    {
        return [
            self::SETTING->value,
            self::SEO->value,
            self::FEATURE->value,
        ];
    }


    public static function contentCategories(): array
    {
        return [
            self::ABOUT->value,
            self::HOME_PAGE->value,
            self::CONTACT_INFO->value,
            self::SOCIAL_MEDIA->value,
        ];
    }
}
