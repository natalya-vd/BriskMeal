<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PhotoPreference extends Model
{
    protected $table = 'photo_preferences';

    protected $fillable = [
        'name',
        'path',
        'preference_id'
    ];

    protected $attributes = ['full_path'];

    protected $appends = ['full_path'];

    public function getFullPathAttribute()
    {
        return Storage::disk('public')->url($this->path);
    }

    public function preference()
    {
        return $this->belongsTo(Preference::class, 'preference_id', 'id');
    }
}
