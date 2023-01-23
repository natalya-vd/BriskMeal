@extends('admin.layouts.main')

@section('title')
@parent Create unit
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-units></create-page-units>
@endsection
