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
					<div class="row">
						<img src="img/equipe/matheus.png" alt="desenvolvedor" class="img_grupo">
					</div>
					<div class="row">
					<div class="col"></div>
						<div>
							<a href="https://github.com/MatheusAlcantaraDeLima" target="_blank"><input type="button" value="GitHub" class="btn btn-primary"></a>
						</div>
						<div>
							<a href="https://www.linkedin.com/in/matheus-alcantara-119164164/" target="_blank" class="botao"><input type="button" value="LinkedIn" 		class="btn btn-primary">
							</a>
						</div>
						<div class="col"></div>
						<div class="col"></div>
					</div>
				</div>
				<div class="col">
				<div class="row">
						<img src="img/equipe/matheus.png" alt="desenvolvedor" class="img_grupo">
					</div>
					<div class="row">
					<div class="col"></div>
						<div>
							<a href="https://github.com/MatheusAlcantaraDeLima" target="_blank"><input type="button" value="GitHub" class="btn btn-primary"></a>
						</div>
						<div>
							<a href="https://www.linkedin.com/in/matheus-alcantara-119164164/" target="_blank" class="botao"><input type="button" value="LinkedIn" 		class="btn btn-primary">
							</a>
						</div>
						<div class="col"></div>
						<div class="col"></div>
					</div>
				</div>
				<div class="col">
				<div class="row">
						<img src="img/equipe/matheus.png" alt="desenvolvedor" class="img_grupo">
					</div>
					<div class="row">
					<div class="col-2"></div>
						<div>
							<a href="https://github.com/MatheusAlcantaraDeLima" target="_blank"><input type="button" value="GitHub" class="btn btn-primary"></a>
						</div>
						<div>
							<a href="https://www.linkedin.com/in/matheus-alcantara-119164164/" target="_blank" class="botao"><input type="button" value="LinkedIn" 		class="btn btn-primary">
							</a>
						</div>
						<div class="col"></div>
						<div class="col"></div>
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