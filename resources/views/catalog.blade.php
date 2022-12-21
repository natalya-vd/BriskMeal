@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container" style="display:flex; flex-direction:column; background-color:rgb(247, 247, 247);">
    <div class="filtersBlock" style="width:100%;">

    </div>
    <div class="mealsDesk" style="display:flex; width:100%; flex-wrap: wrap; justify-content:space-between; min-height: min(88vh, calc(100vh - 140px));">
        @for ($i = 1; $i < 13; $i++)
            <meal-card 
                id={{$i}} 
                title='Creamy Chicken Alfredo'
                ingredients='spaghetti squash noodles, peas, Parmesan cheese'></meal-card>
        @endfor
    </div>
</div>
@endsection

@section('footer')
@include('footer')
@endsection