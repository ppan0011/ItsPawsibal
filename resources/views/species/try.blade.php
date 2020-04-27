@extends('layouts.master')

@section('title', 'Species')

@section('navbar')
@parent
@endsection

@section('content')
@parent
@include('species/sliderCategoriesEndangered')

      <div class="container">
        <h1 data-aos="fade-left" style="margin-top:50px;margin-left: 50px; text-align: justify;">"Want to see how detrimental the busfires have affected these species?"</h1>
        <div class="drop-down-wrapper" style="margin-bottom: 100px;">
          <select class="btn btn-success state-dropdown" value="all">
            <option value="all">Select the State you want to view.</option>
            <option value="Victoria">Victoria</option>
            <option value="New South Wales">New South Wales</option>
          </select>

          <select class="btn btn-success species-dropdown" value="all">
            <option value="all">Select the Species you want to view.</option>
            <option value="Brush-tailed Rock-wallaby">Brush-tailed Rock-wallaby</option>
            <option value="Broad-Toothed Rat">Broad-Toothed Rat</option>
            <option value="Great Glider">Great Glider</option>
          </select>

          <h2>Selected Nothing</h2>

          <input type="hidden" id="final-val" state-value="all" species-value="all">
        </div>
        <div id="map" style="margin-bottom: 200px;"></div>

      </div>

  @endsection

  @section('scripts')
  @endsection