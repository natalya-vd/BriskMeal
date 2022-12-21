@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container bm-recipe">
    <div class="filtersBlock" style="width:100%;">

    </div>
    <div class="mealsDesk bm-recipe__wrapper">
        <recipy-header></recipy-header>
        <div class="recipyInfoBlock">
            <div class="recipyMainBlock">
                <recipy-main></recipy-main>
                <recipy-description></recipy-description>
            </div>
            <recipy-nutrition></recipy-nutrition>
        </div>
        <recipy-ingredients></recipy-ingredients>
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
