<?php
$mysqli = new mysqli('localhost', 'root', 'Ahto@ht0', 'domluiggi');
if ($mysqli->connect_error) {
	die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$pizzas_array = array();
$pizza_has_ingredientes_array = array();
$ingredientes_array = array();
$pizzas = $mysqli->query("select * from pizzas_available order by pizzas_available.nome")or die($mysqli->error);
$pizza_has_ingredientes = $mysqli->query("select * from pizzas_available inner join pizzas_available_has_sabor on pizzas_available.idpizzas_available = pizzas_available_has_sabor.pizzas_available_idpizzas_available inner join sabor on sabor.idsabor = pizzas_available_has_sabor.sabor_idsabor inner join sabor_has_ingrediente on sabor_has_ingrediente.sabor_idsabor = sabor.idsabor inner join ingrediente on ingrediente.idingrediente = sabor_has_ingrediente.ingrediente_idingrediente order by pizzas_available.nome, ingrediente.nome != 'mussarela', ingrediente.nome")or die($mysqli->error);
$ingredientes = $mysqli->query("select * from ingrediente order by nome")or die($mysqli->error);
$i=0;
while($row = $pizza_has_ingredientes->fetch_assoc()){
	foreach($row as $paramName => $paramValue){
		$pizza_has_ingredientes_array[$i][$paramName] = $paramValue;
	}
	$i++;
}
$i=0;
while($row = $ingredientes->fetch_assoc()){
	foreach($row as $paramName => $paramValue){
		$ingredientes_array[$i][$paramName] = $paramValue;
	}
	$i++;
}
$results = $mysqli->query("select * from pizzas_available order by nome")or die($mysqli->error);
$results_bebidas = $mysqli->query("select * from bebida order by nome")or die($mysqli->error);
$results_bordas = $mysqli->query("select * from borda order by nome")or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
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

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Cardápio | Dom Luiggi | Pizzaria nos Ingleses. Faça seu pedido online ou pelo telefone!</title>
<meta name="description" content="Confira nosso cardápio e faça seu pedido online ou por telefone! São mais de 80 sabores de pizza!">
<meta name="keywords" content="pizzaria nos ingleses, pizza nos ingleses, a melhor pizzaria nos ingleses, mais de 80 sabores de pizza">	
<link rel="canonical" href="https://www.pizzariadomluiggi.com">
<link rel="stylesheet" type="text/css" href="ahto.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
crossorigin="anonymous"></script>
<script type="application/javascript" src="js/echo.js"></script>
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
					<li class="active">
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
				<h1>Cardápio</h1>
			</div>
			<div class="pageHeader_tabs">
				<ul class="tabs">
					<li id="tab-trad" class="active">
						<a href="#pizzas-tradicionais">
							Tradicionais
						</a>
					</li>
					<li id="tab-nobres">
						<a href="#pizzas-nobres">
							Nobres
						</a>
					</li>
					<li id="tab-especiais" >
						<a href="#pizzas-especiais">
							Especiais
						</a>
					</li>
					<li id="tab-doces" >
						<a href="#pizzas-doces">
							Doces
						</a>
					</li>
					<li id="tab-bordas" >
						<a href="#">
							Bordas
						</a>
					</li>
					<li id="tab-bebidas" >
						<a href="#">
							Bebidas
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<section style="margin-bottom: 5rem;">
		<div id="cardapio" class="cardapio_wrap">
			<ul>
				<?php
				while($row = $results->fetch_assoc()) {
					if($row["ativo"] == 1){
						echo '<li class="cardapio-item ' .$row["tipo"]. '">
						<div class="gambis" data-target="productView" data-toggle="modal"></div>
						<div class="item-info">
						<h4 class="item-title">';
						echo $row["nome"];
						echo '</h4><p class="item-description">';
						$first = true;
						foreach($pizza_has_ingredientes_array as $pi){
							if($pi['idpizzas_available'] == $row['idpizzas_available']){
								if($first){
									printf(ucfirst($pi['nome']));
									$first = false;
								}else {
									echo ", " .ucfirst($pi['nome']);
								}
							}
						}
						echo ".";

						echo '</p>
						<p class="item-price">';
						if($row["custo_gigante"] > 1) echo ' Gigante R$ ' .$row["custo_gigante"]. '<br>';
						if($row["custo_grande"] > 1) echo ' Grande R$ ' .$row["custo_grande"]. '<br>';
						if($row["custo_media"] > 1) echo ' Média R$ ' .$row["custo_media"];
              			// if($row["custo_pequena"] > 1) echo ' Pequena R$ ' .$row["custo_pequena"];
						echo '</p>
						</div>
						<img class="thumb-pizza" src="img/pizzas/'.strtolower($row["nome"]).'.jpg">
						</li>';
					}
				}?>
			</ul>
			<ul id="bordas">
				<?php
				while($row = $results_bordas->fetch_assoc()) {
					echo '<li class="cardapio-item Borda">
					<div class="gambis" data-target="productView" data-toggle="modal"></div>
					<div class="item-info">
					<h4 class="item-title">';
					echo $row["nome"];
					echo '</h4><p class="item-description">';
					printf(ucfirst($pi['descricao']));
					echo '
					<p class="item-price">';
					if($row["custo_gigante"] > 1) echo ' Gigante R$ ' .$row["custo_gigante"]. '<br>';
					if($row["custo_grande"] > 1) echo ' Grande R$ ' .$row["custo_grande"]. '<br>';
					if($row["custo_media"] > 1) echo ' Média R$ ' .$row["custo_media"];
              			// if($row["custo_pequena"] > 1) echo ' Pequena R$ ' .$row["custo_pequena"];
					echo '</p>
					</div>
					<img class="thumb-pizza" src="img/bordas/'.strtolower($row["nome"]).'.jpg">
					</li>';
				}
				?>
			</ul>
			<ul id="bebida">
				<?php
				while($row = $results_bebidas->fetch_assoc()) {
					echo '<li class="cardapio-item Bebida">
					<div class="gambis" data-target="productView" data-toggle="modal"></div>
					<div class="item-info">
					<h4 class="item-title">';
					echo $row["nome"];
					echo '</h4><p class="item-description">';
					printf(ucfirst($pi['descricao']));
					echo '
					<p class="item-price">';
						// if($row["custo_gigante"] > 1) echo ' Gigante R$ ' .$row["custo_gigante"];
					if($row["preco"] > 1) echo 'R$ ' .$row["preco"];
              			// if($row["custo_media"] > 1) echo ' Média R$ ' .$row["custo_media"];
              			// if($row["custo_pequena"] > 1) echo ' Pequena R$ ' .$row["custo_pequena"];
					echo '</p>
					</div>
					<img class="thumb-pizza" src="img/bebidas/'.strtolower($row["nome"]).'.jpg">
					</li>';
				}
				?>
			</ul>
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
						<h1 id="productView_title"></h1>
						<p id="productView_description"></p>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123066990-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-123066990-1');
</script>
<script src="js/ahto.js"></script>
</html>
