@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container bm-catalog">
    <div class="filtersBlock" style="width:100%;">

    </div>
    <div class="mealsDesk bm-catalog__list">
        @for ($i = 1; $i < 13; $i++) <meal-card id={{$i}} title='Creamy Chicken Alfredo' ingredients='spaghetti squash noodles, peas, Parmesan cheese'>
            </meal-card>
            @endfor
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
