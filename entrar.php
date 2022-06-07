<?php

require('conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Fazendo login
if(isset($_POST['nome']) && isset($_POST['senha'])) 
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $pdo_statement = $pdo->prepare("SELECT * FROM tb_usuarios WHERE nome = '$nome' AND senha = '$senha'"); // prepara a query para ser executada 
    $pdo_statement->execute(); // executa a query
    $result = $pdo_statement->fetchAll(); // armazena o resultado da query

    if (count($result) > 0) {
        //$_SESSION['login'] = true;
        //$_SESSION['email'] = $result[0]['email'];
        //$_SESSION['senha'] = $result[0]['senha'];

        header('Location: painel.php');
    } else {
        echo '<script>alert("Usuário ou Senha incorreta!");</script>';
        header('Location: index.php?msg=erro');
    }
}