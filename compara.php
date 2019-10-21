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
    <style>
        tr{
            border:1px solid #007bff;
        }
        th{
            border:1px solid #007bff;
        }
        td{
            border:1px solid #007bff;
        }
    </style>
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
        <div class="table-responsive">
            <table>
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col">Nome do estacionamento</th>
                        <th scope="col">telefone</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Preço por Hora</th>
                        <th scope="col">Preço por Dias</th>
                        <th scope="col">Preço por Semanas</th>
                        <th scope="col">Preço por Mês</th>
                    </tr>
                </thead>
        
            <?php
                while($rows = mysqli_fetch_array($execQuery)){
                
            ?>
            <tbody>
                <tr style="text-align: center;">
                    <td ><?php echo  utf8_encode($rows["nome_estacio"]) ?></td>
                    <td ><?php echo $rows["telefone"] ?></td>
                    <td ><?php echo  utf8_encode($rows["rua"]) ?></td>
                    <td ><?php echo  utf8_encode($rows["bairro"]) ?></td>
                    <td ><?php echo  utf8_encode($rows["cidade"]) ?></td>
                    <td ><?php echo $rows["preco_hora"] ?></td>
                    <td ><?php echo $rows["diario"] ?></td>
                    <td ><?php echo $rows["semanal"] ?></td>
                    <td ><?php echo $rows["mensal"] ?></td>							
                </tr>
            </tbody>
            <?php
                }//fecha o while
            ?>
            </table>
        </div>
            <?php
                }//fecha o if
            ?>
    </div>
</body>
</html>