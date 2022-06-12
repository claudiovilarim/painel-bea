<?php

require 'conexao.php';
require '../model/Usuario.class.php';

$usuario = new Usuario();

if(isset($_POST['administrador'])){
  $isAdmin = '1';
}else{
  $isAdmin = '0';
}
$usuario->criar($_POST['nome'], $_POST['senha'], $isAdmin);

header('Location: ../view/gerenciar_usuarios.php');