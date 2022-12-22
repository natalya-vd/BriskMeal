<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoPreference extends Model
{
    protected $table = 'photo_preferences';

    protected $fillable = [
        'name',
        'path',
        'preference_id'
    ];

    public function preference()
    {
        return $this->belongsTo(Preference::class, 'preference_id', 'id');
    }
}
