@extends('layouts.app')

@section('header')
    @include('header')
@endsection

@section('content')
    <div class="container bm-catalog pt-4">
        <div class="bm-catalog_filtersBlock pb-3">
            <weeks-navigation
                active-weeks="{{$activeWeeks}}"
                week="{{$week}}">
            </weeks-navigation>
        </div>

        <div class="mealsDesk bm-catalog__list">
            @foreach ($recipes['items'] as $recipe)
                <div class="bm-catalog_meal_card_place">
                    <meal-card id="{{ $recipe['id'] }}"
                               text="{{ $recipe['text'] }}"
                               time="{{ $recipe['cook_time'] }}"
                               title="{{ $recipe['name'] }}"
                               ingredients="{{$recipe['ingredients']}}"
                               plans="{{ $recipe['preferences'] }}"
                               photo="{{ $recipe['photo'] }}"
                               week="{{ $recipes['week_id'] }}"
                               guest="{{ Auth::guest() }}"
                               quantity="{{ $recipe['quantity'] }}">
                    </meal-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
