<?php
include_once("api/conexao.php");
session_start();
$imagemPerfil = isset($_SESSION['imagemPerfil']) ? $_SESSION['imagemPerfil'] : 'uploads/images.jpg';
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
  <!-- HEADER -->
<nav class="navbar navbar-expand-lg custom-navbar" id="painel-navegacao">
  <div class="container-fluid">
    <nav class="navbar transparent-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" id="logo-gospelChord" alt="logo" height="40">
        </a>
      </div>
    </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <!-- BUSCA musicas -->
      <form class="d-flex me-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar música" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
          <i class="fa-solid fa-magnifying-glass fa-sm"></i>
        </button>
      </form>
  <!-- Itens à direita -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <button class="btn" id="header-botao-premium" onclick="verificarPlanos()">Premium <i class="bi bi-bookmark-star-fill"></i></button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listas.php" id="listas">Minhas listas</a>
        </li>
        <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?php echo $imagemPerfil; ?>" alt="Perfil" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="meu_perfil.php">Meu perfil</a></li>
              <li><a class="dropdown-item" href="assinaturas.php">Minhas assinaturas</a></li>
              <li><a class="dropdown-item" href="#" id="pedir-cifra">Pedir cifra</a></li>
              <br>
              <li><a class="dropdown-item" href="index.html" id="sair">Sair</a></li>
            </ul>
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
  <script src="js/functions.js"></script>
  <script>
    fetch('api/usuario.php')
      .then(response => response.json())
      .then(data => {
        const imagem = data.imagem || 'uploads/images.jpg';
        document.getElementById('imagem-perfil').src = imagem;
      });
  </script>
</body>
</html>