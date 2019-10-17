<?php
    $nomePJ = $_POST['nomePJ'];
    $email = $_POST['emailPJ'];
    $telefone = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $senhaPJ = $_POST['senhaPJ'];

    $preco_hora = $_POST['preco_hora'];
    $preco_diario = $_POST['preco_dia'];
    $preco_semanal = $_POST['preco_semana'];
    $preco_mensal = $_POST['preco_mes'];
    $preco_anual = $_POST['preco_ano'];

    //Valida o email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo '<script>alert("email válido")</script>';
    }else {
      echo '<script>alert("email não válido")</script>';
    }
    
    include_once("conexao.php");

    $insert_bd = "insert into estacionamento values (null, '".$nomePJ."', '".$cnpj."', '".$senhaPJ."', null, null, '".$telefone."', '".$email."')";

    $insert_bd = "insert into endereco values (null, '".$nomePJ."', '".$cep."', '".$bairro."', '".$rua."', '".$cidade."', '".$estado."')";
    
    $insert_bd = "insert into preco values (null, '".$preco_hora."', '".$preco_diario."', '".$preco_semanal."', '".$preco_mensal."', '".$preco_anual."')";

    if(mysqli_query($conexao, $insert_bd)){
      echo  "<script>alert('Gravado com sucesso');</script>";
      echo  '<script>window.location.href="logar.php"</script>';
    }else{
      echo  "<script>alert('Erro ao gravar');</script>";
      echo  '<script>window.location.href="form.php"</script>';
    }
 ?>
