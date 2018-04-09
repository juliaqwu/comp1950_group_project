<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/students/igolobokov/css/styles.css" />

	</head>
	<body>
		
		<div id="wrapper">
	<header>
		<h1>Web Development And Design 2</h1>
	</header>
	<nav>
		<ul>
			<li><a href="/students/igolobokov/index.php">Home</a></li>
			<li><a href="/students/igolobokov/websites/homework-02/index.html">HTML</a></li>
			<li><a href="/students/igolobokov/websites/homework-01/index.html">CSS</a></li>
			<li><a href="/students/igolobokov/websites/homework-04/index.html">Layout</a></li>
			<li><a href="/students/igolobokov/websites/homework-05/index.html">Responsive Layout</a></li>
			<li><a href="/students/igolobokov/websites/homework-06/index.html">jQuery</a></li>
			<li><a href="/students/igolobokov//homework-07/index.html">Server-side</a></li>
			<li><a href="#">Templates</a></li>
		</ul>
	</nav>
	<main>
<!-- 		<img src="/students/igolobokov/images/error-404.png" alt="error-404">
 -->	
<div class="error_container flex_item">
		<p id="n404">404</p>
	<div class="error_message flex-item">
	File not found. The file you have requested does not exist. COMP 1950 - Group Project
	</div></div>
	<?php
	$today = date("F j, Y, g:iA");
	echo "<p class='times'>$today</p>";
	?>
	</main>
	<footer>
				<p><a href="http://validator.w3.org/check?uri=http://students.bcitcomp.ca/igolobokov/websites/homework-01/index.html" target="new">Validate HTML</a></p>
	</footer>
</div>
	</body>
</html>