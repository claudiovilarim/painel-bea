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
    <h2>Criar item</h2>
    <form action="../controller/itemCriar.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="nome" class="mt-2">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" required>
        <label for="link" class="mt-2">Link</label>
        <input type="text" class="form-control" id="link" name="link" autocomplete="off" required>
        <label for="imagem" class="mt-2">Imagem</label>
        <input type="file" class="form-control mt-2" id="imagem" name="imagem" required>

        <button type="submit" class="btn btn-primary mt-3">Confirmar</button>
      </div>
    </form>
  </div>

  <script>
    // disable button submit after submit
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      document.querySelector('button').disabled = true;
      document.querySelector('form').submit();
    });
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>