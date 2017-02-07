<?php
	$lat = $_GET["lat"];
	$lon = $_GET["lon"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
	
	html
	{
		height:100%;
	}
	body
	{
		height: 100%;
		margin: 0px;
		padding: 0px;
	}
	#map_canvas
	{
		height: 100%;
	}

	</style>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="jquery-3.1.0.min.js"></script>
	<script>

	 	var map ;
		$(function(){

			var myCanvas = document.getElementById("map_canvas");
			var myLatlng = new google.maps.LatLng(<?php echo $lat ;?>,<?php echo $lon ;?>);


			var myOptions=
			{
				zoom:15 ,
				center :myLatlng,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			} ;

			map = new google.maps.Map(myCanvas,myOptions);

			var marker = new google.maps.Marker({
				position:myLatlng,
				map:map,
				title:'在這裡'
			});
		})
	</script>

</head>
<body>

<div id="map_canvas" style="width: 100%;height: 100%"></div>
</body>
</html>