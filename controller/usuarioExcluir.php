<?php

require 'conexao.php';
require '../model/Usuario.class.php';

$usuario = new Usuario();

$usuario->excluir($_GET['id']);

header('Location: ../view/listarUsuarios.php');
