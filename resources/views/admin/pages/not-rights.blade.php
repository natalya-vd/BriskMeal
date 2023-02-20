@extends('admin.layouts.main')

@section('title')
@parent
@endsection

@section('header')
@include('admin.partials.header')
@endsection

@section('content')
<main>
    <div class="card w-50 mx-auto my-5">
        <p class="card-body">
            Not enough rights
        </p>
    </div>
</main>
@endsection
