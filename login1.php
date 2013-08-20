<?php
	$title = "Login & Sign Up Page 1";
	$css = "custom7";
	$js = "custom";

	include "parts/header.php";
	include "parts/topMenu.php";
?>

			<div class="row">
				<div class="well span5 offset1 signForm">
					<form>
						<h3>Sign Up for Free</h3>
			  
						<label>Email</label>
						<input type="text" class="span4">

						<label>Username</label>
						<input type="text" class="span4">

						<label>Password</label>
						<input type="text" class="span4">
				
						<label class="checkbox">
							<input type="checkbox" checked="true"> Agree to <a href="#">Terms of Use</a>
						</label>

						<br>

						<input type="submit" value="Sign Up &raquo;" class="btn btn-primary">
					</form>
				</div>
			
				<div class="well span4 signForm" >
					<form id="sign-in-form">
						<h3>Sign In</h3>
			  
						<label>Username</label>
						<input type="text">
				
						<label>Password</label>
						<input type="text">
		
						<label class="checkbox">
							<input type="checkbox" checked="true"> Remember me
						</label>

						<br>

						<input type="submit" value="Sign In &raquo;" class="btn btn-primary">
						<span class="switch" data-switch="forgot-password-form">Forgot my password</span>
					</form>
			  
					<form class="hide" id="forgot-password-form">
						<h3>Forgot Password</h3>
							   
						<label>Email</label>
						<input type="text">

						<br>

						<p class="switch" data-switch="sign-in-form">Never mind, I remember my password</p>

						<br>
					
						<input type="submit" value="Remind me &raquo;" class="btn btn-primary">
					</form>
				</div>
			</div>

<?php include "parts/footer.php" ?>