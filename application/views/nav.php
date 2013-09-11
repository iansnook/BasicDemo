		<ul>
		<?php 
			//get navigation information from home_controller constructor
			$format = "<li><a href='%s'%s>%s</a></li>\n\t\t\t\t\t";
			foreach($NavigationArray as $entry):
				if ($which_page == $entry[2]) 
					echo sprintf($format,$entry[1]," class='selected'",$entry[0]);
				else
					echo sprintf($format,$entry[1],"",$entry[0]);
			endforeach; 
		?>
		<!-- OLD CODE: DELETE AFTER TESTING
			<li><a href="home" <?php if ($which_page == "home") echo "class='selected'"; ?>>Home</a></li>
			<li><a href="about"  <?php if ($which_page == "about") echo "class='selected'"; ?>>About</a></li>
			<li><a href="quote" 
				<?php 
					if ($which_page == "quote") echo "class='selected'"; 
					elseif ($which_page == "form_success") echo "class='selected'";
				?>>Request a Quote</a>
			</li>
			<li><a href="comment" <?php if ($which_page == "comment") echo "class='selected'"; ?>>Comments</a></li>
			<li><a href="contact" <?php if ($which_page == "contact") echo "class='selected'"; ?>>Contact</a></li>-->
		</ul>
		<div class="clear"></div>