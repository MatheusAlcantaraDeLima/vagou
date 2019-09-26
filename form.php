<!DOCTYPE html>
<html>
<head>
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
        <h3>Cadastrar</h3>
        <!--Ao clicar em uma das opções abaixo, será mostrado um formulário de acordo com o perfil do usuário (pessoa física ou jurídica)-->
        <input type="button" id="pf"  class="btn btn-primary" name="perfil" value="Pessoa Física"> &nbsp;&nbsp;
        <input type="button" id="pj" class="btn btn-primary" name="perfil" value="Pessoa Jurídica">
        <!--FORM pessoa física-->
        <form action="salvaForm.php" method="post" id="formFisica">
            <div class="form-group">
                <label><input type="text" name="nome" placeholder="Digite seu nome" class="form-control" size="100" maxlength="50" required></label><br>
                <label><input type="text" name="email" placeholder="Digite seu e-mail" class="form-control" size="100" maxlength="100" required></label><br>
                <label><input type="text" name="dataNasci" placeholder="Digite sua data de nascimento" class="form-control" size="100"  maxlength="8" required></label><br>
                <label><input type="text" name="cpf" placeholder="Digite seu CPF" class="form-control" size="100" maxlength="11" required></label><br>
                <label><input type="password" name="senhaPF" placeholder="Digite sua senha" class="form-control" size="100" maxlength="20" required></label><br>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
        <!--FORM pessoa jurídica-->
        <form action="salvaForm.php" method="post" id="formJuridica">
            <div class="form-group">
                <label><input type="text" name="nomeEstacionamento" placeholder="Digite o Nome do estacionamento" class="form-control" size="100" maxlength="40" required></label><br>
                <label><input type="text" name="email" placeholder="Digite o e-mail da empresa" class="form-control" size="100"  maxlength="100" required></label><br>
                <label><input type="text" name="cnpj" placeholder="Digite o CNPJ" class="form-control" size="100"  maxlength="19" required></label><br>
                <label><input type="text" name="cep" placeholder="Digite o CEP" class="form-control" size="100"  maxlength="9" required></label><br>
                <label><input type="text" name="complemento" placeholder="Digite o complemento" class="form-control" size="100"  maxlength="30"></label><br>
                <label><input type="text" name="numero" placeholder="Digite o número" class="form-control" size="100"  maxlength="5" required></label><br>
                <label><input type="password" name="senhaPJ" placeholder="Digite a senha" class="form-control" size="100"  maxlength="20" required></label><br>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <!--Chamando arquivo js com funções de interação do usuário com o form-->
    <script src="js/formCad.js"></script>
    <!--Adicionando footer-->
    <?php 
        include_once("footer.php")
    ?>
</body>
</html>
