<?php
$title = "Mini Market Masjid";
include_once "header.php";
?>

     
              
<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kontak Kami</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
        <!-- Place favicon.ico in the root directory -->        
        <!-- all css here -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />
<style>
body { margin: 0; padding: 0; }
  #map {  top: 0; bottom: 0; width: 100%; }
</style>
    </head>
    <body>
     <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - Denah Lokasi - </strong></h2>
            </div>

          </div>   
    <div class="row">
        <div class="col-md-12">
            <div id="map" style="height: 600px;"></div>
        </div>

    </div>
                               
                                    
                                    <script>

                                    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFocnVsIiwiYSI6ImNqdXdsdm04aDBkdGQ0M3BmMzljeDFtNnAifQ.-f_85bt_XL_pyCEHkGdcyA';
                               var geojson = {
                                      'type': 'FeatureCollection',
                                      'features': [
                                      {
                                      'type': 'Feature',
                                      'properties': {
                                      'link': 'detail.php',
                                      'iconSize': [50, 50]
                                      },
                                      'geometry': {
                                      'type': 'Point',
                                      'coordinates': [112.5617419,-7.9786395]
                                      }
                                      },
                                      {
                                      'type': 'Feature',
                                      'properties': {
                                      'link': 'detail.php',
                                      'iconSize': [50, 50]
                                      },
                                      'geometry': {
                                      'type': 'Point',
                                      'coordinates': [112.5617419,-7.952639]
                                      }
                                      },
                                      {
                                      'type': 'Feature',
                                      'properties': {
                                      'link': 'detail.php',
                                      'iconSize': [50, 50]
                                      },
                                      'geometry': {
                                      'type': 'Point',
                                      'coordinates': [112.5617419,-7.9786099]
                                      }
                                      }
                                      ]
                                      };
                                    var map = new mapboxgl.Map({
                                    container: 'map', // container id
                                    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
                                    center: [112.6042229,-7.9355443], // starting position [lng, lat]
                                    zoom: 12 // starting zoom
                                    });
                                    $.ajax({    //create an ajax request to display.php
                                        type: "GET",
                                        url: "datamap.php",             
                                        dataType: "json",   //expect html to be returned                
                                        success: function(response){                    
                                           console.log(response.data);
                                           $.each(response.data,function(i,data){
                                            console.log(data);

                                      // create a DOM element for the marker
                                      var el = document.createElement('div');
                                      el.className = 'marker';
                                      el.style.backgroundImage =
                                      'url(http://localhost/sigmasstore/img/c.png)';
                                      el.style.width = '50px';
                                      el.style.height = '50px';
                                       
                                      el.addEventListener('click', function () {
                                      window.location.href = `detail.php?id=`+data.id_perusahaan;
                                      });
                                       
                                      // add marker to map
                                      new mapboxgl.Marker(el)
                                      .setLngLat([data.longitude,data.latitude])
                                      .addTo(map);
                                           })
                                            //alert(response);
                                        }

                                    });
                                    </script>



        </div>
        </div>
  </body>
  </html>

<?php include_once "footer.php"; ?>