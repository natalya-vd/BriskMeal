@extends('admin.layouts.main')

@section('title')
@parent Create preference
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-preferences></create-page-preferences>
@endsection
