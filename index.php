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
		<h2 style="text-align: center;">Funções do APP</h2>
		<div class="row funcoes">
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
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php");
    ?>
</body>
</html>
