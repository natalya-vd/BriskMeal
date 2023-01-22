@extends('admin.layouts.main')

@section('title')
@parent Edit nutrition values
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<edit-page-nutrition-values data-response="{{ $data }}"></edit-page-nutrition-values>
@endsection
