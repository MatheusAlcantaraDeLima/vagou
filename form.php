<!DOCTYPE html>
<html>
<head>
    <!--Adicionado CSS-->
	<link rel="stylesheet" href="css/estilo.css">
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>VaGou!</title>
</head>
<body>
	<div class="container">
		<header>
			<div class="col-3">
				<div class="row">
					<h1>VaGou!</h1>
				</div>
				<div class="row">
					<p><strong>Dê valor ao tempo que realmente importa!</strong><p>
				</div>
			</div>
			<div class="col-9">
				<ul class="nav">
					<li class="nav-item">
					    <a class="btn btn-outline-primary" href="index.php">Home</a>
					</li>
                    <li class="nav-item">
					    <a class="btn btn-outline-primary" href="#">logar-se</a>
					</li>
					<li class="nav-item">
					    <a class="btn btn-outline-primary" href="form.php">Cadastrar-se</a>
					</li>
					<li class="nav-item">
					    <a class="btn btn-outline-primary" href="#">Contato</a>
					</li>
				</ul>
			</div>
		</header>
		<hr>
        <!--Ao clicar em uma das opções abaixo, será mostrado um formulário de acordo com o perfil do usuário (pessoa física ou jurídica)-->
        <label>Pessoa Física <input type="radio" id="pf" name="perfil"></label> &nbsp;&nbsp;
        <label>Pessoa Jurídica <input type="radio" id="pj" name="perfil"></label>
        <!--FORM pessoa física-->
        <form action="salvaForm.php" method="post" id="formFisica">
            <div class="form-group">
                <label><input type="text" name="nome" placeholder="Digite seu nome" class="form-control" size="50"></label><br>
                <label><input type="text" name="email" placeholder="Digite seu e-mail" class="form-control" size="50"></label><br>
                <label><input type="text" name="dataNasci" placeholder="Digite sua data de nascimento" class="form-control" size="50"></label><br>
                <label><input type="text" name="cpf" placeholder="Digite seu CPF" class="form-control" size="50"></label><br>
                <label><input type="password" name="senhaPF" placeholder="Digite sua senha" class="form-control" size="50"></label><br>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
        <!--FORM pessoa jurídica-->
        <form action="saveData.php" method="post" id="formJuridica">
            <div class="form-group">
                <label><input type="text" name="nomeEstacionamento" placeholder="Digite o Nome do estacionamento" class="form-control" size="50"></label><br>
                <label><input type="text" name="email" placeholder="Digite o e-mail da empresa" class="form-control" size="50"></label><br>
                <label><input type="text" name="cnpj" placeholder="Digite o CNPJ" class="form-control" size="50"></label><br>
                <label><input type="text" name="endereco" placeholder="Digite o endereço" class="form-control" size="50"></label><br>
                <label><input type="password" name="senhaPJ" placeholder="Digite a senha" class="form-control" size="50"></label><br>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
	</div>

    <script>
        var pf = window.document.getElementById('pf');
        pf.addEventListener('click', clicarFisi);
        var pj = window.document.getElementById('pj');
        pj.addEventListener('click', clicarJuri);

        function clicarFsisi(){

        }
        function clicarJuri(){

        }
    </script>
</body>
</html>
