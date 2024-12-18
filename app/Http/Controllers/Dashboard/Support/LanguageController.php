<?php

namespace App\Http\Controllers\Dashboard\Support;

use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function changeLang($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
