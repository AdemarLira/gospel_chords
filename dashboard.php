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
  <title>Página inicial</title>
</head>
<body>
  <header class="header">
    <div>
      <div class="header-pesquisa">
        <form action="" class="header-pesquisa1" id="header-form">
          <img src="img/logo.png" id="logo-gospelChord">
          <label for="js-header-pesquisa" class="hidden-text"></label>
          <input name="pesquisar" id="js-header-pesquisa" type="text" placeholder="Qual música você deseja?">
          
          <!-- Botão de busca com ícone -->
          <button type="submit" class="header-botao-pesquisa"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
          <button class="header-botao-premium">Premium <i class="fa-regular fa-star"></i></button>
        </form>
      </div>
    </div>
  </header>
  <div id="background">
    <video loop autoplay muted>
      <source src="mp4/violao.mp4" type="video/mp4">
    </video>
  </div>
</body>
</html>
