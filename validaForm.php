<?php
    //Valida o email
    $email = $_POST['email'];
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
        echo '<script>alert("DATA VÁLIDA")</script>';
        echo  '<script>alert("MAIOR DE IDADE")</script>';
    }
    else if($data < $sysData && $idade < 568025136){
      echo '<script>alert("DATA VÁLIDA")</script>';
      echo '<script>alert("MENOR DE IDADE")</script>';
      //header('Location: /form.php');
    }else{
      echo '<script>alert("DATA INVÁLIDA")</script>';
    }
 ?>
