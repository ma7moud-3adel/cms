<?php

namespace App\Http\Controllers\Dashboard\Shared\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Setting\SettingValidationRequest;
use Domain\Shared\Enums\SettingCategory;
use Domain\Shared\Models\Setting;
use Domain\Shared\Setting\services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected SettingService $service;

    public function __construct(SettingService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {

        $currentCategory = $request->get('category', SettingCategory::SETTING->value);
        $allSettings = Setting::all()->groupBy('category');

        $categorizedSettings = [
            'system' => [
                'title' => __('messages.system_settings'),
                'categories' => $allSettings->filter(fn($_, $key) => in_array($key, SettingCategory::systemCategories()))
            ],
            'content' => [
                'title' => __('messages.content_settings'),
                'categories' => $allSettings->filter(fn($_, $key) => in_array($key, SettingCategory::contentCategories()))
            ],
        ];

        $settings = Setting::where('category', $currentCategory)->get();

        return view('dashboard.shared.settings.index', compact(
            'categorizedSettings',
            'settings',
            'currentCategory'
        ));
    }
    public function update(SettingValidationRequest $request)
    {
        $category = $request->get('category', SettingCategory::SETTING->value);


        $settings = Setting::where('category', $category)->get();

        foreach ($settings as $setting) {
            $key = $setting->key;

            if ($request->has($key)) {
                $value = $request->get($key);


                if ($setting->type === 'file' && $request->hasFile($key)) {
                    $file = $request->file($key);
                    $filePath = $this->service->uploadFile($file, $category);


                    $this->service->updateSetting($key, $filePath, 'file', $category);
                } else {

                    $this->service->updateSetting($key, $value, $setting->type, $category);
                }
            }
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }



}
