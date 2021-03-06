<?php

require 'conexao.php';
require '../model/Itens.class.php';

$item = new Itens();

if(isset($_POST['nome']) && isset($_POST['link'])){
  
  $fileName = $_FILES['imagem']['name'];
  $fileTmpName = $_FILES['imagem']['tmp_name'];
  $fileSize = $_FILES['imagem']['size'];
  $fileError = $_FILES['imagem']['error'];
  $fileType = $_FILES['imagem']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize < 20000000){ 
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = '../assets/images/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $item->criar($_POST['nome'], $fileNameNew, $_POST['link']);
        header("Location: ../view/gerenciar_itens.php?success=1");
      }else{
        header("Location: ../view/item_criar.php?error=1");
      }
    }else{
      header("Location: ../view/gerenciar_itens.php?error=2");
    }
  }else{
    header("Location: ../view/gerenciar_itens.php?error=3");
  }
}
