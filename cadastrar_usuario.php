<?php
include_once("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cadastro1.css">
  <title>Cadastrar Usuário</title>
</head>
<body>
    <div id="background">
      <video loop autoplay muted>
        <source src="mp4/cadastrar.mp4" type="video/mp4">
      </video>
    </div>
<!-- CABEÇALHO -->
      <div class="custom-container">
        <div id="cabecalho">
          <div id="conteudo-cabecalho">
            <h1>Cadastrar usuário</h1>
          </div>
        </div>
<!-- COLUNA DO FORMULÁRIO -->
      <div class="coluna-formulario">
        <div class="coluna-formulario">
          <form class="form-login" action="php/cadastrarUsuario.php" method="POST" onsubmit="return validarFormulario();">
<!-- Seus campos continuam os mesmos, só precisa adicionar 'name' em cada input -->
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
              <label for="celular">Celular</label>
              <input type="tel" id="celular" name="celular" placeholder="Digite seu celular">
            </div>
            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade">
            </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" id="estado" name="estado" placeholder="Digite seu estado">
            </div>

            <div class="form-actions">
              <button type="submit" class="custom-save-button">Salvar</button>
              <button type="button" class="custom-cancel-button" onclick="voltarIndex()">Retornar</button>
            </div>
          </form>
        </div>
      </div>
    <script src="js/functions.js"></script>
</body>
</html>