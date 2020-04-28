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
				<li class="breadcrumb-item active" aria-current="page">Brush-Tailed Rock-Wallaby</li>
			</ol>
		</nav>
	<div class="row" style="text-align: center;">
		<div class="stats">
			<h1 data-aos="zoom-in-left" data-aos-duration="2500" > Brush-Tailed Rock-Wallaby </h1>
		</div>
	</div>

	<div class="row" style="text-align: center;">
		<div class="card-group">
			<div data-aos="zoom-in-left" data-aos-duration="2500" class="card" style="margin-bottom: 20px;"><img class="card-img-top rounded-circle " src="{{ asset('images/SliderImage2.jpg') }}" alt="Card image cap">
			</div>
		</div>
	</div>
	<div class="row">
		<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="height: 150px;">
			<h1 style="font-size:1vw; height:150px !important; margin-top: 20px;
			">The Brush-tailed rock-wallaby is the only species of Rock-wallaby which lives in Victoria.
			The average weight of this species is about 8 kg for males and 6 kg for females. As their
			name implies, the Brush-tailed Rock-wallaby have the distinctively bushy tail, the dark
			rufous-brown tail that is bushier towards its tips. It has long, thick, brown body-fur that tends
			to be rufous on the rump and greyer on the shoulders. The fur on its chest and belly are paler,
			and some individuals have a white blaze on their chest. It also has a characteristic white
			cheek-stripe and a black stripe from its forehead to the back of its head.
			The Brush-tailed rock-wallaby is a born athlete, thanks to its compact and muscular build, and
			the long and flexible tail, it can move quickly and smoothly through rugged terrain, their tail
		also helps them balance themselves and provide excellent traction.</h1>
	</div>
</div>
<div class="row" style="margin-top: 20px;" data-aos="fade-right" data-aos-duration="2500">
	<div class="card-group">
		<div class="card">
			<div class="card-header">
				Some Common Information:
			</div>
			<div class="card-body">
				<p class="card-text">Scientific name- Petrogale penicillata</p>
				<p class="card-text">Class- Mammalia</p>
				<p class="card-text">Family- Macropodidae</p>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				Distribution
			</div>
			<div class="card-body">
				<p class="card-text">You can find them from south-east Queensland to the Grampians in western Victoria, but nowadays, this vulnerable species becomes more fragmented, it is hard to see them in the wild. Normally, the Brush-tailed Rock-wallaby live on rocky escarpments, granite outcrops and cliffs, which have caves and ledges as a shelter and they prefer to face north for warmth.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				Threat Information
			</div>
			<div class="card-body">
				<p class="card-text">Conservation Status- Near Threatened (Population decreasing)</p>
				<p class="card-text">Species Threat Level- Vulnerable</p>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="height: 100px;">
		<h1 style="font-size:1vw; height:100px !important; margin-top: 20px;">Current Measures--</h1>
		<h3 style="font-size:1vw; height:100px !important; margin-top: 20px; margin-left: 20px;">The government has Established natural reservations for protecting them, such as Grampians National Park, Snowy River National Park in East Gippsland.</h3>
	</div>
</div>

</div>
@endsection