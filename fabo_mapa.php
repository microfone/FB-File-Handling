<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
	<?php
		$count=0;
		$readin = file("fabo_example.txt");
		foreach($readin as $aux){
			$count++;
			$delimiter="\t";
			$data=str_getcsv($aux,$delimiter);
			if($count==2){
				$lat1=$data[15];
				$lon1=$data[16];
				$array_exemplo=$data;
			}
		}

		?>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBNqSLpB60u3XRgnu3H6pA0Nb5aSqEk0Ko&sensor=true">
    </script>
    <script type="text/javascript">
      var lat="<?php echo $lat1;?>";
	  var lon="<?php echo $lon1;?>";
	  var arrayEx=<?php echo json_encode($array_exemplo);?>;
	  for(var i=0;i < 19;i++){
		document.write(arrayEx[i]);
		document.write("<br />");
	  }
	  lat=lat.replace(/,/,'.');
	  lon=lon.replace(/,/,'.');
	  document.write(lat);
	  document.write("<br />");
	  document.write(lon);
	  var latSP=-23.556;
	  var lonSP=-46.654;
	  function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-22.4876, -47.2421),
          zoom: 5,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
		var t=[];
		var x=[];
		var y=[];
		var h=[];
		
		var marcador=new google.maps.Marker({
			map:	map,
			position:	new google.maps.LatLng(lat,lon),
			title:	'Fabo'
		});
		var infowindow=new google.maps.InfoWindow({
			content:	'TangaFrouxaLAND'
		});
		google.maps.event.addListener(marcador,'click',function(){
			infowindow.open(map,marcador);
		});
		var marcador2=new google.maps.Marker({
			map:	map,
			position:	new google.maps.LatLng(latSP,lonSP),
			title:	'São Paulo',
			html:	'lá na pqp...'
		});
		google.maps.event.addDomListener(marcador,'click',function(){
			info_window.setContent(marcador.html);
			info_window.open(map,marcador);
		});
      }
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>