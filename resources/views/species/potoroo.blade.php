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
			<li class="breadcrumb-item active" aria-current="page">Long-Footed Potoroo</li>
		</ol>
	</nav>
	<div class="row" style="text-align: center;">
		<div class="stats">
			<h1 data-aos="zoom-in-left" data-aos-duration="2500" > Long-Footed Potoroo </h1>
		</div>
	</div>

	<div class="row" style="text-align: center;">
		<div class="card-group">
			<div data-aos="zoom-in-left" data-aos-duration="2500" class="card" style="margin-bottom: 20px;"><img class="card-img-top rounded-circle " src="{{ asset('images/CategoryImage2.jpg') }}" alt="Card image cap">
			</div>
		</div>
	</div>
	<div class="row">
		<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="height: 100px;">
			<h1 style="font-size:1vw; height:100px !important; margin-top: 20px;">
				The Long-Footed Potoroos are a group of small rabbit-sized ‘primitive’ kangaroos, typically
				restricted to habitats with dense understorey vegetation. The Long-Footed Potoroo has a long-nosed, a hairless tail and a bandicoot-like face; grey-brown fur that is paler on the underside;besides, the Long-Footed Potoroo has a leathery pad on the sole of its foot, just behind the inner toe. Normally, the Long-Footed Potoroo has a head and body length of about 400 mm, a tail length of about 320 mm and weighs between 1.6 - 2.2 kg.
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
					<p class="card-text">Scientific name- Potorous longipes</p>
					<p class="card-text">Class- Mammalia</p>
					<p class="card-text">Family- Potoroidae</p>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					Distribution
				</div>
				<div class="card-body">
					<p class="card-text">The Long-Footed Potoroo has a very limited distribution and is extremely rare. You can find them in two core populations occur in Victoria and south-eastern NSW (approximately 20 km north of the Victorian border in the South East).</p>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Threat Information
				</div>
				<div class="card-body">
					<p class="card-text">Conservation Status- Endangered</p>
					<p class="card-text">Species Threat Level- Vulnerable</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="height: 100px;">
			<h1 style="font-size:1vw; height:100px !important; margin-top: 20px;">Current Measures--</h1>
			<h3 style="font-size:1vw; height:100px !important; margin-top: 20px; margin-left: 20px;">The species has been recorded in several National Parks and Fauna Reserves, namely the Alpine, Errinundra and Snowy River National Parks and the Martins Creek and Goolengook Flora and Fauna Reserves in Victoria, and the South-east Forests National Park in New South Wales.</h3>
		</div>
	</div>
</div>
@endsection