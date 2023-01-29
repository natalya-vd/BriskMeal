<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use Intervention\Image\Facades\Image;

class UploadFileService
{
    public function uploadImage(UploadedFile $uploadedFile, string $base_path = 'images/recipes'): string
    {
        $image_name = $uploadedFile->hashName();
        $path = $uploadedFile->storeAs($base_path . '/origin', $image_name, 'public');

        if (!$path) {
            throw new UploadException('Файл не загружен');
        }

        return $path;
    }

    public function uploadFile(UploadedFile $uploadedFile): string
    {
        $image_name = $uploadedFile->hashName();
        $path = $uploadedFile->storeAs('files/recipes', $image_name, 'public');
        if (!$path) {
            throw new UploadException('Файл не загружен');
        }

        return $path;
    }

    public function createThumbnailImage(string $path_img, string $base_path = 'images/recipes'): string
    {
        $thumbnail = Image::make(Storage::path('/public/' . $path_img));

        if (!Storage::disk('public')->exists($base_path . '/thumbnail')) {
            Storage::disk('public')->makeDirectory($base_path . '/thumbnail');
        }

        $thumbnail->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->fit(300, 300, function ($constraint) {
            $constraint->upsize();
        })->save(Storage::path('/public/' . $base_path . '/thumbnail/') . $thumbnail->basename);

        return $base_path . '/thumbnail/' . $thumbnail->basename;
    }
}
