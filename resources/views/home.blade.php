@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
    @parent
    @include('layouts/sliderHome')
    @include('layouts/categories')
@endsection

@yield('content')

@section('scripts')
@endsection