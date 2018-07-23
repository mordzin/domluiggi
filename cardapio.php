<?php
$mysqli = new mysqli('localhost', 'root', 'Ahto@ht0', 'domluiggi');
if ($mysqli->connect_error) {
	die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$pizzas_array = array();
$pizza_has_ingredientes_array = array();
$ingredientes_array = array();
$pizzas = $mysqli->query("select * from pizzas_available")or die($mysqli->error);
$pizza_has_ingredientes = $mysqli->query("select * from pizzas_available inner join pizzas_available_has_sabor on pizzas_available.idpizzas_available = pizzas_available_has_sabor.pizzas_available_idpizzas_available inner join sabor on sabor.idsabor = pizzas_available_has_sabor.sabor_idsabor inner join sabor_has_ingrediente on sabor_has_ingrediente.sabor_idsabor = sabor.idsabor inner join ingrediente on ingrediente.idingrediente = sabor_has_ingrediente.ingrediente_idingrediente")or die($mysqli->error);
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
$results = $mysqli->query("select * from pizzas_available")or die($mysqli->error);
?>

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
	<script type="application/javascript" src="js/echo.js"></script>
</head>
<body>
	<header id="mainHeader">
		<nav id="mainMenu" style="display: none;">
			<ul>
				<li>
					<a href="index.html">
						Home
					</a>
				</li>
				<li class="active">
					<a href="cardapio.html">
						Cardápio
					</a>
				</li>
				<li>
					<a href="promocoes.html">
						Promoções
					</a>
				</li>
				<li>
					<a href="entrega.html">
						Entrega
					</a>
				</li>
				<li>
					<a href="contato.html">
						Contato
					</a>
				</li>
			</ul>
		</nav>

		<div class="logo">
			<a href="index.html">
				<h3>Dom Luiggi</h3>
			</a>
		</div>

		<div class="nothing"></div>
		<div class="menu">
			<button id="menuButton" class="menu btn-i corner-b fixed-b" onclick="$('#mainMenu').toggle();">
				<i class="material-icons">
					menu
				</i>
			</button>
		</div>
	</header>

	<div class="btn bg-brand1 move fixed-c corner-c">Pedir online</div>
	<header id="pageHeader" class="magic-padding-y">
		<div class="wrap">
			<div class="pageHeader_title">
				<a href="index.html">
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
					<li id="tab-doces" >
						<a href="#pizzas-doces">
							Doces
						</a>
					</li>
					<li id="tab-especiais" >
						<a href="#pizzas-doces">
							Especiais
						</a>
					</li>
					<!--<li id="tab-bebidas" >
						<a href="#bebidas">
							Bebidas
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</header>

	<div class="btn bg-brand1 move fixed-c corner-c">Pedir online</div>

	<section id="">
		<div id="cardapio" class="cardapio_wrap">
			<ul id="pizzas-premium">
				<?php
				while($row = $results->fetch_assoc()) {
					if($row["ativo"] == 1){
						echo '<li class="cardapio-item ' .$row["tipo"]. '">
						<div class="gambis" data-target="productView" data-toggle="modal" style="z-index: 99;"></div>
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
						// if($row["custo_gigante"] > 1) echo ' Gigante R$ ' .$row["custo_gigante"];
						if($row["custo_grande"] > 1) echo ' Grande R$ ' .$row["custo_grande"];
              			// if($row["custo_media"] > 1) echo ' Média R$ ' .$row["custo_media"];
              			// if($row["custo_pequena"] > 1) echo ' Pequena R$ ' .$row["custo_pequena"];
						echo '</p>
						</div>
						<img class="thumb-pizza" src="img/pizzas/'.strtolower($row["nome"]).'.jpg">
						</li>';
					}
				}?>
			</ul>
		</div>
	</section>
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
	</div>
</section>
</body>
<script src="js/ahto.js"></script>
</html>
