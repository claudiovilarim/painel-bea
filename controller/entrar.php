<?php

require 'conexao.php';
require '../model/Usuario.class.php';

$usuario = new Usuario();

$usuario->login($_POST['nome'], $_POST['senha']);

header('Location: ../view/painel.php');
