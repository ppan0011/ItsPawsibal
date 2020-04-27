<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleControls" style="width: 100px; height: 10px;" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleControls" style="width: 100px; height: 10px;" data-slide-to="1"></li>
    <li data-target="#carouselExampleControls" style="width: 100px; height: 10px;" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/SliderImage1.png') }}" alt="First slide">
      <div class="carousel-caption  d-md-block">
        <h1 class="carousel-title">Vast number of species are on the verge of extinction.</h1>
        <button type="button" class="btn btn-success">View the Species</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/SliderImage2.jpg') }}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="carousel-title">Spot an injured Animal?</h1>
        <button type="button" class="btn btn-success">Report the animal</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/SliderImage3.jpg') }}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="carousel-title">Help an injured animal</h1>
        <button type="button" class="btn btn-success">Click here to know</button>
      </div>
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>