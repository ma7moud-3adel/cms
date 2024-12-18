<?php

namespace Domain\Shared\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

trait ImageUploadTrait
{
    public function uploadImage(UploadedFile $file, $inputName, $path, $disk = 'public')
    {

//            $image = $file->file($inputName);
            $imageName = time() . '.' . $file->getClientOriginalExtension();

            $manager = new ImageManager(new Driver());
            $imageResized = $manager->read($file);
            $imageResized->scaleDown(width: 1200, height: 1200);

            $tempPath = sys_get_temp_dir() . '/' . $imageName;
            $imageResized->toJpeg(quality: 90)->save($tempPath);

            $filePath = $path . '/' . $imageName;
            Storage::disk($disk)->put($filePath, file_get_contents($tempPath));
            unlink($tempPath);
            return $filePath;
    }

    public function uploadMultipleImages(UploadedFile $file, $inputName, $path, $disk = 'public')
    {
        $uploadedPaths = [];


            foreach ($file as $image) {
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

                $manager = new ImageManager(new Driver());
                $imageResized = $manager->read($image);
                $imageResized->scaleDown(width: 1200, height: 1200);

                $tempPath = sys_get_temp_dir() . '/' . $imageName;
                $imageResized->toJpeg(quality: 90)->save($tempPath);

                $filePath = $path . '/' . $imageName;
                Storage::disk($disk)->put($filePath, file_get_contents($tempPath));

                unlink($tempPath);

                $uploadedPaths[] = $filePath;
            }

        return $uploadedPaths;
    }

    public function updateImage(uploadedFile $file, $inputName, $path, $oldPath = null, $disk = 'public')
    {
        if ($oldPath) {
            $this->deleteImage($oldPath, $disk);
        }

        return $this->uploadImage($file, $inputName, $path, $disk);
    }

//    public function updateMultipleImages(Request $request, $inputName, $path, $disk = 'public')
//    {
//        $uploadedPaths = [];
//
//        if ($request->hasFile($inputName)) {
//            // Get the uploaded files
//            $images = $request->file($inputName);
//
//            foreach ($images as $image) {
//                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
//
//                // Resize and save the image using Intervention Image
//                $manager = new ImageManager(new Driver());
//                $imageResized = $manager->read($image);
//                $imageResized->scaleDown(width: 1200, height: 1200);
//
//                $tempPath = sys_get_temp_dir() . '/' . $imageName;
//                $imageResized->toJpeg(quality: 90)->save($tempPath);
//
//                // Save the image to storage
//                $filePath = $path . '/' . $imageName;
//                Storage::disk($disk)->put($filePath, file_get_contents($tempPath));
//
//                unlink($tempPath);
//
//                $uploadedPaths[] = $filePath;
//            }
//        }
//
//        return $uploadedPaths;
//    }


    public function deleteImage($path, $disk = 'public')
    {
        if ($path && Storage::disk($disk)->exists($path)) {
            Storage::disk($disk)->delete($path);
        }
    }

    public function deleteMultipleImages($paths, $disk = 'public')
    {
        foreach ($paths as $path) {
            $this->deleteImage($path, $disk);
        }
    }
}
