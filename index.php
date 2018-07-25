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
		<a href="index">
			<div class="logo">
				<img src="img/logo.svg">
				<p>Dom Luiggi</p>
			</div>
		</a>
		<div class="nothing hide l-show"></div>
		<div class="menuDesktop hide l-show">
			<nav id="mainMenuDesktop">
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

	<section class="bg-pizza fullscreen">
		<div class="grid y-dois-um" style="height: 100vh; grid-gap: 0;">
			<div class="grid overlay" style="align-content: center;">
				<div class="wrap magic-padding" style="margin-top: 1rem;">
					<div class="um">
						<h1 style="color: #fff;">Pizzaria Dom Luiggi. A Melhor Pizzaria nos Ingleses</h1>
						<p class="txt-white">Entrega ~ 40 a 50min</p>
						<div>
							<button class="btn corner-a">
								<a href="cardapio">
									Ver Cardápio
								</a>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="grid bg-brand1" style="align-content: center;">
				<div class="wrap magic-padding" id="featuredPromo">
					<div class="um txt-white">
						<h1>BORDA GRÁTIS na Pizza Gigante
						</h1>
						<p>
							Válido somente para pedidos feitos pelo site.<br>
						</p>
						<!-- <div>
							<button class="btn corner-a">
								<a href="http://deliveryapp.neemo.com.br/delivery/588/menu" target="_black">
									Pedir online
								</a>
							</button>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<section class="magic-padding-y">
		<div class="wrap magic-padding" id="featuredPromo">
			<div class="pageHeader_title">
				<h1>Pizzas mais pedidas</h1>
			</div>
		</div>
		<div id="cardapio" class="cardapio_wrap" style="margin-bottom: 1.5rem;">
			<ul id="pizzas-tradicionais">
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">4 Queijos</h4>
						<p class="item-description">Mussarela, parmesão, provolone e requeijão</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/4 queijos.jpg" class="item-img">
				</li>

				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Calabresa</h4>
						<p class="item-description">Mussarela, calabresa, cebola</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/calabresa.jpg" class="item-img">
				</li>

				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Portuguesa</h4>
						<p class="item-description">Mussarela, presunto, ovo, ervilha e cebola</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/portuguesa.jpg" class="item-img">
				</li>
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Marguerita</h4>
						<p class="item-description">Mussarela, tomate, manjericão e parmesão</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/marguerita.jpg" class="item-img">
				</li>
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Lombinho</h4>
						<p class="item-description">Mussarela, lombo e requeijão;</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/lombinho.jpg" class="item-img">
				</li>
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Bacon com Milho</h4>
						<p class="item-description">Mussarela, bacon e milho</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/bacon com milho.jpg" class="item-img">
				</li>
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Brócolis Mineiro</h4>
						<p class="item-description">Mussarela, brócolis, requeijão</p>
						<p class="item-price">Grande R$ 48</p>
					</div>
					<img src="img/pizzas/brócolis mineiro.jpg" class="item-img">
				</li>
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Mignon 4 Queijos</h4>
						<p class="item-description">Mussarela, filet mignon e 4 queijos</p>
						<p class="item-price">Grande R$ 74</p>
					</div>
					<img src="img/pizzas/mignon 4 queijos.jpg" class="item-img">
				</li>
				<li class="cardapio-item">
					<div class="item-info">
						<h4 class="item-title">Peperoni</h4>
						<p class="item-description">Mussarela, peperoni, tomate e cebola</p>
						<p class="item-price">Grande R$ 54</p>
					</div>
					<img src="img/pizzas/peperoni.jpg" class="item-img">
				</li>
			</ul>
		</div>
		<div class="wrap magic-padding-x">
			<a href="cardapio">
				<button class="btn corner-a bg-brand1">
					Ver Cardápio Completo
				</button>
			</a>
		</div>
	</section>

	<section id="contato" class="grid bg-brand1 round-a txt-white" style="padding-bottom: 2.5rem;">
		<div class="wrap magic-padding-x magic-padding-y">
			<div class="um">
				<p>
					Peça agora
				</p>
				<h1>
					3282-0048<br>
					98470-7656 <span>Oi</span><br>
					99645-2581 <span>Tim</span>
				</h1>
				<p>
					Aberto Das 18h às 23h30
					*fechado nas Terças-feiras
				</p>
			</div>
		</div>
	</section>

	<footer class="grid um">
	</footer>

	<!-- Modais -->
	<section id="productView" class="modal">
		<div class="productView_overlay">
			<div class="grid" style="height: 100%;">

				<button data-dismiss="modal" class="btn-i fixed-a corner-a">
					<i class="material-icons" data-dismiss="modal">
						arrow_back
					</i>
				</button>

				<img src="" id="productView_img">
				<div class="wrap" style="margin-top: 4.5rem;">
					<div class="magic-padding txt-white">
						<h1 id="productView_title">Lorem ipsum</h1>
						<p id="productView_description">Lorem ipsum</p>
					</div>
					<div class="grid magic-padding-x">
						<div style="display: inline-block;">
							<button class="btn corner-a" style="float: left;">
								<a href="tel:3282-0048">
									Ligar
								</a>
							</button>
							<button class="btn corner-c" style="float: left; margin-left: 1rem;">
								<a href="http://deliveryapp.neemo.com.br/delivery/588/menu" target="_blank">
									Pedir online
								</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>