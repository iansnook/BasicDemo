		<div id="content">
			<h1>Request a Quote</h1><br>
			<?php
				if($this->form_validation->run() == FALSE)
				{
					echo "<div id='validation-errors'>".validation_errors()."</div><br>";
				}
				else
				{
					echo "<div id='validation-ok'>Your request has been sent to our database. An associate will contact you shortly.</div><br>";
					$_POST = array();
				}
			?>
					
			<div id="quote-form">
				<?php
					$this->load->helper("form");
					echo form_open("home_controller/quote_DB_insert");
					
					echo form_label("Name: ", "fullName");
					$data = array(
						"name" => "fullName",
						"id" => "fullName",
						"value" => set_value("fullName")
					);
					echo form_input($data);
									
					echo form_label("Email: ", "emailAddress");
					$data = array(
						"name" => "emailAddress",
						"id" => "emailAddress",
						"value" => set_value("emailAddress")
					);
					echo form_input($data);
					
					echo form_label("Details: ", "details");
					$data = array(
						"name" => "details",
						"id" => "details",
						"value" => set_value("details")
					);
					echo form_textarea($data);
					
					echo form_submit("quoteSubmit", "Submit");
					echo form_close();
				?>
			</div>
		</div>
		<div id="side">
			The given form submits adds new entries to database for later queries. 
		</div>
		<div class="clear"></div>