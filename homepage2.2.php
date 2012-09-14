<?php
	$title = "Homepage 2.2";
	$css = "custom5";

	include "parts/header.php";
	include "parts/topMenu.php";
?>

		<div class="row">
			<div class="hero-unit span6">
				<h1>Welcome!</h1>
				<p>Some promotional message goes here. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
				<p><a class="btn btn-primary btn-large">Explore &raquo;</a></p>
			</div>

			<div class="well span4 loginForm">
				<?php include "parts/signUpForm.php" ?>
			</div>
      </div>
      
		<div class="content-row">
			<?php include "parts/carItem.php" ?>
			<?php include "parts/carItem.php" ?>
			<?php include "parts/carItem.php" ?>
			<?php include "parts/carItem.php" ?>
		</div>

<?php include "parts/footer.php" ?>