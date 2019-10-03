<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Adicionando Jquery-->
		<script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
		</script>
		<!--Adicionando o plugin de máscara do jQuery-->
		<script src="js/jquery/src/jquery.mask.js" type="text/javascript" /></script>
	<title>VaGou!</title>
</head>
<body>
	<div class="container">
        <?php
            include_once("menu.php");
        ?>
        <hr>
        <h3>Cadastrar</h3>
        <!--Ao clicar em uma das opções abaixo, será mostrado um formulário de acordo com o perfil do usuário (pessoa física ou jurídica)-->
        <input type="button" id="pf"  class="btn btn-primary" name="perfil" value="Pessoa Física"> &nbsp;&nbsp;
        <input type="button" id="pj" class="btn btn-primary" name="perfil" value="Pessoa Jurídica">
        <!--FORM pessoa física-->
        <form action="validaForm.php" method="post" id="formFisica">
            <div class="form-group">
                <label><input type="text" name="nomePF" placeholder="Digite seu nome" class="form-control" size="100" maxlength="50" required></label><br>
                <label><input type="text" name="email" placeholder="Digite seu e-mail" class="form-control" size="100" maxlength="100" required></label><br>
                <label><input type="date" name="dataNasci" id="dataNasci" placeholder="Digite sua data de nascimento" class="form-control" size="100" required></label><br>
                <label><input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-control" size="100"  required></label><br>
                <label><input type="password" name="senhaPF" placeholder="Digite sua senha" class="form-control" size="100" maxlength="20" required></label><br>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
        <!--FORM pessoa jurídica-->
        <form action="validaForm.php" method="post" id="formJuridica">
            <div class="form-group">
                <label><input type="text" name="nomePJ" placeholder="Digite o Nome do estacionamento" class="form-control" size="100" maxlength="40" required></label><br>
                <label><input type="text" name="email" placeholder="Digite o e-mail da empresa" class="form-control" size="100"  maxlength="100" required></label><br>
                <label><input type="text" name="telefone" id="telefone" placeholder="Digite o número de telefone" class="form-control" size="100" required></label><br>
                <label><input type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ" class="form-control" size="100" required></label><br>
                <label><input type="text" name="cep" id="cep" placeholder="Digite o CEP" class="form-control" size="100" required></label><br>
                <label><input type="text" name="complemento" placeholder="Digite o complemento" class="form-control" size="100"  maxlength="30"></label><br>
                <label><input type="text" name="numero" placeholder="Digite o número" class="form-control" size="100"  maxlength="5" required></label><br>
                <label><input type="password" name="senhaPJ" placeholder="Digite a senha" class="form-control" size="100"  maxlength="20" required></label><br>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
		<!--Adicionando máscara para o CPF, CNPJ, CEP e DATA-->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#cpf").mask("999.999.999-99");
				$("#cnpj").mask("99.999.999/9999-99");
				$("#cep").mask("99999-999");
				$("#telefone").mask("(99) 99999-9999");
			});
		</script>
    <!--Chamando arquivo js com funções de interação do usuário com o form-->
    <script src="js/formCad.js"></script>
    <!--Adicionando footer-->
    <?php
        include_once("footer.php")
    ?>
</body>
</html>
