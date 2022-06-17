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
    <h2>Lista de usuários</h2>
    <a href="./usuario_criar.php" class="btn btn-success">Adicionar Usuário <i class="fas fa-plus"></i></a>
    <?php
    $pdo_stmt = $pdo->prepare("SELECT * FROM tb_usuarios");
    $pdo_stmt->execute();
    $usuarios = $pdo_stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="row justify-content-center">
      <div class="border m-4 p-4" style="max-width: 980px;">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col"></th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
              <tr>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['admin'] == 1 ? 'Administrador' : ''; ?></td>
                <td>
                  <a href="./usuario_editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary">Editar</a>
                  <a href="./usuario_excluir.php?id=<?php echo $usuario['id']; ?>" class="btn btn-danger">Excluir</a>
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