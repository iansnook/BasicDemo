<?php
	$count = count($results);
	foreach($results as $row)
	{
		echo "<div id='content'>
			<div id='map'>
				<div id='googleMap".$count--."'></div>
			</div>
		</div>
		<div id='side'>";
		echo "<h1>".$row->LocationName."</h1><br>";
		echo "<p>".$row->Address."<br>".$row->City.", ".$row->Province." ".$row->PostalCode."</p><br>";
		echo "Email: ".$row->Contact."<br>";
		echo "</div>
		<div class='clear'></div>";
	}
?>

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
		-->