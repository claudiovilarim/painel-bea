<?php

  $nomeUsuario =  $_POST['nome'];
  $senha =        $_POST['senha'];

 
  if($nomeUsuario == "claudio" && $senha == "123"){ 
    
  }else{ 
    header('Location: index.php?msg=erro');
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- browser logo -->
    <link rel="icon" href="./assets/images/email.png">

    <title>Painel B&A</title>
  </head>
  <body>
    
  <nav class="navbar bg-azul">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./assets/images/logo_bea.png" alt="" height="50" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Painel B&A</h1>
        <div class="text-center">
          <div class="row">
            <div class="col m-5"> <a href="https://www.google.com.br/" target="_blank" > <img src="./assets/images/email.png" width="60px" alt="" srcset=""> </a> </div>
            <div class="col m-5"> <a href="https://www.google.com.br/" target="_blank"> <img src="./assets/images/gdrive.png" width="60px" alt="" srcset=""> </a> </div>
            <div class="col m-5"> <a href="https://www.google.com.br/" target="_blank"> <img src="./assets/images/gmail.png" width="60px" alt="" srcset=""> </a> </div>
          </div>
          <div class="row">
            <div class="col m-5"> <a href="https://www.google.com.br/" target="_blank"> <img src="./assets/images/youtube.png" width="60px" alt="" srcset=""> </a> </div>
            <div class="col m-5"> <a href="https://www.google.com.br/" target="_blank"> <img src="./assets/images/email.png" width="60px" alt="" srcset=""> </a> </div>
            <div class="col m-5"> <a href="https://www.google.com.br/" target="_blank"> <img src="./assets/images/email.png" width="60px" alt="" srcset=""> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>