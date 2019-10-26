<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include_once("conexao.php");

    $querySelect = "select email, senha_client from cliente";

    $execucao = mysqli_query($conexao, $querySelect);

    $dados = mysqli_fetch_array($execucao);

    if($email == $dados['email'] && $senha == $dados['senha_client']){
        session_start();
        $_SESSION['email'] = $dados['email'];
        echo "<script>alert('Logado com Sucesso!')</script>";
        echo "<script> window.location.href = 'mapa.php'</script>";
    }else{
        echo "<script>alert('Erro ao logar-se.')</script>";
        echo "<script> window.location.href = 'logar.php'</script>";
    }
    
?>