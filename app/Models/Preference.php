<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $table = 'preferences';

    protected $fillable = [
        'name',
        'color_text',
        'color_background'
    ];

    protected $hidden = ['pivot'];

    public function photo()
    {
        return $this->hasOne(PhotoPreference::class, 'preference_id', 'id');
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_preferences', 'preference_id', 'recipe_id')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'preference_user',
            'preference_id',
            'user_id',
        );
    }
}
