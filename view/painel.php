<?php

require '../controller/verificarLogin.php';

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
  <link rel="icon" href="../assets/images/rel_logo.png">

  <title>Painel B&A</title>
</head>

<body>

  <?php include './navBar.php'; ?>

  <?php
  $pdo_stmt = $pdo->prepare("SELECT * FROM tb_itens");
  $pdo_stmt->execute();
  $itens = $pdo_stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Painel B&A</h1>
        <div class="text-center">
          <div class="row">
            <?php foreach ($itens as $item) { ?>
              <div class="col-md-4">
                <div class="card text-center m-3 p-2">
                  <a href="<?php echo $item['link']; ?>" class="text-decoration-none" target="_blank">
                    <img src="../assets/images/<?php echo $item['caminho_imagem']; ?>" class="card-img-top img-card">
                    <div class="card-body">
                      <h5 class="card-title text-capitalize"><?php echo $item['nome']; ?></h5>
                    </div>
                  </a>
                </div>
              </div>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>