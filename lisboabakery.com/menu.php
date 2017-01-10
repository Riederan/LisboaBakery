<!DOCTYPE html>
<script>
	$('.navbar').find("li:contains('Demo')")
</script>
<html lang="en">
	<head>
		<?php include('header.php'); ?>
	</head>
	<body onload="CheckCookie()">	
		<?php include('banner.php'); ?>
			<script>
				document.getElementById("menuNav").className = "active";
			</script>
			<div class="page-header">
				<h1>Menu <small>Best Portuguese Chicken in Town!</header></h1>
			</div>
		<?php include('footer.php'); ?>
	</body>
</html>