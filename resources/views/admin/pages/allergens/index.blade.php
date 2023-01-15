@extends('admin.layouts.main')

@section('title')
@parent Allergens
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-allergens data-response="{{ $allergens }}"></index-page-allergens>
@endsection
