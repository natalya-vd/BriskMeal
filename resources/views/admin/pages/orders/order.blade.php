@extends('admin.layouts.main')

@section('title')
@parent Order
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<order-page-orders data-response="{{ $order }}"></order-page-orders>
@endsection