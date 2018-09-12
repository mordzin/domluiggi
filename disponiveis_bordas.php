<!DOCTYPE html>
<html>
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

$results = $mysqli->query("select * from borda")or die($mysqli->error);
?>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script type="application/javascript" src="js/jquery.js"></script>
    <script type="application/javascript" src="js/echo.js"></script>
  </head>
  <body>
    <div id="container">
      <table>
        <tr class="titles">
          <td>Imagem</td>
          <td>Nome</td>
          <td>Tipo</td>
          <td>Preço Med</td>
          <td>Preço Gd</td>
          <td>Preço Gg</td>
          <td>Ativa</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <form id="add_borda" enctype="multipart/form-data">
            <input type="hidden" name="op" id="op" value="add_borda">
            <input type="hidden" name="ativa" id="ativa" value="1">
            <td><input id="nome" type="text" name="nome" placeholder="Nome"></td>
            <td><input id="descricao" type="text" name="descricao" placeholder="Descrição"></td>
            <td><input id="custo_media" type="number" name="custo_media" placeholder="Custo Média"></td>
            <td><input id="custo_grande" type="number" name="custo_grande" placeholder="Custo Grande"></td>
            <td><input id="custo_gigante" type="number" name="custo_gigante" placeholder="Custo Gigante"></td>
            <td>
              <button onclick='var form =$("#add_borda").serialize();
                              var settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://domluiggi.ahto.digital/apir.php",
                                "method": "POST",
                                "headers": {
                                  "Content-Type": "application/x-www-form-urlencoded",
                                  "Cache-Control": "no-cache"
                                },
                                "processData": false,
                                "contentType": false,
                                "mimeType": "multipart/form-data",
                                "data": form
                              }

                              $.ajax(settings).done(function (response) {
                                console.log(response);
                              });
                            '>
                        Adicionar
              </button>
            </td>
          </form>
        </tr>
      <?php
      while($row = $results->fetch_assoc()) {
            print '<tr class="enabled">';
            print '<td><img src="https://www.solodev.com/assets/lazy-load-with-echo/image-loader.gif"  data-echo="img/bordas/'.strtolower($row["nome"]).'.jpg"></td>';
            print '<td>'.$row["idborda"]. " - ".$row["nome"].'</td>';
            print '<td>'.$row["descricao"].'</td>';
            print '<td>R$'.$row["custo_media"].'</td>';
            print '<td>R$'.$row["custo_grande"].'</td>';
            print '<td>R$'.$row["custo_gigante"].'</td>';
            print '<td><button onclick="$.ajax({url: \'https://domluiggi.ahto.digital/apir.php?op=deleta_borda&id=' . $row['idborda'] .'\'});window.location.reload(true);">Apagar</button></td>';
            print '</tr>';
      } ?>

    </table>
    </div>
  </body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/disponiveis.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script type="text/javascript" defer>
  var t=setInterval(function(){echo.init()},3000);
  </script>
</html>
