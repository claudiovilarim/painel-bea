<?php

require '../controller/verificarLogin.php';
require '../controller/verificarAdmin.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- Fotn Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- browser logo -->
  <link rel="icon" href="../assets/images/rel_logo.png">

  <title>Painel B&A</title>
</head>

<body>

  <?php include './navBar.php'; ?>

  <div class="container">
    <h2>Editar usuário</h2>
    <?php
    $pdo_stmt = $pdo->prepare("SELECT * FROM tb_usuarios WHERE id = ?");
    $pdo_stmt->execute([$_GET['id']]);
    $result = $pdo_stmt->fetchAll();
    ?>
    <form action="../controller/usuarioEditar.php?id=<?= $_GET['id'] ?>" method="POST">
      <div class="form-group">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $result[0]['nome'] ?>" required>
        <label for="senha">Nova senha</label>
        <input type="text" class="form-control" id="senha" name="senha" required>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="administrador" name="administrador">
          <label class="form-check-label" for="administrador">Administrador</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Confirmar</button>
      </div>
    </form>

  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>