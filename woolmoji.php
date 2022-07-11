<!DOCTYPE html>
<html>
	<head>
		<title>WoolMoji - WoolyTheWool</title>
		<link rel="icon" type="image/x-icon" href="site-icon.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="websitetheme.css">
	</head>
	<body>
		<header class="wooly-header">
			<div class="wooly-logo">
				<a href="https://woolythewool.github.io/">
					<div class="wooly-icon"></div>
					<div class="wooly-title">Wooly</div>
				</a>
			</div>
		</header>
		<nav class="wooly-navigation-menu">
			<a href="apps.html">Apps</a>
		</nav>
		<article class="wooly-content">
			<h1>WoolMoji</h1>
			<p>WoolMoji is a project I'm working on. It isn't finished yet&hellip;</p>
			<div class="woolmoji-container">
				<?php
					$woolmojis = opendir('woolmoji/');
					while (($file = readdir($woolmojis)) !== false) {
						if (strpos($file, 'woolmoji-') !== false) {
							echo '<object data="woolmoji/'.$file.'" width="72" height="72"></object>';
						}
					}
					closedir($woolmojis);
				?>
			</div>
		</article>
		<footer class="wooly-footer">
			<hr style="margin-top: 8px;">
			<section class="footer-info">
				<a href="mailto:greenwool38@gmail.com">Mail Me</a>
				<a href="https://woolythewool.github.io/#about-me">About Me</a>
			</section>
			<div id="footer-made-by">
				<span>Made by Wooly 2022-<span id="footer-current-year"></span></span>
			</div>
			<script>
				document.getElementById('footer-current-year').innerHTML = new Date().getFullYear();
			</script>
		</footer>
	</body>
</html>
