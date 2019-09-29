<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>VaGou!</title>
</head>
<body>
	<div>
		<?php
			include_once("menu.php");
		?>
		<hr>
	</div>
	<div class="container">
		<h3 style="text-align:center">Funções</h3>
		<div class="card-group">
		  <div class="card">
		    <img src="img/icon/busca.png" class="card-img-top" alt="">
		    <div class="card-body">
		      <h5 class="card-title">Buscar por vagas</h5>
		    </div>
		  </div>
		  <div class="card">
		    <img src="img/icon/compara.png" class="card-img-top" alt="">
		    <div class="card-body">
		      <h5 class="card-title">Comparar preços</h5>
		    </div>
		  </div>
		  <div class="card">
		    <img src="img/icon/reserva.png" class="card-img-top" alt="">
		    <div class="card-body">
		      <h5 class="card-title">Reservar vagas</h5>
		    </div>
		  </div>
		</div>
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php")
    ?>
</body>
</html>
