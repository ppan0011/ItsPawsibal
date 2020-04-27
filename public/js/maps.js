
function initMap() {
  var lats = [];
  var longs = [];
  var polygonpaths = [];
  var newArr = [];
  var multipolygon = [];

  // Get detaisl for the selection
  var stateDropdown = $(".state-dropdown").val();
  var speciesDropdown = $(".species-dropdown").val();

  // Create a map instance
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: {lat: -37.23999999999995, lng: 146.9400000000001}
  });

  // Create a polygon instance
  var polygonOptions = {
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  };

  // Get values for lat and long
  $.ajax({
    url: '/species/getRecordsByRegion/'+stateDropdown+'/'+speciesDropdown+'/',
    type: 'get',
    dataType: 'json',
    success: function(response){
      if (response != null)
      {
        if (response.length > 0)
        {
          for (var i = 0; i < response.length; i++) 
          {
                lats = [];
                longs = [];
                polygonpaths = [];
                  // Split the response of lat and long
                  newArr = response[i].lat_long.split(", "); 

                  if(newArr.length != 0)
                  {  
                    for (var i = 0; i < newArr.length; i++) {
                      if(newArr[i].includes("lat"))
                      {
                        lats.push(newArr[i].split(":")[1]);
                      }
                      else
                      {
                        longs.push(newArr[i].split(":")[1]);
                      }
                    }

                    for (var i = 0; i < newArr.length/2; i++) 
                    {
                      polygonpaths.push(new google.maps.LatLng(lats[i] , longs[i]));
                    }
                    multipolygon.push(polygonpaths);  
                }

                if (multipolygon.length > 0)
                {
                  for (var i = 0; i < multipolygon.length; i++) {
                      var polygon = new google.maps.Polygon(polygonOptions);
                      polygon.setPaths(polygonpaths[i]);
                      polygon.setMap(map);
                  }
                }

              }
            }
              else
              {
                console.log("There is no data for your selection!");
              }
            }
          }
        });
            // if (lats.length != null)
            // {
            //   console.log("in");
            //   for (var i = 0; i < lats.length; i++) {
            //     polygonsLatLongs.push(new google.maps.LatLng(lats[i]), longs[i]);
            //   }

            //   console.log(polygonsLatLongs);
            // }

        // var marker = [];
        // var map = new google.maps.Map(document.getElementById('map'), {
        //   zoom: 9,
        //   center: {lat: -37.23999999999995, lng: 146.9400000000001}
        // });
      }