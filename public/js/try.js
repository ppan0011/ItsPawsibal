var polygonpolygon = [];

function initMap() {
	
	var polygonArray = [];
	var storageArray = [];
	var latitudes = [];
	var longitudes = [];

	// Get details for the selection
	var stateDropdown = $(".state-dropdown").val();
	var speciesDropdown = $(".species-dropdown").val();

	// Setting options for the map
	var myOptions = {
		zoom: 9,
		center: {lat: -37.23999999999995, lng: 146.9400000000001},
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	// Setting the polygon options
	var polygonOptions = {
		fillColor: 'blue',
		strokeWeight: 3
	};

	// Creating a map instance
	var map = new google.maps.Map(document.getElementById('map'), myOptions);

	// Creating the polygon coordinates
	$.ajax({
		url: '/species/getRecordsByRegion/'+stateDropdown+'/'+speciesDropdown+'/',
		type: 'get',
		dataType: 'json',
		success: function(response){
			if (response.length > 0)
			{
				for (var i = 0; i < response.length; i++) 
				{
          			// Store the latitude longitude for one array
          			storageArray.push(response[i].lat_long.split(", ")); 
          			// console.log(storageArray[i]);
          		}			

          		if(storageArray.length != 0)
          		{
          			for (var i = 0; i < storageArray.length; i++)
          			{
          				for (var j = 0; j < storageArray[i].length/2; j++) 
          				{
          					if(storageArray[i][j].includes("lat"))
          					{
          						latitudes.push(storageArray[i][j].split(":")[1]);
          					}
          					else
          					{
          						longitudes.push(storageArray[i][j].split(":")[1]);
          					}
          				}
          			}

          			for (var i = 0; i < storageArray.length; i++) 
          			{
          				var array = [];
          				for (var j = 0; j < storageArray[i].length/2; j++) 
          				{
          					array.push(new google.maps.LatLng(latitudes[j], longitudes[j]));
          				}
          				polygonArray.push(array);
          			}

          			if (polygonArray.length > 0)
          			{
          				for (var u=0; u<polygonArray.length; u++) 
          				{
          					// console.log(polygonArray[u]);
							var polygon = new google.maps.Polygon(polygonOptions);
							polygon.setPaths(polygonArray[u]);
							polygon.setMap(map);
						}
          			}
          		}
          	}
          }
      });
}

$(".drop-down-wrapper select").on("change", function(){

	var stateDropdown = $(".state-dropdown").val();
	var speciesDropdown = $(".species-dropdown").val();

 		// console.log("state: "+stateDropdown);
 		// console.log("species: "+speciesDropdown);


 		$("h2").html("You have selected: State: "+stateDropdown+" Species: "+speciesDropdown);

 		$("#final-val").attr("state-value", stateDropdown);
 		$("#final-val").attr("species-value", speciesDropdown);
 		var newarr = [];
 		$.ajax({
 			url: '/species/getRecordsByRegion/'+stateDropdown+'/'+speciesDropdown+'/',
 			type: 'get',
 			dataType: 'json',
 			success: function(response){
 				if (response != null)
 				{
 					$("#map").show();
 					initMap();
 				}
 			}
 		});
 	});