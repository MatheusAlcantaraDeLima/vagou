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

    //Valida o email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo '<script>alert("email válido")</script>';
    }else {
      echo '<script>alert("email não válido")</script>';
    }
    
    include_once("conexao.php");

    $insert_bd = "insert into pj values (null, '".$nomePJ."', '".$emailPJ."', '".$telefone."', '".$cnpj."', '".$cep."', '".$rua."', '".$bairro."', '".$cidade."', '".$estado."', '".$senhaPJ."')";
    if(mysqli_query($conexao, $insert_bd)){
      echo  "<script>alert('Gravado com sucesso');</script>";
      echo  '<script>window.location.href="logar.php"</script>';
    }else{
      echo  "<script>alert('Erro ao gravar');</script>";
      echo  '<script>window.location.href="form.php"</script>';
    }
 ?>
