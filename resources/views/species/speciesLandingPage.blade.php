@extends('layouts.master')

@section('title', 'Species')

@section('navbar')
@parent
@endsection

@section('content')
@parent
@include('species/sliderCategoriesEndangered')

      <div class="stats">
          <h1 data-aos="zoom-in-left" data-aos-duration="2500"> Do you know ?</h1>
      </div>
      <div data-aos="fade-left" data-aos-duration="2500" class="stats-details">
          <h1 style="margin-top:50px;margin-left: 50px; text-align: justify;">"More than 480 million mammals, birds and reptiles have been affected because of the drastic bushfire season 2019-2020."</h1>
          <img src="{{ asset('images/CategoryImage3.jpg') }}" style="width: 700px;">
      </div>
      <div data-aos="fade-right" data-aos-duration="2500" class="stats-details-right">
          <h1><div id="counter">
              <div style="width: 350px;">
                <p class="counter-value" data-count="7"></p>
                <h3>Species became extinct</h3>
              </div>
              <div style="width: 500px;"><p class="counter-value" data-count="17"></p>
                <h3>Species became extinct</h3></div>
              <div><p class="counter-value" data-count="601704"></p>
                <h3>Hectares have been burnt so far.</h3></div>
              </div> 
          </h1>
      </div>
      <div data-aos="fade-left" data-aos-duration="2500" class="stats-details">
          <h1 style="margin-top:50px;margin-left: 50px; text-align: justify;">"Want to see how detrimental the busfires have affected these species?"</h1>
          <div><button type="button" class="btn btn-success button-stats" onclick="myFunction()" style="margin-top:80px; margin-bottom: 20px;margin-left: 50px; width:147px; text-align: justify;">Click here to know</button></div>
          <img src="{{ asset('images/PotorooImage.jpg') }}">
      </div>
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
      
      <script type="text/javascript">
        function myFunction() {
          var x = document.getElementById("map");
          x.style.display = "none";
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none"; 
          }
        }
      </script>
  @endsection

  @section('scripts')
  @endsection