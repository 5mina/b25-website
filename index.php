<!DOCTYPE html>

<html>

<head>
	<title>Home</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Titillium+Web&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	<style>
		<?php
		$css = file_get_contents('style.css');
		echo $css; ?>
	</style>
</head>

<body>
	<header>
		<div class="h">
			Header
			<br>
			<div class="title">
				Title
			</div>
			<div class="date">
				Date
			</div>
		</div>
	</header>
	<nav>
   <div class="n">
      Navigation
   </div>
	</nav>
  <div class="b">
    Body
  </div>
	<footer>
    <div class="f">
      Footer
    </div>
	</footer>
</body>

</html>