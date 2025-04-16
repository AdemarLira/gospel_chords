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
           <form class="form-login">
            <h3 class="mb-4">Insira seus dados</h3>
              <div class="form-row">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" placeholder="Digite seu e-mail">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" id="senha" placeholder="Digite sua senha">
                </div>
                <div class="form-group">
                  <label for="celular">Celular</label>
                  <input type="tel" id="celular" placeholder="Digite seu celular">
                </div>
                <div class="form-group">
                  <label for="cidade">Cidade</label>
                  <input type="text" id="cidade" placeholder="Digite sua cidade">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="estado">Estado</label>
                  <input type="text" id="estado" placeholder="Digite seu estado">
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="custom-save-button" onclick="salvarCadastro()">Salvar</button>
                <button type="button" class="custom-cancel-button" onclick="voltarIndex()">Retornar</button>
              </div>
          </form>
        </div>
      </div>
    <script src="js/functions.js"></script>
</body>
</html>