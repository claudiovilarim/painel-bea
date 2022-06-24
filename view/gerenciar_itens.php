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

  <?php
  if ($_GET['error'] == '1') {
    echo '<div class="alert alert-danger" role="alert">
    <strong>Erro!</strong> Por favor, envie uma imagem com menos de 10MB.
    </div>';
  }
  ?>
  <?php
  if ($_GET['error'] == '2') {
    echo '<div class="alert alert-danger" role="alert">
    <strong>Erro!</strong> Erro ao enviar arquivo.
    </div>';
  }
  ?>
  <?php
  if ($_GET['error'] == '3') {
    echo '<div class="alert alert-danger" role="alert">
    <strong>Erro!</strong> Extensão do arquivo não é permitida. Utilize JPG ou PNG.
    </div>';
  }
  ?>

  <div class="container">
    <h2>Lista de itens</h2>
    <a href="./item_criar.php" class="btn btn-success">Adicionar item <i class="fas fa-plus"></i></a>
    <?php
    $pdo_stmt = $pdo->prepare("SELECT * FROM tb_itens");
    $pdo_stmt->execute();
    $itens = $pdo_stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="row justify-content-center">
      <div class="border m-4 p-4" style="max-width: 980px;">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($itens as $item) { ?>
              <tr>
                <td><?php echo $item['nome']; ?></td>
                <td><img src="../assets/images/<?= $item['caminho_imagem']; ?>" width="30px" srcset="">  </td>
                <td><?php echo $item['admin'] == 1 ? 'Administrador' : ''; ?></td>
                <td>
                  <a href="./item_editar.php?id=<?php echo $item['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                  <a href="./item_excluir.php?id=<?php echo $item['id']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                </td>
              </tr>
            <?php } ?>
        </table>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>