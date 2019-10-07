<?php
    $nomePF = $_POST['nomePF'];
    $email = $_POST['emailPF'];
    $dataNasci = $_POST['dataNasci'];
    $cpf = $_POST['cpf'];
    $senhaPF = $_POST['senhaPF'];

    //Valida o email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo '<script>alert("email válido")</script>';
    }else {
      echo '<script>alert("email não válido")</script>';
    }
    //Delimitando a TIMEZONE, linha importante para fazer comparativos de datas a partir do php 6
    date_default_timezone_set('America/Sao_Paulo');
    $data = $_POST['dataNasci'];
    $sysData = date("Y-m-d");
    $idade = strtotime($sysData) - strtotime($data);
    // 568025136 segundos equivale a 18 anos
    if($data < $sysData && $idade >= 568025136){
        echo '<script>alert("DATA VÁLIDA e MAIOR DE IDADE")</script>';
        echo  '<script>window.location.href="logar.php"</script>';
    }
    else if($data < $sysData && $idade < 568025136){
      echo '<script>alert("DATA VÁLIDA e MENOR DE IDADE")</script>';
      echo  '<script>window.location.href="form.php"</script>';
    }else{
      echo '<script>alert("DATA INVÁLIDA")</script>';
      echo '<script>window.location.href="form.php"</script>';
    }

    include_once("conexao.php");

    $insert_bd = "insert into pf values (null, '".$nomePF."', '".$email."', '".$dataNasci."', '".$cpf."', '".$senhaPF."')";
    if(mysqli_query($conexao, $insert_bd)){
      echo  "<script>window.alert('Gravado com sucesso');</script>";
    }else{
      echo  "<script>window.alert('Erro ao gravar');</script>";
    }
 ?>
