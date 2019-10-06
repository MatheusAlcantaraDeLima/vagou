<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>VaGou!</title>
	<link rel="stylesheet" href="css/estiloFuncoes.css">
</head>
<body>
	<div class="container">
		<?php
			include_once("menu.php");
		?>
		<hr>
		<h2 style="text-align: center;">Funções do APP</h2><br>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<img src="img/icon/busca_icon.png" alt="icone de busca do app VaGou!">
			</div>
			<div class="col">
				<img src="img/icon/compara_icon.png" alt=" icone de comparação de preços do VaGou!">
			</div>
			<div class="col"> 
				<img src="img/icon/reserva_icon.png" alt="icone de reserva de vagas do VaGou!">
			</div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col">
				<div class="card border-primary mb-3" style="max-width: 18rem; margin-top:15px;">
					<div class="card-body text-primary">
						<h5 class="card-title">Busca</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border-primary mb-3" style="max-width: 18rem; margin-top:15px;">
					<div class="card-body text-primary">
						<h5 class="card-title">Compara</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border-primary mb-3" style="max-width: 18rem; margin-top:15px;">
					<div class="card-body text-primary">
						<h5 class="card-title">Reserva</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php");
    ?>
</body>
</html>
