@extends('layouts.master')

@section('title', 'Species')

@section('navbar')
@parent
@endsection

@section('content')
@parent

<div class="container">
	<div class="row">
		<nav aria-label="breadcrumb" data-aos="zoom-in-left" data-aos-duration="2500" style="margin-top: 20px;">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Credits</li>
			</ol>
		</nav>
	</div>

	<div class="row">
		<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style=" font-size: 1.5vw; height: 70px;">
			Here are the following organisation and sources we would like to thank for allowing the usage of data under Creative commons and open data licenses:
		</div>
	</div>

	<div class="row">
		<div class="stats">
			<h3 data-aos="fade-up" data-aos-duration="2500" style="font-size: 1.25vw; text-align: left !important;"> 1. <a href="https://data.gov.au/">https://data.gov.au/</a> - For Victorian suburb data. </h3>

			<h3 data-aos="fade-up" data-aos-duration="2200" style="font-size: 1.25vw; text-align: left !important;"> 2. <a href="http://www.environment.gov.au/">http://www.environment.gov.au/</a> - For making ‘Species of National Environmental Significance Database’ for Australia accessible for public use. </h3>

			<h3 data-aos="fade-up" data-aos-duration="2000" style="font-size: 1.25vw; text-align: left !important;"> 3. <a href="https://earthdata.nasa.gov/">https://earthdata.nasa.gov/</a> for providing fire data according to pointwise location in Australia. This data corresponds to the recent 2019-2020 bushfire period in Victoria from 21st November 2019 to 27th February 2020. </h3>

			<h3 data-aos="fade-up" data-aos-duration="2900" style="font-size: 1.25vw; text-align: left !important;"> 4. Atlas of living Australia - For making  a usable API to query recent species reported on their platform. </h3>

			<h3 data-aos="fade-up" data-aos-duration="2300" style="font-size: 1.25vw; text-align: left !important;"> 5. Wildlife Victoria - For showing the species reported to their platform on a map with the point coordinates </h3>
		</div>
	</div>
</div>
@endsection