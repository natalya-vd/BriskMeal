@extends('admin.layouts.main')

@section('title')
@parent Ingredients
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-ingredients data-response="{{ $data }}"></index-page-ingredients>
@endsection
