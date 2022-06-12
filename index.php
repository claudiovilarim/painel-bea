<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">

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
    <div class="row justify-content-center">
      <div class="border m-4 p-4" style="max-width: 380px;">
        <form action="./controller/entrar.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
            <?php 
            if(isset($_GET['msg']) && $_GET['msg'] == "erro"){ ?>
              <div class="text-danger">Usuário/Senha incorretos</div>
            <?php } ?>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>