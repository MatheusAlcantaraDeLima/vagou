<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>VaGou!</title>
</head>
<body>
    <div class="container">
        <?php
			include_once("menuFuncoes.php");
		?>
        <hr>
        <h2 style="text-align: center;">Reserva</h2>
       <input type="number" class="form-control" placeholder=" Digite o ID do estacionamento" min="1"><br><input type="submit" value="buscar" class="btn btn-primary">
    </div>
</body>
</html>