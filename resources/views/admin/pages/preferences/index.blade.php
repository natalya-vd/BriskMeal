@extends('admin.layouts.main')

@section('title')
@parent Preferences
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<index-page-preferences data-response="{{ $preferences }}"></index-page-preferences>
@endsection
