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
    
    $insertTable_endereco = "insert into endereco values (null, '".$nomePJ."', '".$cep."', '".$bairro."', '".$rua."', '".$cidade."', '".$estado."')";
    
    $insertTable_preco = "insert into preco values (null, '".$nomePJ."', '".$preco_hora."', '".$preco_diario."', '".$preco_semanal."', '".$preco_mensal."', '".$preco_anual."')";

    //possível solucao
    $buscaId_endereco = mysqli_query($conexao, "SELECT id_endereco FROM 'endereco' WHERE rua = $rua");
    $result_endereco = mysqli_query($conexao, $id_endereco);
    $id_endereco = mysqli_fetch_array($result_endereco);

    $buscaId_preco = mysqli_query($conexao, "SELECT id_preco FROM 'preco' WHERE nome_estacio2 = $nomePJ");
    $result_preco = mysqli_query($conexao, $buscaId_preco);
    $id_preco = mysqli_fetch_array($result_preco);

    $insertTable_estacionamento = "insert into estacionamento (nome_estacio,CNPJ,senha_estacio,id_endereco1,id_preco1,telefone,email_estacio) values 
    ('".$nomePJ."','".$cnpj."','".$senhaPJ."','".$id_endereco."','".$id_preco."','".$telefone."','".$email."');";

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
