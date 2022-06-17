<nav class="navbar navbar-expand-lg navbar-dark bg-azul">
  <div class="container-fluid">
    <a class="navbar-brand" href="painel.php">
      <img src="../assets/images/logo_bea.png" alt="" height="50" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        if ($_SESSION['ad'] == '1') { ?>
          <li class="nav-item">
            <a class="nav-item nav-link text-white" href="./gerenciar_usuarios.php">Gerenciar Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link text-white" href="./gerenciar_itens.php">Itens do painel</a>
          </li>
        <?php
        }
        ?>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link disabled" href="#"><?= $_SESSION['nomeUsuario']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link text-white" href="../controller/sair.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>