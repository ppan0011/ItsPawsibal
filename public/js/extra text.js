 $(document).ready(function(){ 
 	$("#map").hide();

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
 					// console.log(response[0].lat_long);
 				// 	if (response.length != 0)
					// {
					//  	newarr = response[0].lat_long.split(", ");	
					// }
					// else
					// {
					// 	alert("There is no data for your selection!");
					// }
 				// 	console.log(newarr);
 				}
 			}
 		});
 	});
 });