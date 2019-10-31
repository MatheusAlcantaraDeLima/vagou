<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>VaGou!</title>
	<link rel="stylesheet" href="css/estiloFuncoes.css">
	<!--Tags Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<?php
			include_once("menu.php");
		?>
		<hr>
		<h2 style="text-align: center;">Funções do APP</h2><br>
		<div class="row">
			<div class="col-4">
				<img src="img/icon/busca_icon.png" alt="icone de busca do app VaGou!" style="margin-left:100px;">
				<div class="card border-primary mb-3" style="max-width: 18rem; margin-top:15px;">
					<div class="card-body text-primary">
						<h5 class="card-title" style="text-align:center;">Busca</h5>
						<p class="card-text"><strong>Busca por estacionamentos próximos a você</strong></p>
					</div>
				</div>
			</div>
			<div class="col-4">
				<img src="img/icon/compara_icon.png" alt=" icone de comparação de preços do VaGou!" style="margin-left:100px;">
				<div class="card border-primary mb-3" style="max-width: 18rem; margin-top:15px;">
					<div class="card-body text-primary">
						<h5 class="card-title" style="text-align:center;">Compara</h5>
						<p class="card-text"><strong>Compara e mostra os melhores preços para você</strong></p>
					</div>
				</div>
			</div>
			<div class="col-4"> 
				<img src="img/icon/reserva_icon.png" alt="icone de reserva de vagas do VaGou!" style="margin-left:100px;">
				<div class="card border-primary mb-3" style="max-width: 18rem; margin-top:15px;">
					<div class="card-body text-primary">
						<h5 class="card-title" style="text-align:center;">Reserva</h5>
						<p class="card-text"><strong>Reserve a sua vaga sem mesmo ter saído de casa</strong></p>
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
