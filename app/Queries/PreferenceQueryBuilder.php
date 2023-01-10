<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Preference;

final class PreferenceQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Preference::query();
    }

    public function getPreferencesForPlans()
    {
        $preference = $this->model
            ->with('photo')
            ->get(['id', 'name']);

        $keto_paleo = [
            'id' => [],
            'name' => [],
            'photo' => [],
        ];
        $preferenceResponse = [];

        foreach ($preference as $value) {
            $photo = $value->photo()->get(['id', 'name', 'path'])->first();

            if ($value->name == 'Keto' || $value->name == 'Paleo') {
                $keto_paleo['id'][] = (string)$value->id;
                $keto_paleo['name'][] = (string)$value->name;
                $keto_paleo['photo'] = $photo;
            } else {
                $preferenceResponse[] = [
                    'id' => (string)$value->id,
                    'name' => $value->name,
                    'photo' => $photo
                ];
            }
        }
        $keto_paleo['id'] = implode("+", $keto_paleo['id']);
        $keto_paleo['name'] = implode(" + ", $keto_paleo['name']);
        $preferenceResponse = Arr::prepend($preferenceResponse, $keto_paleo);

        return $preferenceResponse;
    }
}
