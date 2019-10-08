<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>VaGou!</title>
</head>
<body>
	<div class="container">
		<?php
			include_once("menu.php");
		?>
        <hr>
        <form action="validaLogin.php" method="post">
        <h3>Login</h3>
        <div class="form-group">
            <input type="text" placeholder="insira seu e-mail" class="form-control" size="50"><br>
            <input type="password" placeholder="insira a sua senha" class="form-control" size="50"><br>
        </div>
            <input type="submit" class="btn btn-primary">
        </form>
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php")
    ?>
</body>
</html>
