@extends('admin.layouts.main')

@section('title')
@parent Home
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<main>
    <div class="card w-50 mx-auto my-5">
        <p class="card-body">
            Welcome Admin!
        </p>
    </div>
</main>
@endsection
