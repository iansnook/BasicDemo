<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
	<script>
		function initialize()
		{
			<?php
				$count = count($results);
				foreach($results as $row)
				{
					echo "
					var mapProp".$count." = { center:new google.maps.LatLng(".$row->Latitude.",".$row->Longitude."), zoom:15,mapTypeId:google.maps.MapTypeId.ROADMAP}\n";
					echo "					var map".$count."=new google.maps.Map(document.getElementById('googleMap".$count."'),mapProp".$count--.")\n";
				}
			?>	
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
	
	