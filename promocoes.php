<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Pizzaria nos Ingleses - Dom Luiggi a melhor Pizzaria nos Ingleses! Pizzaria Delivery.</title>
	<link rel="canonical" href="https://www.pizzariadomluiggi.com">
	<link rel="stylesheet" type="text/css" href="ahto.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
	crossorigin="anonymous"></script>
	<script src="js/ahto.js"></script>
</head>
<body>
	<header id="mainHeader">
		<nav id="mainMenu" style="display: none;">
			<ul>
				<li class="active">
					<a href="index">
						Home
					</a>
				</li>
				<li>
					<a href="cardapio">
						Cardápio
					</a>
				</li>
				<li>
					<a href="promocoes">
						Promoções
					</a>
				</li>
				<li>
					<a href="entrega">
						Entrega
					</a>
				</li>
				<li>
					<a href="contato">
						Contato
					</a>
				</li>
			</ul>
		</nav>
		<div class="logo">
			<a href="index">
				<h3>Dom Luiggi</h3>
			</a>
		</div>
		<div class="nothing hide l-show"></div>
		<div class="menuDesktop hide l-show">
			<nav id="mainMenuDesktop">
				<ul>
					<li>
						<a href="index">
							Home
						</a>
					</li>
					<li>
						<a href="cardapio">
							Cardápio
						</a>
					</li>
					<li class="active">
						<a href="promocoes">
							Promoções
						</a>
					</li>
					<li>
						<a href="entrega">
							Entrega
						</a>
					</li>
					<li>
						<a href="contato">
							Contato
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="menuMobile l-hide">
			<button id="menuButton" class="menu btn-i corner-b fixed-b" onclick="$('#mainMenu').toggle();">
				<i class="material-icons">
					menu
				</i>
			</button>
		</div>
	</header>

	<div class="btn bg-cta move fixed-c corner-c">
		<a href="http://deliveryapp.neemo.com.br/delivery/588/menu" target="_black">
			Pedir online
		</a>
	</div>
	
	<header id="pageHeader" class="magic-padding-y">
		<div class="wrap">
			<div class="pageHeader_title">
				<a href="index">
					<button class="btn-i">
						<i class="material-icons">
							arrow_back
						</i>
					</button>
				</a>
				<h1>Promoções</h1>
			</div>
		</div>
	</header>

	<section>
		<div class="wrap">
			<div id="promos" class="um l-dois" style="background-color: #fff;">
				<div class="um">
					<img src="img/borda-cheddar.jpg" alt="" class="fluid">
				</div>
				<div class="um">
					<div class="card grid">
						<h1>Borda Grátis na compra de uma Pizza Gigante!</h1>
						<p>válido somente para compras feitas pelo site.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>