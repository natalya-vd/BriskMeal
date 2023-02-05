@extends('layouts.app')

@section('header')
@include('header')
@endsection

@section('content')
<order-page data-response="{{$data}}"></order-page>


@endsection