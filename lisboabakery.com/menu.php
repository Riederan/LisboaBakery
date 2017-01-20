<!DOCTYPE html>
<script>
	$('.navbar').find("li:contains('Demo')")
</script>
<html lang="en">
	<head>
		<?php include('header.php'); ?>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body onload="CheckCookie()">	
		<?php include('banner.php'); ?>
			<script>
				document.getElementById("menuNav").className = "active";
			</script>
			<div class="page-header">
				<h1>Dining Menu <small>Best Portuguese Chicken in Town!</header></h1>
			</div>
<div class="inner-menu">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6"><!--Chicken-->
				<div class="menu-list">
					<h3>Charcoal BBQ Grilled Portuguese Chicken</br>Frango no Churrasco</h3>
					<img class="img-responsive" src="images/IMG_9615.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Whole</h4>
						<span class="price pull-right">$12.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Half</h4>
						<span class="price pull-right">$9.49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">1/4 Dark</h4>
						<span class="price pull-right">$4.75</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">1/4 White</h4>
						<span class="price pull-right">$5.75</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Half Dinner</h4>
						<span class="price pull-right">$13.49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Quarter Dark Meat Dinner</h4>
						<span class="price pull-right">$10.49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Quarter White Meat Dinner</h4>
						<span class="price pull-right">$11.49</span>
						<div class="clearfix"></div>
					</div>
					<small>* Extra sauce $0.75/ea. 355ml Bottle of sauce $3.99/ea.</small>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Entreés-->
				<div class="menu-list">
					<h3>Entreés</h3>
					<img class="img-responsive" src="images/IMG_9615.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Fried Calamari</h4>
						<span class="price pull-right">$12</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Garlic Piri Piri Shrimp</h4>
						<span class="price pull-right">$12</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Chouriço à Bombeiro</br>Fireman Sausage</h4>
						<span class="price pull-right">$12</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Fish Filét</h4>
						<span class="price pull-right">$12.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Bife à Casa</h4>
						<span class="price pull-right">$17</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Bacalhau à Bras</h4>
						<span class="price pull-right">$17</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Bacalhau com Natas</h4>
						<span class="price pull-right">$17</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Lulas Grelhadas (Grilled Squid)</h4>
						<span class="price pull-right">$17</span>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Sandwiches-->
				<div class="menu-list">
					<h3>Sandwiches/Sandes</h3>
					<img class="img-responsive" src="images/IMG_9615.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Bifana topped with Cebolada<br>Pork Loin</h4>
						<span class="price pull-right">$12.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Chourico e batatas fritas</br>Chourico and Chips</h4>
						<span class="price pull-right">$49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Frango/Grilled Chicken Breast</h4>
						<span class="price pull-right">$39</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Chicken Parmesan</h4>
						<span class="price pull-right">$22</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Veal Parmesan</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Prego/Steak</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Schnitzel</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Galinha Tostada</br>Toasted Chicken</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Tosta Mista</br>Grilled Ham & Cheese</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Presunto e queijo</br>Prosciutto and Cheese</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<small>*Add Cheese, Mushrooms, Tomato Sauce, Bacon, Egg or Cebolada $1.00/ea.
					</br>*Add two sides to any sandwich $5.00 (fries, rice, potatoes, veggies or salad)</small>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Breakfast-->
				<div class="menu-list">
					<h3>Breakfast</br>Pequeno Almoço</h3>
					<img class="img-responsive" src="img/menu/menu1.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Original (2 eggs, bacon or sausage, homefries, toast)</h4>
						<span class="price pull-right">$12.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">B.L.T Sandwich</h4>
						<span class="price pull-right">$49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">English Muffin</h4>
						<span class="price pull-right">$39</span>
						<div class="clearfix"></div>
					</div>
					<small>(served daily 9am-11am)</small>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Soups-->
				<div class="menu-list" >
					<h3>Soup/Sopa</h3>
					<img class="img-responsive" src="img/menu/menu1.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Caldo Verde</h4>
						<span class="price pull-right">$5.25</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Daily soups</h4>
						<span class="price pull-right">$5.25</span>
						<div class="clearfix"></div>
					</div>
				<small>*Daily Specials announced on Snapchat</small>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Fish Individual-->
				<div class="menu-list">
					<h3>Fish Individual pc./Peixe Individual</h3>
					<img class="img-responsive" src="img/menu/menu1.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Filet de Peixe</br>Sea Bass Fillet</h4>
						<span class="price pull-right">$3.25</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Sardinha/Sardines</h4>
						<span class="price pull-right">$12.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Carapau/Fried Mackerel</h4>
						<span class="price pull-right">$49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Bacalhau/Fried Codfish</h4>
						<span class="price pull-right">$39</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Rissòis de Camarão</br>Shrimp Cakes</h4>
						<span class="price pull-right">$22</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Bolos de Bacalhau/Cod Cakes</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Individual Pieces-->
				<div class="menu-list">
					<h3>Each Piece</br>Cada Peça</h3>
					<img class="img-responsive" src="img/menu/menu1.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Roast Beef with Beef Gravy</h4>
						<span class="price pull-right">$3</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Febras de Porco/Pork Cutlets</h4>
						<span class="price pull-right">$5</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Cebolada/Sautéed onions and peppers</h4>
						<span class="price pull-right">$1</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Peito de Galinha/Chicken Cutlets</h4>
						<span class="price pull-right">$5</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Pork, Chicken, or Veal Breaded Cutlets</h4>
						<span class="price pull-right">$6</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">8oz. Steak</h4>
						<span class="price pull-right">$11.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Grilled Chourico</h4>
						<span class="price pull-right">$5</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Entrecosto/Full Rack of Ribs</h4>
						<span class="price pull-right">$24.99</span>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"><!--Salads-->
				<div class="menu-list">
					<h3>Salads</br>Salada</h3>
					<img class="img-responsive" src="img/menu/menu1.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">House</h4>
						<span class="price pull-right">Sm $4.99</br>Lg $8.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Caesar</h4>
						<span class="price pull-right">Sm $5.49</br>Lg $9.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Greek</h4>
						<span class="price pull-right">Sm $5.49</br>Lg $9.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Chick Pea</h4>
						<span class="price pull-right">Sm $4.99</br>Lg $9.99</span>
						<div class="clearfix"></div>
					</div>
					<small>*Check out our Salad Bar for more salad options.</br> 
					**Add Chicken Breast to any salad $3.99/ea.</small>
				</div>
			</div>
			<!--<div class="col-md-4 col-sm-6">
				<div class="menu-list">
					<h3>Charcoal</br>Frango</h3>
					<img class="img-responsive" src="img/menu/menu1.jpg" alt="">
					<div class="menu-list-item">
						<h4 class="pull-left">Whole</h4>
						<span class="price pull-right">$12.99</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Half</h4>
						<span class="price pull-right">$49</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">Dark</h4>
						<span class="price pull-right">$39</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item">
						<h4 class="pull-left">White</h4>
						<span class="price pull-right">$22</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Dinner</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Dinner</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
					<div class="menu-list-item border-zero">
						<h4 class="pull-left">Dinner</h4>
						<span class="price pull-right">$15</span>
						<div class="clearfix"></div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<?php include('footer.php'); ?>
	</body>
</html>