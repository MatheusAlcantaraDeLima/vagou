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
    //$teste = date("Y/m/d");
    //echo '<script>alert('.($data-$teste).')</script>';
    if($data < $sysData){
        echo '<script>alert("DATA VÁLIDA")</script>';
        //header('Location: /logar.php');
        echo  var_dump($data);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo var_dump($sysData);
    }else{
      echo '<script>alert("DATA INVÁLIDA")</script>';
      //header('Location: /form.php');
    }
 ?>
