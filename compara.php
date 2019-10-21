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
            include_once("conexao.php");
		?>
        <hr>
        <h2 style="text-align: center;">Compara</h2>
        <?php
            $querySelect =  "select nome_estacio, telefone, rua, bairro, cidade, preco_hora, diario, semanal,mensal from estacionamento";
            $execQuery = mysqli_query($conexao, $querySelect);
            if(mysqli_num_rows($execQuery) > 0){

            

        ?>
        <table width="100%">
            <tr>
                <th>Nome do estacionamento</th>
                <th>telefone</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Preço por Hora</th>
                <th>Preço por Dias</th>
                <th>Preço por Semanas</th>
                <th>Preço por Mês</th>
            </tr>
            <?php
                while($rows = mysqli_fetch_array($execQuery)){
                
            ?>
            <tr>
				<td><?php echo $rows["nome_estacio"] ?></td>
				<td><?php echo $rows["telefone"] ?></td>
				<td><?php echo $rows["rua"] ?></td>
				<td><?php echo $rows["bairro"] ?></td>
                <td><?php echo $rows["cidade"] ?></td>
                <td><?php echo $rows["preco_hora"] ?></td>
                <td><?php echo $rows["diario"] ?></td>
                <td><?php echo $rows["semanal"] ?></td>
                <td><?php echo $rows["mensal"] ?></td>							
            </tr>
            <?php
                }//fecha o while
            ?>
        </table>
            <?php
                }//fecha o if
            ?>
    </div>
</body>
</html>