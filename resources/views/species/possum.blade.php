@extends('layouts.master')

@section('title', 'Species')

@section('navbar')
@parent
@endsection

@section('content')
@parent
<div class="container">
	<nav aria-label="breadcrumb" data-aos="zoom-in-left" data-aos-duration="2500" style="margin-top: 20px;">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Mountain Pygmy Possum</li>
		</ol>
	</nav>
	<div class="row" style="text-align: center;">
		<div class="stats">
			<h1 data-aos="zoom-in-left" data-aos-duration="2500" > Mountain Pygmy Possum </h1>
		</div>
	</div>

	<div class="row" style="text-align: center;">
		<div class="card-group">
			<div data-aos="zoom-in-left" data-aos-duration="2500" class="card" style="margin-bottom: 20px;"><img class="card-img-top rounded-circle " src="{{ asset('images/CategoryImage3.jpg') }}" alt="Card image cap">
			</div>
		</div>
	</div>
	<div class="row">
		<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="height: 150px;">
			<h1 style="font-size:1vw; height:150px !important; margin-top: 20px;">
				The Mountain Pygmy-possum is Australia’s only hibernating marsupial and the only Australian mammal to be entirely restricted to the alpine zone in areas above the winter snowline and can hibernate for up to seven months under the snow. Their fur is dense and fine, grey-brown above and creamy to bright fawn under the body and the nose is pink and there are dark shadows around the eyes. The Mountain Pygmy-possum’s tail can be coiled, is furred for 2 cm at its base, then greyish-pink, with short, sparse hairs. Normally, the total length of Mountain Pygmy-possum is 250mm, and the over half is tail; and Mountain Pygmy-possum adults average 40 grams but vary from 30 grams in spring up to 80 grams in autumn when they fatten for winter hibernation. Sometimes when people see them, they may be mistaken for a House Mouse, but its larger size, part furry and coiled tail, 5 (not 4) front toes, and joined (syndactyl) second and third back toes should be clear and enough for people to distinguish it.
			</h1>
		</div>
	</div>
	<div class="row" style="margin-top: 20px;" data-aos="fade-right" data-aos-duration="2500">
		<div class="card-group">
			<div class="card">
				<div class="card-header">
					Some Common Information:
				</div>
				<div class="card-body">
					<p class="card-text">Scientific name- Burramys parvus</p>
					<p class="card-text">Class- Mammalia</p>
					<p class="card-text">Family- Burramyidae</p>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					Distribution
				</div>
				<div class="card-body">
					<p class="card-text">The Mountain Pygmy-possum’s distribution is only limited to alpine and sub-alpine regions where there is a continuous period of snow cover for up to six months. We can find them in two national parks: the Kosciuszko National Park and Alpine National Park in Victoria. Normally they live in deep boulder fields with high elevations, and the total area of occupancy of this species is thought to be less than 7 km².</p>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Threat Information
				</div>
				<div class="card-body">
					<p class="card-text">Conservation Status- Critically Endangered (Population decreasing)</p>
					<p class="card-text">Species Threat Level- Vulnerable</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="height: 100px;">
			<h1 style="font-size:1vw; height:100px !important; margin-top: 20px;">Current Measures--</h1>
			<h3 style="font-size:1vw; height:100px !important; margin-top: 20px; margin-left: 20px;">Th government is organizing tree planting campaigns and shrubs like Alpine Plum Pines to increase the number of insects in the region. They arealso working on increasing the produce of fruits and nuts for the possums to eat in autumn. Creation of boulder field to emulate habitat at Mt Buller is under progress.</h3>
		</div>
	</div>
</div>
@endsection