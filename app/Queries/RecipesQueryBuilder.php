<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Recipe;

final class RecipesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Recipe::query();
    }

    public function getRecipes()
    {
        $data = $this->model
            ->with('preferences')
            ->limit(30)
            ->get(['id', 'name', 'cook_time']);

        $dataResponse = [];
        foreach ($data as $value) {
            $preferences = [];
            foreach ($value->preferences as $preference) {
                $preferences[] = [
                    "id" => $preference->id,
                    "name" => $preference->name,
                    "color_text" => $preference->color_text,
                    "color_background" => $preference->color_background
                ];
            }
            $dataResponse[] = [
                'id' => $value->id,
                'name' => $value->name,
                'cook_time' => $value->cook_time,
                'preferences' => json_encode($preferences)
            ];
        }

        return $dataResponse;
    }
}
