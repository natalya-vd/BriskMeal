@extends('admin.layouts.main')

@section('title')
@parent Edit allergen
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<edit-page-allergens data-response="{{ $data }}"></edit-page-allergens>
@endsection
