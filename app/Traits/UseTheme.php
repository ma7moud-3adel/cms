<?php
namespace App\Traits;

use Illuminate\Support\Facades\View;

trait UseTheme
{
    public function setTheme()
    {
        // Get the theme folder from the .env file
        $themeFolder = env('THEME_NAME', 'default'); // Default to 'default_theme' if not set
        // Set the theme folder path
        $themePath = resource_path("views/front/".$themeFolder);
        // Add the theme namespace dynamically
        View::addNamespace('theme', $themePath);
    }
}
