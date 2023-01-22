@extends('admin.layouts.main')

@section('title')
@parent Recipes of weeks
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-weeks data-response="{{ $data }}"></index-page-weeks>
@endsection
