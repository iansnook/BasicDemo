		<div id="content-noside">
			<h1>Customer Comments</h1><br>
			<div class='backdrop'></div>
			<!--<table class="gridtable">
				<tr>
					<th>Name</th>
					<th>Comment</th>
					<th></th>
				</tr>-->
			<?php
				//print_r($results);
				$count = count($results);
				foreach($results as $row)
				{
					//echo "<tr><td>".$row->name."</td>";
					//echo "<td>".$row->City."</td><td><a href='#'>Read comment</a></td></tr>";
					
					echo "\n<p>".$row->name."";
					echo " ".$row->City." <a class='openlightbox' data-reveal-id='myModal".$count--."' href='#'>Read comment</a>";
					echo "\n<div class='lightbox'><div class='close'>x</div>".$row->details."</div>";
				}
				//</table>
			?>
			
		</div>
		<div class="clear"></div>