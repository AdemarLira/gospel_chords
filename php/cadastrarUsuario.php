<?php
    include_once('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nome = trim($_POST["nome"]);
      $email = trim($_POST["email"]);
      $senha = trim($_POST["senha"]);
      $celular = trim($_POST["celular"]);
      $cidade = trim($_POST["cidade"]);
      $estado = trim($_POST["estado"]);

    // Criptografar senha (opcional mas recomendado)
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha, celular, status, cidade, estado, tipo_cadastro, datahora_cadastro) 
            VALUES ('$nome', '$email', '$senhaCriptografada', '$celular', 'ativo', '$cidade', '$estado', 'free', now())";

    if (mysqli_query($conn, $sql)) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: ../index.html");
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }
  }
?>
  
<script src="js/functions.js"></script>  