<?php
	$title = "Account 1 - Settings";
	$css = "custom9";
	$js = "custom2";

	include "parts/header.php";
	include "parts/topMenu2.php";
?>

			<div class="row">
				<div class="well span4 sidebar">

					<h4>shershams - 62 &cent;</h4>
					<div class="btn btn-primary btn-large">Post a new Ad</div>

					<br>
					<br>
						
					<p><a href="account1.php">Main</a></p>
					<p><a href="#">Messages (3 new)</a></p>
					<p><a href="#">Expired / Deleted Ads</a></p>
					<p><a href="account1.settings.php">Account Settings</a></p>
					<p><a href="#">Help</a></p>

				</div>
		
				<div class="span11">
					<form id="account-settings-form" class="form-horizontal">
						<h2>Account Settings</h2>

						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input class="span4" type="text">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Phone #</label>
							<div class="controls">
								<input class="span4" type="text">
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox" checked="true"> Notifications
								</label>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<div class="btn switch" data-switch="reset-password-form">Reset Password</div>
								<input type="submit" value="Save Settings &raquo;" id="submit_settings" name="submit_settings" class="btn btn-primary">
							</div>
						</div>
					</form>
			
					<form id="reset-password-form" class="hide form-horizontal">
						<h2>Reset Password</h2>

						<div class="control-group">
							<label class="control-label">Old Password</label>
							<div class="controls">
								<input class="span4" type="text">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">New Password</label>
							<div class="controls">
								<input class="span4" type="text">
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox" checked="true"> Confirm New Password
								</label>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<div class="switch btn" data-switch="account-settings-form">Cancel</div>
								<input type="submit" value="Save Password &raquo;" id="submit_settings" name="submit_settings" class="btn btn-primary">
							</div>
						</div>
					</form>

				</div>
			</div>

<?php include "parts/footer.php" ?>