@extends('admin.layouts.main')

@section('title')
@parent Create allergen
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-allergens></create-page-allergens>
@endsection
