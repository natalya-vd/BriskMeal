@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container bm-catalog">
    <div class="bm-catalog_filtersBlock">

    </div>
    <div class="mealsDesk bm-catalog__list">
        @foreach ($recipes as $recipy)
        <div class="bm-catalog_meal_card_place">
            <meal-card id="{{ $recipy['id'] }}" time="{{ $recipy['cook_time'] }}" title="{{ $recipy['name'] }}" ingredients="{{$recipy['ingredients']}}" plans="{{ $recipy['preferences'] }}"></meal-card>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
