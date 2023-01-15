@extends('admin.layouts.main')

@section('title')
@parent Create recipe
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-recipes data-response="{{ $data }}"></create-page-recipes>
@endsection
