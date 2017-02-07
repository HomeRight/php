<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize()
{
	var myLatLng = {lat: 51.508742, lng: -0.120850};
	var mapOpt = {
	  center:myLatLng,
	  zoom:20,
	  mapTypeId:'satellite'
	  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapOpt);
var marker = new google.maps.Marker({
				position:myLatLng,
				map:map,
				title:'在這裡'
			});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:1000px;height:1000px;"></div>

</body>
</html>
