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
					<li>
						<a href="promocoes">
							Promoções
						</a>
					</li>
					<li class="active">
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
				<h1>Entrega</h1>
			</div>
		</div>
	</header>

	<div id="businessDelivery_map"></div>
	<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
  	document.getElementById('businessDelivery_map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX_YH2lP5How3luaeQnR6FmgX6CGXxyHo&callback=initMap">
</script>

<section>
	<div class="grid" class="overlay">
		<div class="wrap">
			<div class="um">
				<div id="businessInfo" class="grid card--white">
					<div id="businessInfo_phone1">
						<h2 style="margin-bottom: 1rem;">
							Entregamos em todo o norte da Ilha.<br>
						</h2>
						<h3>
							A Melhor pizza dos Ingleses sai direto do forno para sua casa!
						</h3>
					</div>
					<div id="businessInfo_adress1">
						<p>
							Rio Vermelho, Santinho, Vargem Grande, Vargem do Bom Jesus, Canasvieiras, Cachoeira do Bom Jesus, Praia Brava, Jurerê e Ponta das Canas
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

</body>
</html>