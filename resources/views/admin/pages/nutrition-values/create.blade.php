@extends('admin.layouts.main')

@section('title')
@parent Create nutrition values
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-nutrition-values data-response="{{ $data }}"></create-page-nutrition-values>
@endsection
