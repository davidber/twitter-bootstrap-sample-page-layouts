<?php
	$title = "Contact 1";
	$css = "custom3";

	include "parts/header.php";
	include "parts/topMenu3.php";
?>

			<div class="row">
				<div class="span5 offset1">
					<h1>Contact Us</h1>

					<p>
						<span class="label label-important">Error: Report code 123 to Agent 007</span><br>
						<span class="label label-info">Notice: You"ve just noticed it!</span><br>
						<span class="label label-success">Success: Ok, I"m done!</span>
					</p>
					
					<div class="well">
						<form class="form-stacked">
							<label>Name</label>
							<input class="span4" type="text">
						
							<label>Email</label>
							<input class="span4" type="text">

							<label>Subject</label>
							<input class="span4" type="text">

							<label>Message</label>
							<textarea class="span4" rows="10" style="resize:none;"></textarea>

							<br>
							<br>

							<input value="Send a Message" class="btn btn-primary" type="submit">
							<input value="Reset" class="btn" type="reset">
						</form>
					</div>
				</div>
			
				<div class="span5 offset1">

					<h3>Contact Information</h3>
					<strong>Phone:</strong> (206) 999-9999<br>
					<strong>Email:</strong> contact@sherzod.me
					
					<h3>Address</h3>
					<address>
					<strong>Sherzod K. Inc.</strong></br>
					12345 99th Ave SE<br>
					Seattle, Wa 98000
					</address>
				</div>
			</div>

<?php include "parts/footer.php" ?>