<?php echo doctype('html'); ?>

<html lang="en">
<head>
	<?PHP $this->load->view('header'); ?>	
</head>
<body>

<div id="container">
	<div id="banner">
		<?PHP $this->load->view('banner'); ?>	
	</div>
	
	<div id="nav">
		<?PHP $this->load->view('nav',$which_page); ?>
	</div>
	
	<div id="main">
		<?PHP $this->load->view($which_page); ?>
	</div>

	<div id="footer">
		<?PHP $this->load->view('footer'); ?>	
	</div>
</div>

</body>
</html> 