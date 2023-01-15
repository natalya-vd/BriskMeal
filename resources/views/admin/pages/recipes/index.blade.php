@extends('admin.layouts.main')

@section('title')
@parent Recipes
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-recipes data-response="{{ $recipes }}"></index-page-recipes>
@endsection
