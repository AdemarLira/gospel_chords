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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="img/logo.png" id="logo-gospelChord" alt="logo" height="40">
      </a>
    </div>
  </nav>
    <img src=>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-underline">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      <button class="header-botao-premium">Premium <i class="bi bi-bookmark-star-fill"></i></button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Qual música você deseja?" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
      </form>
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