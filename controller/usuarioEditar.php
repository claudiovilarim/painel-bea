<?php

require 'conexao.php';
require '../model/Usuario.class.php';

$usuario = new Usuario();

$usuario->editar($_POST['id'], $_POST['nome'], $_POST['senha']);

header('Location: ../view/gerenciar_usuarios.php');
