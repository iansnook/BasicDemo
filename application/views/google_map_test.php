
<html lang="en">
<head>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/BlackPressDemo/assets/css/style.css"/>

	<script type="text/javascript" src="http://localhost/BlackPressDemo/assets/js/jquery-1.10.2.min.map.js"></script>
	<script type="text/javascript" src="http://localhost/BlackPressDemo/assets/js/jquery-unslider.min.js"></script>
	<script type="text/javascript" src="http://localhost/BlackPressDemo/assets/js/unslider-call.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
	
		<script>
		function initialize()
		{
			
					var mapProp2 = { center:new google.maps.LatLng(49.2273,-122.6883), zoom:15,mapTypeId:google.maps.MapTypeId.ROADMAP}
					var map2=new google.maps.Map(document.getElementById('googleMap'),mapProp2)
					
					var mapProp1 = { center:new google.maps.LatLng(47.509788,-52.805042), zoom:15,mapTypeId:google.maps.MapTypeId.ROADMAP}
					var map1=new google.maps.Map(document.getElementById('googleMap'),mapProp1)	
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
	
		<title>Apple Top Company</title>
	
		
</head>
<body>

<div id="container">
	<div id="banner">
				<div id="black-banner">
			<h1>Welcome to Apple Top Company</h1>
		</div>	
	</div>
	
	<div id="nav">
				<ul>
			<li><a href="home" >Home</a></li>
			<li><a href="about"  >About</a></li>
			<li><a href="quote" 
				>
				Request a Quote</a>
			</li>
			<li><a href="comment" >Comments</a></li>
			<li><a href="contact" class='selected'>Contact</a></li>
		</ul>
		<div class="clear"></div>	</div>
	
	<div id="main">
		<div id='content'>
			<div id='map'>
				<div id='googleMap'></div>
			</div>
		</div>
		<div id='side'><h1>BC Office</h1><br><p>11 - 1234 Superman St.<br>Pitt Meadows, BC V3Y 2M2</p><br>Email: joe@email.com<br></div>
		<div class='clear'></div><div id='content'>
			<div id='map'>
				<div id='googleMap'></div>
			</div>
		</div>
		<div id='side'><h1>NF Office</h1><br><p>2 Badcock Place<br>Mt. Pearl, NF A1N 2S3</p><br>Email: ron@email.com<br></div>
		<div class='clear'></div>
		<!--
		
		
		<div id="content">
			<div id="map">
				<div id="googleMap"></div>
			</div>
		</div>
		<div id="side">
			<h1>Contact Us</h1><br>

				<p>11 - 1234 Superman St.</p>
				<p>Pitt Meadows, B.C. V3Y 2M2</p><br>

				Tel: 1-123-456-7890<br>
				Fax: 1-123-456-7890<br>
				Email: hardworkers@here.com<br>
		</div>
		<div class="clear"></div>
		-->	</div>

	<div id="footer">
		Page rendered in <strong>0.0770</strong> seconds	
	</div>
</div>

</body>
</html> 