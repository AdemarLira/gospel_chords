<?php
  include_once("api/conexao.php");
  session_start();
  
  // if (!isset($_SESSION['usuario_id'])) {
  //   header("Location: index.php?erro=naoautorizado");
  //   exit();
  // }

  $imagemPerfil = isset($_SESSION['img']) && !empty($_SESSION['img']) 
    ? 'assets/' . basename($_SESSION['img']) 
    : 'assets/images.jpg';

    
  // var_dump($_SESSION['img']);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/logo_amarela.png">
    <script src="https://kit.fontawesome.com/328073035f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <title>Página inicial</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
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
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
      </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- TEMAS DARK LIGHT -->
      <div class="theme-switch-wrapper me-3">
        <label class="theme-switch" for="checkbox">
          <input type="checkbox" id="checkbox" />
          <div class="slider round"></div>
        </label>
      </div>
<!-- BUSCA musicas -->
      <form class="d-flex me-auto my-2" role="search" id="pesquisa-musica">
        <input class="form-control me-2" type="search" placeholder="Pesquisar música" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
          <i class="fa-solid fa-magnifying-glass fa-sm"></i>
        </button>
      </form>
      <div>
        <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#modal-upload">
            Enviar cifra
        </button>
        <button class="btn" id="header-botao-premium" onclick="verificarPlanos()">
          Premium 
          <i class="bi bi-bookmark-star-fill"></i>
        </button>
      </div>
<!-- Itens à direita -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item me-2">
          <a class="nav-link" href="#" id="btn-listas">Minhas listas</a>
        </li>
        <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <img src="<?php echo htmlspecialchars($imagemPerfil); ?>" alt="Perfil" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="meu_perfil.php">Meu perfil</a></li>
              <li><a class="dropdown-item" href="#" id="btn-assinaturas">Minhas assinaturas</a></li>
              
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

  <!-- Conteúdo principal -->
    <!-- ASSINATURAS -->
    <div id="assinaturas" class="container mt-4" style="display: none;">
     <h2 class="mb-4">Assinaturas</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Free</h5>
              <p class="card-text">Recursos disponíveis: </p>
              <p class="card-text"><small class="text-muted">R$0,00</small></p>
            </div>
            <div class="card-footer d-flex justify-content-between"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- LISTAS -->
   <div id="listas-musicas" class="container mt-4" style="display: none;">
    <h2 class="txt-body">Minhas listas</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Nome da Lista</h5>
              <p class="card-text">Autor: </p>
              <p class="card-text"><small class="text-muted">Versão: Simplificada</small></p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <a href="#" class="btn btn-sm btn-outline-primary">Ver Cifras</a>
              <button class="btn btn-sm btn-outline-danger">Excluir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/functions.js"></script>
<script>
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


    // ALTERNACIA no conteudo do body
    function mostrarPainel(id) {
    const paineis = ['listas-musicas', 'assinaturas'];
    paineis.forEach(painel => {
      document.getElementById(painel).style.display = (painel === id) ? 'block' : 'none';
    });
  }

  function fecharPainel(id) {
    document.getElementById(id).style.display = 'none';
  }

  // Adiciona os listeners ao carregar o DOM
  document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('btn-listas').addEventListener('click', (e) => {
      e.preventDefault();
      mostrarPainel('listas-musicas');
    });

    document.getElementById('btn-assinaturas').addEventListener('click', (e) => {
      e.preventDefault();
      mostrarPainel('assinaturas');
    });
  });
</script>
</body>
</html>