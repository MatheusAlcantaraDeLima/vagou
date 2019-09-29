<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CSS-->
	<link rel="stylesheet" href="css/corpo.css">
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
		<div style="text-align:center;">
			<h3>Equipe do VaGou!</h3>
		</div>
		<div class="card-deck">
			<div class="card border-primary" style="width: 12rem;">
				<img src="img/equipe/matheus.png" class="card-img-top" alt="Imagem do matheus, membro da equipe de desenvolvimento do VaGou!">
				<div class="card-body">
					<strong>Matheus</strong>
					<p>Equipe de desenvolvimento do VaGou!</p>
					<div class="row">
						<div class="col">
							<a href="https://github.com/MatheusAlcantaraDeLima" target="_blank"><input type="button" value="GitHub" class="btn btn-primary"></a>
						</div>
						<div class="col">
							<a href="https://www.linkedin.com/in/matheus-alcantara-119164164/" target="_blank"><input type="button" value="LinkedIn" class="btn btn-primary"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="card border-primary" style="width: 12rem;">
				<img src="img/equipe/matheus.png" class="card-img-top" alt="Imagem do matheus, membro da equipe de desenvolvimento do VaGou!">
				<div class="card-body">
				<strong>Matheus</strong>
					<p>Equipe de desenvolvimento do VaGou!</p>
					<div class="row">
						<div class="col">
							<a href="https://github.com/MatheusAlcantaraDeLima" target="_blank"><input type="button" value="GitHub" class="btn btn-primary"></a>
						</div>
						<div class="col">
							<a href="https://www.linkedin.com/in/matheus-alcantara-119164164/" target="_blank"><input type="button" value="LinkedIn" class="btn btn-primary"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="card border-primary" style="width: 12rem;">
				<img src="img/equipe/matheus.png" class="card-img-top" alt="Imagem do matheus, membro da equipe de desenvolvimento do VaGou!">
				<div class="card-body">
				<strong>Matheus</strong>
					<p>Equipe de desenvolvimento do VaGou!</p>
					<div class="row">
						<div class="col">
							<a href="https://github.com/MatheusAlcantaraDeLima" target="_blank"><input type="button" value="GitHub" class="btn btn-primary"></a>
						</div>
						<div class="col">
							<a href="https://www.linkedin.com/in/matheus-alcantara-119164164/" target="_blank"><input type="button" value="LinkedIn" class="btn btn-primary"></a>
						</div>
					</div>
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
