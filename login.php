<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/telaLogin.css">
  <title>TASK List</title>
</head>

<body>
  <!-- CABEÇALHO -->
  <div class="custom-container">
    <div id="cabecalho">
      <div id="conteudo-cabecalho">
        <h1>Tasks List</h1>
        <img src="./img/logo.png" alt="Logo">
      </div>
    </div>
    <!-- INSERÇÃO DAS INFORMAÇÕES DE LOGIN -->
    <div class="custom-login">
      <div id="background">
        <video loop autoplay muted>
          <source src="backgroundVideo.mp4" type="video/mp4">
        </video>
      </div>
      <h2>Login</h2><br>
      <input type="email" class="inputs" placeholder="Insira seu email..." required><br>
      <input type="password" class="inputs" placeholder="Insira sua senha..." required><br>
      <button type="submit" value="entrar" id="entrar">Entrar</button>
      <a href="#" id="atualizar-senha" onclick="atualizarSenha()">Esqueceu a senha?</a><br>
      <a href="#" id="link-cadastrar" onclick="criarCadastro()">Ainda não possui cadastro?</a>
    </div>
  </div>
  </div>

  <div class="modal fade" id="senhaModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cadastroModalLabel">Esqueceu sua senha?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="redefinirSenha.php">
            <div class="form-group">
              <label for="email">Email</label>
              <input type=" email" class="form-control mb-2" id="email" placeholder="Insira seu email..." name="email" required>
            </div>
        </div>
        <div class="form-group">
          <button type="submit" class="custom-senha-button" onclick="atualizarSenha()">Redefinir senha</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL DE CADASTRO -->
  <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cadastroModalLabel">Cadastro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="cadastrar.php">
            <div class="form-group">
              <label for="nome">Nome completo</label>
              <input type="text" class="form-control mb-2" id="nome" placeholder="Nome completo" name="nome" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type=" email" class="form-control mb-2" id="email" placeholder="Insira seu email..." name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control mb-2" id="senha" placeholder="Insira sua senha..." name="senha" required>
            </div>
        </div>
        <div class="form-group">
          <button type="submit" class="custom-save-button" onclick="salvarCadastro()">Salvar</button>
          <button type="button" class="custom-cancel-button" data-dismiss="modal">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function criarCadastro() {
      $('#cadastroModal').modal('show');
    }

    function atualizarSenha() {
      $('#senhaModal').modal('show');
    }

    function salvarCadastro() {
      alert('Cadastro criado com sucesso');
    }
  </script>
</body>

</html>