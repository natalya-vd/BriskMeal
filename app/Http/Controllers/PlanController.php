<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StorePlanRequest;
use App\Queries\WeekQueryBuilder;
use App\Queries\PreferenceQueryBuilder;
use App\Queries\UserQueryBuilder;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        PreferenceQueryBuilder $builder_preference,
        WeekQueryBuilder $week_builder,
        UserQueryBuilder $builder_user
    ) {
        $plan = $builder_user->getPlanUser($request->user());

        $dataResponse = [
            "listPreferences" => $builder_preference->getPreferencesListForPlans(),
            "plan_user" => $plan,
            "price_recipe" => $week_builder->getPriceRecipe()
        ];

        return view('plans')->with('data', json_encode($dataResponse, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /**
     * Запись данных о выбранном плане питания пользователя в БД по Api
     *
     * @param  \App\Http\Requests\StorePlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanRequest $request,  UserQueryBuilder $builder_user): Response
    {
        $plan = $request->validated();
        $is_plan_save = $builder_user->createOrUpdatePlan($request->user(), $plan);

        if ($is_plan_save) {
            return response(__('Ok'));
        }
    }
}
