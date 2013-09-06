		<ul>
			<li><a href="home" <?php if ($which_page == "home_content") echo "class='selected'"; ?>>Home</a></li>
			<li><a href="about"  <?php if ($which_page == "about_content") echo "class='selected'"; ?>>About</a></li>
			<li><a href="quote" 
				<?php 
					if ($which_page == "quote_content") echo "class='selected'"; 
					elseif ($which_page == "form_success") echo "class='selected'";
				?>>
				Request a Quote</a>
			</li>
			<li><a href="comment" <?php if ($which_page == "comment_content") echo "class='selected'"; ?>>Comments</a></li>
			<li><a href="contact" <?php if ($which_page == "contact_content") echo "class='selected'"; ?>>Contact</a></li>
		</ul>
		<div class="clear"></div>