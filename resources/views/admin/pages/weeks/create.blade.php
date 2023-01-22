@extends('admin.layouts.main')

@section('title')
@parent Weeks
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<create-page-weeks data-response="{{ $data }}"></create-page-weeks>
@endsection
