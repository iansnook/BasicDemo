	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.map.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-unslider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/unslider-call.js"></script>
	<?php
		if($which_page == "contact_content")
		{
				include_once "google_map.php";
		}
		else if($which_page == "comment_content")
		{
				//javascript for lightbox
				//echo "<script type='text/javascript' src='".base_url()."assets/js/lightbox.js'></script>";
				include_once "reveal-jquery-includes.php";
				echo "\n";
		}
	?>
	<title>Apple Top Company</title>
	
	