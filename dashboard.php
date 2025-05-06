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
    <link rel="icon" type="image/x-icon" href="./img/logo_amarela.png">
    <script src="https://kit.fontawesome.com/328073035f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
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
            <img src="img/logo_azul.png" id="logo-gospelChord" alt="logo" height="40">
          </a>
        </div>
      </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- TEMAS DARK LIGHT -->
      <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
          <input type="checkbox" id="checkbox" />
          <div class="slider round"></div>
        </label>
      </div>
<!-- BUSCA musicas -->
      <form class="d-flex me-auto" role="search" id="pesquisa-musica">
        <input class="form-control me-2" type="search" placeholder="Pesquisar música" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
          <i class="fa-solid fa-magnifying-glass fa-sm"></i>
        </button>
      </form>
      <div>
        <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#modal-upload">
            Enviar cifra
        </button>
      </div>
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
              
              <li><a class="dropdown-item" href="https://wa.me/83998603238" target="_blank" id="pedir-cifra">Pedir cifra</a></li>
              <br>
              <li><a class="dropdown-item" href="index.html" id="sair">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- MODAL ENVIAR CIFRA -->
  <div class="modal fade" id="modal-upload" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Enviar Cifra</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        
        <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Música</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Autor</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Versão</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
            <label class="form-check-label" for="radioDefault1">
              Simplificada
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
            <label class="form-check-label" for="radioDefault2">
              Padrão
            </label>
          </div>
          <br>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <h1>TESTE</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/functions.js"></script>
  <script>
    fetch('api/usuario.php')
      .then(response => response.json())
      .then(data => {
        const imagem = data.imagem || 'uploads/images.jpg';
        document.getElementById('imagem-perfil').src = imagem;
      });

      document.addEventListener('DOMContentLoaded', (event) => {
        const checkbox = document.getElementById('checkbox');
        const body = document.body;

        checkbox.addEventListener('change', () => {
            if (checkbox.checked){
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
            } else{
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
            }
        });

    body.classList.add('light-mode');})
  </script>
</body>
</html>