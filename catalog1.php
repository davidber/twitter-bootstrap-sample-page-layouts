<?php
	$title = "Catalog 1";
	$css = "custom12";
	$fluid = TRUE;

	include "parts/header.php";
	include "parts/topMenu2.php";
?>

			 <div class="row">
				<div class="well span3">
					<h3>Filter Results</h3>

					<input type="text" placeholder="Search" class="span3" value="BMW M5">

					<input type="text" placeholder="Min Price" class="span1"> to <input type="text" placeholder="Max Price" class="span1">
					<br>
					<input type="text" placeholder="Min Year" class="span1"> to <input type="text" placeholder="Max Year" class="span1">

					<select class="span3">
						<option>Show All</option>
						<option>Show ads by Private Sellers Only</option>
						<option>Show ads by Dealers Only</option>
					</select>

					<button class="btn">Reset</button>
					<button class="btn btn-primary">Update</button>
				</div>

				<div class="span12 span-fluid">

					<ul class="breadcrumb">
						<li><a href="#">Home</a> <span class="divider">/</span></li>
						<li><a href="#">Autos</a> <span class="divider">/</span></li>
						<li class="active">BMW</li>
					</ul>

					<table class="table table-hover table-striped" id="main-items">
						<thead>
							<tr>
								<th class="span2"></th>
								<th class="span4">Title</th>
								<th class="span2">Price</th>
								<th class="span2">Location</th>
								<th class="span2">Seller</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="mini-thumbnail"><img src="images/sample/car1.jpg"></td>
								<td>BMW M5</td>
								<td>$125,000</td>
								<td>Seattle, WA</td>
								<td>shershams</td>
							</tr>
							<tr class="highlight">
								<td class="mini-thumbnail"><img src="images/sample/car2.jpg"></td>
								<td>BMW M5 - I paid more, so I"m a featured ad!</td>
								<td>$50,000</td>
								<td>Seattle, WA</td>
								<td>shershams</td>
							</tr>
							<tr>
								<td class="mini-thumbnail"><img src="images/sample/car3.jpg"></td>
								<td>I"m so mean that I wrote such a long title. It"s just like a description, but I like to call it title! And as you can see, this text can be wrapped into several lines. No mercy to mean people like me.</td>
								<td>$25,000</td>
								<td>Seattle, WA</td>
								<td>shershams</td>
							</tr>
							<tr>
								<td class="mini-thumbnail"><img src="images/sample/car4.jpg"></td>
								<td>BMW M5</td>
								<td>$20,000</td>
								<td>Seattle, WA</td>
								<td>shershams</td>
							</tr>
							<tr>
								<td class="mini-thumbnail"><img src="images/sample/car5.jpg"></td>
								<td>BMW M5</td>
								<td>N/A</td>
								<td>Seattle, WA</td>
								<td>shershams</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

<?php include "parts/footer.php" ?>