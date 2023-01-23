@extends('admin.layouts.main')

@section('title')
@parent Edit unit
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<edit-page-units data-response="{{ $data }}"></edit-page-units>
@endsection
