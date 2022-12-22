@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container bm-catalog">
    <div class="bm-catalog_filtersBlock">

    </div>
    <div class="mealsDesk bm-catalog__list">
        @for ($i = 1; $i < 13; $i++)
            <div  class="bm-catalog_meal_card_place">
                <meal-card 
                    id={{$i}} 
                    title='Creamy Chicken Alfredo' 
                    ingredients='spaghetti squash noodles, peas, Parmesan cheese'
                    time=35>
                </meal-card>
            </div>
        @endfor
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
