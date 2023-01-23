@extends('admin.layouts.main')

@section('title')
@parent Create ingredient
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-ingredients data-response="{{ $data }}"></create-page-ingredients>
@endsection
