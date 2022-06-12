<?php

require 'conexao.php';
require '../model/Usuario.class.php';

$usuario = new Usuario();

if($usuario->login($_POST['nome'], $_POST['senha']) == true){
    header('Location: ../view/painel.php');
}else{
    header('Location: ../index.php?msg=erro');
}
