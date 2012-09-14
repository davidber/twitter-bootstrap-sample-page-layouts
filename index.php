<?php
	$title = "Sample Page Layouts for Twitter Bootstrap 2.1.1";
	$css = "custom";

	include "parts/header.php";
	include "parts/topMenu4.php";
?>

			<div class="content">
				<div class="page-header">
					<h1>Sample Page Layouts <small>Making your life easier</small></h1>
				</div>
				<div class="row">
					<div class="span8">
						<h2>Upgrade to Twitter Bootstrap 2.1.1</h2>
						<p>
							This version was upgraded to version 2.1.1 by <a href="http://www.schmutzka.eu/en/" target="_blank">Schmutzka</a> with following changes:
							<ul>
								<li>spaces => tabs</li>
								<li>united: <code>"</code></li>
								<li><code>php</code> approach for faster build up (DRY)</li>
								<li>removed stuffs unrelated to Twitter Bootstrap (KISS)</li>
								<li>to see how to create this or that, just check the source of selected page</li>
							</ul>
						</p>


						<h2>Purpose of this project.</h2>
						<p>
							After a lot of successful web projects, I found myself writing almost same code over
							and over again. Sometimes, I copied codes I wrote before, and sometimes I had to create
							a new one. Even though there are a lot of websites which share web designs, I decided to
							create one to share layouts. I try to focus more on layout rather than anything else. So,
							you may find some high quality images used as thumbnails. Obviously, it"s the bad practice,
							and it"s only for demo purposes.
						</p>
						
						<h2>How this project can help you?</h2>
						<p>
							These layouts are basic layouts you will be using in most of your web projects.
							I try not to add any designs other than basic CSS, so that you can add them to fit
							your needs and style.
						</p>
						
						<h2>How can you contribute to this project?</h2>
						<p>
							Pull the code from github or download as a zipped file. Create new unique layout
							and commit your codes or send them as an attachment to
							<a href="mailto:contact@sherzod.me">contact@sherzod.me</a>. I will check the code for a
							valid HTML and CSS, and will post it on github. Or at least send me your PSD file or some
							kind of sketch of the layout you would like to see in this project, and I will try my
							best to create one.
						</p>
						
						<h2>Why Twitter Bootstrap?</h2>
						<p>
							As you can see, I chose to use Twitter Bootstrap as a main library for creating layouts,
							and there are a lot of good reasons for it. First of all, it"s fast to create layouts
							and it"s easy to understand the code. It has nice pre-built CSS and couple JS Libraries,
							which are very helpful. For a full info about Twitter Bootstrap, refer to its <a href="http://twitter.github.com/bootstrap/" target="_blank">github page</a>.
						</p>
					</div>
					<div class="span4">
						<?php include "parts/rightMenu.php" ?>
					</div>
				</div>
			</div>

<?php include "parts/footer.php" ?>