@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
    @parent
    @include('layouts/sliderHome')
    @include('homePageContent')
    @include('layouts/categories')
@endsection

@yield('content')

@section('footer')
	@include('footer')
@endsection

@section('scripts')
@endsection