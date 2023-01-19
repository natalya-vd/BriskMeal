@extends('admin.layouts.main')

@section('title')
@parent Nutrition values
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-nutrition-values data-response="{{ $data }}"></index-page-nutrition-values>
@endsection
