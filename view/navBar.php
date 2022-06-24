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
        <li class="nav-item">
          <!-- <a class="nav-link disabled" href="#"><?= $_SESSION['nomeUsuario']; ?></a> -->
        </li>  
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <?php
        if ($_SESSION['ad'] == '1') { ?>
          <li class="nav-item mx-2">
            <a class="nav-link text-white" href="./gerenciar_usuarios.php"><i class="fas fa-users-cog"></i> Gerenciar Usuários</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-white" href="./gerenciar_itens.php"><i class="fas fa-list-ul"></i> Gerenciar Painel</a>
          </li>
        <?php
        }
        ?>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="./alterar_senha.php"><i class="fas fa-key"></i> Alterar Senha</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="../controller/sair.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>