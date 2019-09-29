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
    $sysData = date("Y/m/d");
    $idade = date_diff(strtotime($data), strtotime($sysData));// date diff pega a diferença da tada em dias
    //$teste = date("Y/m/d");
    //echo '<script>alert('.($data-$teste).')</script>';
    if(strtotime($data) < strtotime($sysData) && $idade >= 6570){
        echo '<script>alert("DATA VÁLIDA")</script>';
        echo '<script>alert("MAIOR DE IDADE")</script>';
        header('Location: /logar.php');
    }else if(strtotime($data) > strtotime($sysData) && $idade < 6570){
      echo '<script>alert("MENOR DE IDADE")</script>';
      echo '<script>alert("DATA INVÁLIDA")</script>';
      header('Location: /form.php');
    }
 ?>
