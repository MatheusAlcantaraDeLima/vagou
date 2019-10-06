<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Adicionado CSS-->
	<link rel="stylesheet" href="css/estiloImgGrupo.css">
	<title>VaGou!</title>
</head>
<body>
	<div class="container">
		<?php
			include_once("menu.php");
		?>
		<hr>
		<h3 style="text-align:center;">Equipe VaGou!</h3>
		<div class="row">
			<div class="col">
				<img src="img/equipe/matheus.png" alt="desenvolvedor" class="img_grupo">
			</div>
			<div class="col">
				<img src="img/equipe/matheus.png" alt="desenvolvedor" class="img_grupo">
			</div>
			<div class="col">
				<img src="img/equipe/matheus.png" alt="desenvolvedor" class="img_grupo">
			</div>
		</div>
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php");
    ?>
</body>
</html>