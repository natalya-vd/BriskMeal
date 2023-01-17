@extends('admin.layouts.main')

@section('title')
@parent Units
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-units data-response="{{ $units }}"></index-page-units>
@endsection
