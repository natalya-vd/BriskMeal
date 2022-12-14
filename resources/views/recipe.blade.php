@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container bm-recipe">
    <div class="mealsDesk bm-recipe__wrapper">
        <recipy-title title="{{$recipe['name']}}" ingredients="{{$recipe['ingredients']}}"></recipy-title>
        <div class="recipyInfoBlock">
            <div class="recipyMainBlock">
                <recipy-main id="{{ $recipe['id'] }}" time="{{ $recipe['cook_time'] }}" plans="{{ $recipe['preferences'] }}" calories="{{ $recipe['calories'] }}" photo="{{ $recipe['photo'] }}"></recipy-main>
                <recipy-description description="{{ $recipe['description'] }}"></recipy-description>
                <recipy-ingredients ingredients="{{ $recipe['ingredients'] }}" allergens="{{ $recipe['allergens'] }}"></recipy-ingredients>
            </div>
            <recipy-nutrition nutrition-values="{{ $recipe['nutrition_values'] }}"></recipy-nutrition>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
