<?php
	$title = "Account 1";
	$css = "custom8";

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
					<h2>Active Ads</h2>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="span2"></th>
									<th class="span4">Title</th>
									<th class="span2">Price</th>
									<th class="span2">Location</th>
									<th class="span4">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="mini-thumbnail"><img src="images/sample/car1.jpg"></td>
									<td>BMW M5</td>
									<td>$125,000</td>
									<td>Seattle, WA</td>
									<td>
										<div class="btn btn-small btn-success disabled">Renewed</div>
										<div class="btn btn-small btn-info">Edit</div>
										<div class="btn btn-small btn-danger">Remove</div>
									</td>
								</tr>
								<tr>
									<td class="mini-thumbnail"><img src="images/sample/car2.jpg"></td>
									<td>Another BMW M5</td>
									<td>$50,000</td>
									<td>Seattle, WA</td>
									<td>
										<div class="btn btn-small btn-success">Renew</div>
										<div class="btn btn-small btn-info">Edit</div>
										<div class="btn btn-small btn-danger">Remove</div>
									</td>
								</tr>
							</tbody>
						</table>
					
						<h2>Favorites</h2>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="span2"></th>
									<th class="span4">Title</th>
									<th class="span2">Price</th>
									<th class="span2">Location</th>
									<th class="span4">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="mini-thumbnail"><img src="images/sample/car3.jpg"></td>
									<td>BMW... yes M5</td>
									<td>$25,000</td>
									<td>Seattle, WA</td>
									<td>
										<div class="btn btn-small btn-info">Contact Seller</div>
										<div class="btn btn-small btn-danger">Remove</div>
									</td>
								</tr>
								<tr>
									<td class="mini-thumbnail"><img src="images/sample/car4.jpg"></td>
									<td>BMW M5</td>
									<td>$20,000</td>
									<td>Seattle, WA</td>
									<td>
										<div class="btn btn-small btn-info">Contact Seller</div>
										<div class="btn btn-small btn-danger">Remove</div>
									</td>
								</tr>
								<tr>
									<td class="mini-thumbnail"><img src="images/sample/car5.jpg"></td>
									<td>BMW M5</td>
									<td>N/A</td>
									<td>Seattle, WA</td>
									<td>
										<div class="btn btn-small btn-info">Contact Seller</div>
										<div class="btn btn-small btn-danger">Remove</div>
									</td>
								</tr>
							</tbody>
					</table>
				</div>
			</div>

<?php include "parts/footer.php" ?>