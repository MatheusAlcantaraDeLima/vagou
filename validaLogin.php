<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include_once("conexao.php");

    $querySelect = "select email, senha from pf";

    $execucao = mysqli_query($conexao, $querySelect);

    while($dados = mysqli_fetch_array($execucao)){
        if($email == $dados['email'] && $senha == $dados['senha']){
            echo "<script>alert('Logado com Sucesso!')</script>";
            echo "<script> window.location.href = 'mapa.php'</script>";
        }
    }
?>