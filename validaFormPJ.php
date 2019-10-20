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

    mysqli_set_charset($conexao, "utf8");
    
    $insertTable_endereco = $dbh -> prepare("insert into endereco values (null, '".$nomePJ."', '".$cep."', '".$bairro."', '".$rua."', '".$cidade."', '".$estado."')");
    $insertTable_endereco -> execute();
    
    $insertTable_preco = $dbh -> prepare("insert into preco values (null, '".$nomePJ."', '".$preco_hora."', '".$preco_diario."', '".$preco_semanal."', '".$preco_mensal."', '".$preco_anual."')");
    $insertTable_preco -> execute();

    //possível solucao
    
    $id_endereco = $insertTable_endereco -> $dbh -> lastInsertId();

    $id_preco = $insertTable_preco -> $dbh -> lastInsertId();

    $insertTable_estacionamento = $dbh -> prepare("insert into estacionamento (nome_estacio,CNPJ,senha_estacio,id_endereco1,id_preco1,telefone,email_estacio) values 
    ('".$nomePJ."','".$cnpj."','".$senhaPJ."','".$id_endereco."','".$id_preco."','".$telefone."','".$email."');");

    $insertTable_estacionamento -> execute();

    ?>
    <p><?php echo($id_endereco)?></p>

  
<?php
    if(mysqli_query($conexao, $insertTable_estacionamento)){
      echo  "<script>alert('Gravado com sucesso');</script>";
      //echo  '<script>window.location.href="logar.php"</script>';
    }else{
      echo  "<script>alert('Erro ao gravar');</script>";
      

      echo("<script>console.log(<?php $buscaId_endereco ?>);</script>");
      echo("<script>console.log(<?php $buscaId_preco ?>);</script>");
    }

    if(mysqli_query($conexao, $insertTable_endereco)){
      echo  "<script>alert('Gravado com sucesso');</script>";
      //echo  '<script>window.location.href="logar.php"</script>';
    }else{
      echo  "<script>alert('Erro ao gravar');</script>";
      //echo  '<script>window.location.href="form.php"</script>';
    }

    if(mysqli_query($conexao, $insertTable_preco)){
      echo  "<script>alert('Gravado com sucesso');</script>";
     // echo  '<script>window.location.href="logar.php"</script>';
    }else{
      echo  "<script>alert('Erro ao gravar');</script>";
      //echo  '<script>window.location.href="form.php"</script>';
    }
 ?>
