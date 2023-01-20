@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class=" bm-catalog">
    <welcome-top></welcome-top>
    <just-3-steps></just-3-steps>
    <welcome-slider recepies="{{ json_encode($recipes) }}"></welcome-slider>
    <welcome-feelgreat></welcome-feelgreat>
</div>
@endsection

@section('footer')
@include('footer')
@endsection