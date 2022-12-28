@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container">
    <cart-page data="Тут будут данные в виде JSON"></cart-page>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
