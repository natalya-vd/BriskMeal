<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function getListPreferences()
    {
        return $this->model
            ->get(['id', 'name']);
    }

    public function getListPreferencesWithPagination(): LengthAwarePaginator
    {
        return $this->model
            ->paginate(config('pagination.admin.preferences'));
    }


    public function getOnePreferenceAdmin(Preference $preference)
    {
        return $this->model->find($preference)->first();
    }

    public function create(array $data): Preference|bool
    {
        return Preference::create($data);
    }

    public function update(Preference $preference, array $data): bool
    {
        return $preference->fill($data)->save();
    }

    public function delete(Preference $preference)
    {
        return $preference->delete();
    }
}
