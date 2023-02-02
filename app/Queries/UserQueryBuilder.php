<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;

use App\Models\User;

final class UserQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = User::query();
    }

    public function getPlanUser(User|null $user)
    {
        if (is_null($user) || $user->preferences->isEmpty() || is_null($user->num_people) || is_null($user->meals_week)) {
            return [];
        }

        $keto_paleo = [
            'id' => [],
            'name' => [],
        ];
        $preferenceResponse = [];

        foreach ($user->preferences as $value) {
            if ($value->name == 'Keto' || $value->name == 'Paleo') {
                $keto_paleo['id'][] = (string)$value->id;
                $keto_paleo['name'][] = (string)$value->name;
            } else {
                $preferenceResponse[] = [
                    'id' => (string)$value->id,
                    'name' => $value->name,
                ];
            }
        }
        $keto_paleo['id'] = implode("+", $keto_paleo['id']);
        $keto_paleo['name'] = implode(" + ", $keto_paleo['name']);
        $preferenceResponse = Arr::prepend($preferenceResponse, $keto_paleo);

        $dataResponse = [
            "preferences" => $preferenceResponse,
            "num_people" => $user->num_people,
            "meals_week" => $user->meals_week,
            "max_quantity_recipes" => $user->num_people * $user->meals_week / 2
        ];

        return $dataResponse;
    }

    public function createOrUpdatePlan(User $user, array $plan): bool
    {
        $preferences_id_str = implode(",", str_replace('+', ',', $plan['preferences']));
        $preferences_id_str_array = explode(',', $preferences_id_str);
        $preferences_id = array_map('intval', $preferences_id_str_array);

        // Обновляем/удаляем/создаем preferences в таблице связи в БД
        $user->preferences()->sync($preferences_id);

        //Обновляем таблицу пользователей
        $is_save = $user->fill($plan)->save();

        return $is_save;
    }
}
