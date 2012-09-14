<?php
	$title = "Homepage 2.1";
	$css = "custom4";

	include "parts/header.php";
	include "parts/topMenu.php";
?>

			<div class="row">
				<div class="well span7" style="background:none;">
					<div class="span2">
						<?php include "parts/fakeList.php" ?>
					</div>
					<div class="span2">
						<?php include "parts/fakeList.php" ?>
					</div>
					<div class="span2">
						<?php include "parts/fakeList.php" ?>
					</div>
				</div>
			
				<div class="well span4 loginForm">
					<?php include "parts/signUpForm.php" ?>
				</div>
			</div>

			<div class="row">     
				<div class="well span7" style="background:none;">
					<div class="span2">
						<?php include "parts/fakeList.php" ?>
					</div>
					<div class="span2">
						<?php include "parts/fakeList.php" ?>
					</div>
					<div class="span2">
						<?php include "parts/fakeList.php" ?>
					</div>
				</div>

				<div class="well span4">FB Like, etc.</div>
			</div>

<?php include "parts/footer.php" ?>