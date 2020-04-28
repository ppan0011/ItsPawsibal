@extends('layouts.master')

@section('title', 'Location Based Vulnerability')

@section('navbar')
@parent
@endsection

@section('content')
@parent

<div data-aos="fade-left" data-aos-duration="2500" class="stats-details" style="margin-top: 10px;"> 
	<h1 style="margin-top:50px; margin-left: 50px; text-align: justify; font-size:2.5vw">Important Disclaimer:</h1>
	<ol>
		<li class="li-content" style="font-size:1vw; margin-right:50px; margin-left: 50px; margin-bottom: 10px; text-align: justify;">
			Species Information is approximate and has been taken from 'Species of National Environmental Significance Database', which has been adapted for public use, and only the animal species known to exist in Victoria (may exist elsewhere also) are being shown.The information about species habitat has been updated last year before the 2019-2020 bushfire season started in Victoria. Also note that this information will only pertain to animal species at risk and not cover all other kinds of animals whose conservation status is less severe than vulnerable species.
		</li>

		<li class="li-content" style="font-size:1vw; margin-left:50px; margin-right: 50px; margin-bottom: 10px; text-align: justify;">
			Always keep your safety a priority before deciding to enter a high risk area as depicted on this website. We do not take any responsibility or liability for an individual deciding to enter any region as depicted here or suggested otherwise.
		</li>

		<li class="li-content" style="font-size:1vw; margin-left:50px; margin-right: 50px; margin-bottom: 10px; text-align: justify;">
			Always refer to <a href="https://www.emergency.vic.gov.au/respond/">VicEmergency</a> for latest warnings and incidents for all regions.
		</li>

		<li class="li-content" style="font-size:1vw; margin-right:50px; margin-left: 50px; margin-bottom: 10px; text-align: justify;">
			Distance to the nearest bushfire region on this page is the approximate straight line distance and should not be inferred as the driving distance. Also this distance is restricted within the Victorian state boundary.
		</li>

		<li class="li-content" style="font-size:1vw; margin-right:50px; margin-left: 50px; text-align: justify;">
			Before deciding to go to any location as suggested here or otherwise, kindly look at all rules and regulation with respect to that place, as the area may or may not be accessible to general public.
		</li>
	</ol>
</div>
<div data-aos="fade-right" data-aos-duration="2500" class="stats-details" style="margin-top: 10px; height: 100px !important;"> 
	<h1 style="margin-top:25px; margin-left: 50px; text-align: justify; font-size:2.0vw">Your Suburb:</h1>
	<h2 style="margin-top:35px; margin-left: 70px; text-align: justify; font-size:1.5vw" id="append-suburb"> Please allow us to access your location for us to determine if you are in a bushfire affected region.</h2>
	<button class="btn btn-success location-fetch" style="margin-left: 20px;"><a id="check">Allow Location Access</a></button>
</div>

<div data-aos="fade-up" data-aos-duration="2500" class="stats-details" style="margin-top: 10px; height: 100px !important;"> 
	<h1 style="margin-top:25px; margin-left: 50px; text-align: justify; font-size:2.0vw">Bushfire Information:</h1>
	<h2 class="data-test_1" style="margin-top:35px; margin-left: 70px; text-align: justify; font-size:1.5vw">Please allow access to your location.</h2>
</div>

<div data-aos="fade-up" data-aos-duration="2500" class="stats-details" style="margin-top: 10px; height: 130px !important;"> 
	<h1 style="margin-top:25px; margin-left: 50px; text-align: justify; font-size:2.0vw">Closest Bushfire:</h1>
	<h2 class="data-test_3" style="margin-top:35px; margin-left: 70px; text-align: justify; font-size:1.5vw">Please allow access to your location.</h2>
</div>

<div class="stats" id="show-stats">
	<h1 data-aos="zoom-in-left" data-aos-duration="2500" style="margin-top: 20px;"> We could find the following species near your location </h1>
</div>

<div class="container">
	<table style="background: #63A362;" class="table table-bordered table-striped" id = "species_table">
		<thead>
			<tr style="font-size: 24px;">
				<th>Common Name</th>
				<th>Species Class</th>
				<th>Likelihood of Occurrence</th>
				<th>Conservation Status</th>
			</tr>
		</thead>
	</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$('#show-stats').hide();
		$('#species_table').hide();

		$( "#check" ).click(function() {
			navigator.geolocation.getCurrentPosition(onPositionUpdate);
			navigator.geolocation.getCurrentPosition(onPositionUpdate_1);
			navigator.geolocation.getCurrentPosition(onPositionUpdate_2);
			navigator.geolocation.getCurrentPosition(onPositionUpdate_3);
		});
	});

	function onPositionUpdate(position) {
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		$.ajax({
			url :"https://bushfire-victoria.herokuapp.com/species/"+lon+" "+lat,
			dataType : "json",
			success : function(parsed_json) {
				var location = parsed_json;
				var location = parsed_json ;
				var species_info = '';
				$.each(parsed_json, function(key, value){
					species_info+='<tr>';
					species_info+='<td>'+value.comm_name+'</td>';
					species_info+='<td>'+value.tax_group+'</td>';
					species_info+='<td>'+value.pres_rank+'</td>';
					species_info+='<td>'+value.threatened+'</td>';
					species_info+='</tr>';
				});
				$('#species_table').append(species_info);
					// console.log(location);
					$(".data-test_2").html(location);
					$('#show-stats').show();
					$('#species_table').show();
				}

			});

	}

	function onPositionUpdate_1(position) {
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		$.ajax({
			url :"https://bushfire-victoria.herokuapp.com/bushfire/"+lon+" "+lat,
			success : function(parsed_json) {
				var location = parsed_json    ;
				console.log(location);
				$(".data-test_1").html(location);
			}
		});
	}

	function onPositionUpdate_2(position) {
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		$.ajax({
			url :"https://bushfire-victoria.herokuapp.com/suburb/"+lon+" "+lat,
			success : function(parsed_json) {
				var location = parsed_json;
				console.log(location);
				$("#append-suburb").html(location);
			}
		});
	}

	function onPositionUpdate_3(position) {
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		$.ajax({
			url :"https://bushfire-victoria.herokuapp.com/distance/"+lon+" "+lat,
			success : function(parsed_json) {
				var location = parsed_json    ;
				console.log(location);
				$(".data-test_3").html(location).preventDefault();
			}
		});
	}
</script> 
@endsection