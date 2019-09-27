<?php
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo '<script>alert("email válido")</script>';
    }else {
      echo '<script>alert("email não válido")</script>';
    }
    $data = $_POST['dataNasci'];
    //$teste = date("Y/m/d");
    //echo '<script>alert('.($data-$teste).')</script>';
    if($data >= date("Y/m/d")){
        echo '<script>alert("DATA VÁLIDA")</script>';
    }else{
      echo '<script>alert("DATA INVÁLIDA")</script>';
    }
 ?>
