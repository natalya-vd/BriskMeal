@extends('admin.layouts.main')

@section('title')
@parent Edit recipe
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<edit-page-recipes data-response="{{ $data }}"></edit-page-recipes>
@endsection
