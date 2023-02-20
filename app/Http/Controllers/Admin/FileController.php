<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Services\UploadFileService;
use App\Models\PhotoRecipe;
use App\Models\Recipe;

class FileController extends Controller
{
    /**
     * Загрузка фото на сервер и запись пути в БД
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRecipesPhoto(
        UploadFileService $uploadedFile,
        PhotoRecipe $model_photo,
        Request $request
    ) {
        $data = $request->validate(
            [
                'recipe_id' => 'required|integer|exists:recipes,id',
                'image' => 'required|array',
                'image.*' => 'image',
            ]
        );

        $path = [];
        foreach ($data['image'] as $key => $file) {
            $path_origin = $uploadedFile->uploadImage($file);
            $path_thumbnail = $uploadedFile->createThumbnailImage($path_origin);
            $path[$key]['full_path'] = Storage::disk('public')->url($path_origin);
            $path[$key]['full_path_thumbnail'] = Storage::disk('public')->url($path_thumbnail);

            $model_photo::insert([
                'path' => $path_origin,
                'path_thumbnail' => $path_thumbnail,
                'recipe_id' => $data['recipe_id'],
            ]);
        }

        $photo = $model_photo::where('recipe_id', $data['recipe_id'])->get();

        return response($photo->toJson());
    }

    /**
     * Удаление фото на сервере и записи в БД
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRecipesPhoto(PhotoRecipe $model_photo, $photo_id)
    {
        $photo = $model_photo::where('id', $photo_id)->first();

        if ($photo->delete() && !str_contains($photo->path, 'seed/')) {
            Storage::disk('public')->delete($photo->path);
            Storage::disk('public')->delete($photo->path_thumbnail);
        }

        return response('ok');
    }

    /**
     * Загрузка файла пдф на сервер и запись пути в БД
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRecipesFile(
        UploadFileService $uploadedFile,
        Recipe $model_recipe,
        Request $request
    ) {
        $path = null;
        $data = $request->validate(
            [
                'recipe_id' => 'required|integer|exists:recipes,id',
                'file' => 'required|mimes:pdf'
            ]
        );
        if ($request->hasFile('file')) {
            $path = $uploadedFile->uploadFile($data['file']);

            $path_pdf = $model_recipe::where('id', $data['recipe_id'])->first()->path_pdf;
            if ($path_pdf != null) {
                Storage::disk('public')->delete($path_pdf);
            }

            $model_recipe::where('id', $data['recipe_id'])->update([
                'path_pdf' => $path,
            ]);
        }

        return response($path != null ? Storage::disk('public')->url($path) : null);
    }

    /**
     * Удаление файла пдф на сервер и обнуление записи пути в БД
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRecipesFile(Recipe $recipe)
    {
        $path_pdf = $recipe->path_pdf;

        if ($recipe->fill(['path_pdf' => null])->save()) {
            Storage::disk('public')->delete($path_pdf);
        }

        return response('ok');
    }
}
