@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container bm-catalog">
    <div class="bm-catalog_filtersBlock">
        <weeks-navigation active-weeks="{{$activeWeeks}}" week="{{$week}}"></weeks-navigation>
    </div>
    <div class="mealsDesk bm-catalog__list">

        @foreach ($recipes['items'] as $recipy)
        <div class="bm-catalog_meal_card_place">
            <meal-card id="{{ $recipy['id'] }}" time="{{ $recipy['cook_time'] }}" title="{{ $recipy['name'] }}" ingredients="{{$recipy['ingredients']}}" plans="{{ $recipy['preferences'] }}" photo="{{ $recipy['photo'] }}" week="{{ $recipes['week_id'] }}"></meal-card>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
