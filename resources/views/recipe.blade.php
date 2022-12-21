@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container" style="display:flex; flex-direction:column; background-color:rgb(247, 247, 247);">
    <div class="filtersBlock" style="width:100%;">

    </div>
    <div class="mealsDesk" style="display:flex; width:100%; flex-direction:column; min-height: min(88vh, calc(100vh - 140px));">
        <recipy-header></recipy-header>
        <div class="recipyInfoBlock" style="margin-bottom:24px; display:flex;">
            <div class="recipyMainBlock" style="margin-bottom:24px; display:flex; flex-direction:column;">    
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
