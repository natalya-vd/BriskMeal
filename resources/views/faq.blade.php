@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class=" bm-catalog">
    <faq-component></faq-component>
    <welcome-feelgreat></welcome-feelgreat>
</div>
@endsection

@section('footer')
@include('footer')
@endsection