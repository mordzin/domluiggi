<!doctype html>
<html ⚡>
<head>

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NDDHWGS');
</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<link rel="canonical" href="self.html" />
<meta name="viewport" content="width=device-width,minimum-scale=1">
<title>Pizzaria nos Ingleses - Dom Luiggi - entregamos em todo o norte da ilha</title>
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

	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDDHWGS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->

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
			<img src="img/logo.svg">
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
		<a href="http://deliveryapp.neemo.com.br/delivery/588/menu" target="_blank">
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

<section style="padding-bottom: 2.5rem;">
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
							Ingleses, Rio Vermelho, Santinho, Vargem Grande, Vargem do Bom Jesus, Canasvieiras, Cachoeira do Bom Jesus, Praia Brava, Jurerê e Ponta das Canas
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<footer id="contato" class="grid bg-brand1 round-a txt-white">
	<div class="wrap magic-padding-x magic-padding-y">
		<div class="um">
			<p>
				Peça agora
			</p>
			<h1>
				3282-0048<br>
				98470-7656 <span style="opacity: 0.5">Oi</span><br>
				99645-2581 <span style="opacity: 0.5">Tim</span>
			</h1>
			<p>
				Aberto Das 18h às 23h15<br>
				*fechado nas Terças-feiras
			</p>
		</div>
	</div>
	<div>
		<a href="https://ahto.digital" target="_blank" alt="Criado pelo Ahto Coletivo">
			<div class="um ahtocoletivo" style="background-color: #111; padding: 1rem; color: #333;">
				<img src="img/ahtocoletivo.svg" style="width: 3rem; justify-self: center;">
			</div>
		</a>
	</div>
</footer>
<!-- Hotjar Tracking Code for http://domluiggi.com.br -->
<script>
	(function(h,o,t,j,a,r){
		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		h._hjSettings={hjid:956991,hjsv:6};
		a=o.getElementsByTagName('head')[0];
		r=o.createElement('script');r.async=1;
		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>
</html>
