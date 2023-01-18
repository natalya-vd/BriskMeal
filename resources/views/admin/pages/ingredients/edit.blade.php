@extends('admin.layouts.main')

@section('title')
@parent Edit ingredient
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<edit-page-ingredients data-response="{{ $data }}"></edit-page-ingredients>
@endsection
