<?php

require 'conexao.php';
require '../model/Itens.class.php';

$item = new Itens();

$item->excluir($_GET['id']);

header('Location: ../view/gerenciar_itens.php');
