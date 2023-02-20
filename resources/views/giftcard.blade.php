@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class=" bm-catalog">
    <giftcard-component></giftcard-component>
</div>
@endsection

@section('footer')
@include('footer')
@endsection