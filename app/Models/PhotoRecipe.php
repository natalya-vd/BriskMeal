<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PhotoRecipe extends Model
{
    protected $table = 'photo_recipes';

    protected $fillable = [
        'name',
        'path',
        'recipe_id'
    ];

    protected $attributes = ['full_path', 'full_path_thumbnail'];

    protected $appends = ['full_path', 'full_path_thumbnail'];

    public function getFullPathAttribute()
    {
        return Storage::disk('public')->url($this->path);
    }

    public function getFullPathThumbnailAttribute()
    {
        return $this->path_thumbnail != null ? Storage::disk('public')->url($this->path_thumbnail) : null;
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }
}
