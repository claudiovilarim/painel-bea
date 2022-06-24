<?php

require 'conexao.php';
require '../model/Usuario.class.php';

$usuario = new Usuario();

if(isset($_POST['senhaAtual']) && isset($_POST['novaSenha'])){
  $usuario->alterarSenha($_POST['id'], $_POST['senhaAtual'], $_POST['novaSenha']);
}

