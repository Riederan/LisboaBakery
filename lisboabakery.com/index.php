<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('header.php'); ?>
	</head>
	<body onload="CheckCookie()">	
		<?php include('banner.php'); ?>
			<script>
				document.getElementById("homeNav").className = "active";
			</script>
			<div class="page-header">
				<h1>Home <small>Best Portuguese Chicken in Town!</header></h1>
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
					<li data-target="#myCarousel" data-slide-to="6"></li>
					<li data-target="#myCarousel" data-slide-to="7"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/home/location.jpg" alt="Location">
						<div class="carousel-caption">
							<h2>Our Location</h2>
						</div>
					</div>
					<div class="item">
						<img src="images/home/bs1.jpg" alt="Charcoal Chicken">
						<div class="carousel-caption">
							<h2>Chicken Entrée</h2>
						</div>
					</div>
					
					<div class="item">
						<img src="images/home/bs2.jpg" alt="Cod Fish">
						<div class="carousel-caption">
							<h2>Cod Fish</h2>
						</div>
					</div>

					<div class="item">
						<img src="images/home/bs3.jpg" alt="Original Breakfast w/ Sausage">
						<div class="carousel-caption">
							<h2>Original Breakfast w/ Sausage</h2>
						</div>
					</div>

					<div class="item">
						<img src="images/home/bs4.jpg" alt="Charcoal Chicken">
						<div class="carousel-caption">
							<h2>Charcoal Grilled Chicken</h2>
						</div>
					</div>
					
					<div class="item">
						<img src="images/home/bs5.jpg" alt="Grilled Squid Entrée">
						<div class="carousel-caption">
							<h2>Grilled Squid Entrée</h2>
						</div>
					</div>
					
					<div class="item">
						<img src="images/home/bs6.jpg" alt="Cappuccino & Latte">
						<div class="carousel-caption">
							<h2>Cappuccino & Latte</h2>
						</div>
					</div>
					
					<div class="item">
						<img src="images/home/bs7.jpg" alt="Natas/Custard Tarts">
						<div class="carousel-caption">
							<h2>Natas/Custard Tarts</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container" >
				<div class="col-sm-4">
					<div class="jumbotron nopadd">
						<div class="container">
							<h3><b>About Us</b></h3>
							<h3><small>
								We offer a little piece of Portugal with Authentic Portuguese Cuisine for the whole family since 2009! 
								When taking out or eating in at Lisboa Bakery & Grill you can expect fast, fresh and healthy home made meals.
								<a href="#open1" class="info" data-toggle="collapse">Read more</a>
							</small></h3>
							<div id="open1" class="collapse">
								<h4><small>
									We have something for everyone; our Famous Charcoal BBQ Piri Piri Chicken, Our Daily Hot Table Ready to go lunch meals, Fresh European Breads, Pastries, Cakes, 
									and much more! Stop by for breakfast, lunch, or dinner. Take out available
								</small></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="jumbotron nopadd">
						<div class="container">
					<h2><b>“Best Portuguese Chicken in Town!!”</b></h2>
						<h3><small>
							No Portuguese Piri Piri Chicken recipe can be made without using Charcoal to grill it. We've been grilling it since we introduced
							Authentic Portuguese Churrasco Traditions to the KW area in 2009!
							<a href="#open2" class="info" data-toggle="collapse">Read more</a>
						</small></h3>
						<div id="open2" class="collapse">
							<h3><small>We grill our chickens in whole butterfly cut, 
								marinated for 48 hours in our mouth watering rich Portuguese Seasoning. All our chickens are halal certified for 
								the extra healthy benefits. 
								We suggest you try our succulent BBQ Churrasco Chicken that is served with our famous house made Piri Piri Sauces 
								mild or hot. Sauces also sold separately.
								All our foods are delicately prepared fresh daily from fresh ingredients.
							</small></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="jumbotron nopadd">
					<div class="container">
					<h2><b>Lisboa Bakery & Grill Catering</b></h2>
						<h3><small>
							We cater to all local business', church's, sponsor and special events, weddings, parties, get togethers and more. 
							Our “Best Portuguese Chicken in Town” is bond to leave your guests taste buds wanting more.
							<a href="#open3" class="info" data-toggle="collapse">Read more</a>
						</small></h3>
						<div id="open3" class="collapse">
							<h3><small>
							If it's not on our menu, we can customize almost anything you want!
							Enjoy our “Best Portuguese Chicken in Town!” and Our Portuguese round Parisian Potatoes and much more!
							Call ahead to place an order to have it ready to go. Inquire about catering details plus delivery options.
							</small></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>