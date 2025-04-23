<?php
include_once("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/328073035f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <title>Página inicial</title>
</head>
<body>
<nav class="navbar navbar-expand-lg custom-navbar" id="painel-navegacao">
  <div class="container-fluid">
    <nav class="navbar bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" id="logo-gospelChord" alt="logo" height="40">
        </a>
      </div>
    </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Formulário de busca à esquerda -->
        <form class="d-flex me-auto" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisar música" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
          </button>
        </form>
        <!-- Itens à direita -->
        <ul class="navbar-nav ms-auto align-items-center gap-2">
          <li class="nav-item">
            <button class="btn" id="header-botao-premium">Premium <i class="bi bi-bookmark-star-fill"></i></button>
          </li>
          <li class="nav-item dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listas.php">Minhas listas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div id="background">
  <video loop autoplay muted>
    <source src="mp4/violao.mp4" type="video/mp4">
  </video>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>