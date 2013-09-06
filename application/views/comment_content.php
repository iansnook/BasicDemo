		<div id="content-noside">
			<h1>Customer Comments</h1><br>
			<?php
				$count = count($results);
				$format =
					"<p>%s 
						<a href='#' data-reveal-id='myModal%s' data-animation='fade'>Read comment</a>
						<div id='myModal%s' class='reveal-modal'><h1>%s</h1><p>%s</p>
						<a class='close-reveal-modal'>&#215;</a></div>\n\n\t\t\t";
				
				foreach($results as $row)
				{
					echo sprintf($format, $row->name, $count, $count--, $row->name, $row->details);
				}
			?>
			
		</div>
		<div class="clear"></div>