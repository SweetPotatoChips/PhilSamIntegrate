<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
			<?php 
				$action = "home"; //this is needed to make the homepage button highlight to show user they are on the homepage
				include "includes\bootstrap.php"; //includes the bootsrap
				include "includes\header.php";  //includes the header file that contains the navbar
			?>
		</div>
	</body>
</html>