<?php
include_once("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  integrity="sha512-p3V5+YdK+zZWR1HjY9N4+r6hj+hcyVhr9F7IjIadPRl+1kD2P2G+vZpZyTymgSg24dUU90ZG2IR+1z6uXK+X0A=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
  <link rel="stylesheet" href="css/dashboard.css">
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
          <button type="submit" class="header-botao-pesquisa"><i class="fa-solid fa-magnifying-glass"></i></button>
          <button class="header-botao-premium">Premium</button>
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
