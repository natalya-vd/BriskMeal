@extends('admin.layouts.main')

@section('title')
@parent Edit preference
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<edit-page-preferences data-response="{{ $data }}"></edit-page-preferences>
@endsection
