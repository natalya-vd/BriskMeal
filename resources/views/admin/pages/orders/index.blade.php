@extends('admin.layouts.main')

@section('title')
@parent Orders
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-orders data-response="{{ $orders }}"></index-page-orders>
@endsection