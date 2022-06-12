<?php

require '../controller/verifyLogin.php';
    
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- browser logo -->
  <link rel="icon" href="../assets/images/email.png">

  <title>Painel B&A</title>
</head>

<body>

  <nav class="navbar bg-azul">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../assets/images/logo_bea.png" alt="" height="50" class="d-inline-block align-text-top">
      </a>
      <div>
        <a class="nav-item nav-link" href="#">
          <img src="../assets/images/user.png" alt="" height="50" class="d-inline-block align-text-top">
        </a>
      </div>
      <div>
        <a class="nav-item nav-link text-white" href="./gerenciar_usuarios.php">Gerenciar Usuários</a>
      </div>
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link text-white" href="../controller/sair.php">Sair</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Painel B&A</h1>
        <div class="text-center">
          <div class="row">
            <div class="col m-5"> <a href="https://cloud.beacomercial.com/" target="_blank"> <img src="../assets/images/email.png" width="60px" alt="" srcset="">Cloud B&A </a> </div>
            <div class="col m-5"> <a href="https://appsv.solucoesmaxima.com.br/" target="_blank"> <img src="../assets/images/gdrive.png" width="60px" alt="" srcset="">Max Soluções </a> </div>
            <div class="col m-5"> <a href="https://webmail-seguro.com.br/beacomercial.com/" target="_blank"> <img src="../assets/images/gmail.png" width="60px" alt="" srcset="">e-mail </a> </div>
          </div>
          <div class="row">
            <div class="col m-5"> <a href="http://fluig.beacomercial.com:9080/" target="_blank"> <img src="../assets/images/youtube.png" width="60px" alt="" srcset="">Fluig </a> </div>
            <div class="col m-5"> <a href="https://myaudit.pcinformatica.com.br/" target="_blank"> <img src="../assets/images/email.png" width="60px" alt="" srcset="">MyAudit </a> </div>
            <div class="col m-5"> <a href="https://canaldaetica.beacomercial.com/" target="_blank"> <img src="../assets/images/email.png" width="60px" alt="" srcset="">Canal de Ética </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>