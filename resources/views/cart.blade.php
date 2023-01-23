@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container">
    <cart-page data-response="{{ $data }}"></cart-page>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
