@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<div class="container">
    <plans-page></plans-page>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
