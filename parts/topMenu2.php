<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container<?php if (isset($fluid) && $fluid) { echo "-fluid"; } ?>">

			<a class="brand" href="index.php">Project X</a>
			<ul class="nav">
				<?php include "sampleList.php" ?>
			</ul>

			<form class="navbar-form pull-left">
				<input type="text" placeholder="Search">
				<button class="btn" type="submit">Go</button>
			</form>

			<p class="navbar-text pull-right">
				Logged in as <a href="#" class="navbar-link">Username</a>
			</p>

		</div>
	</div>
</div>