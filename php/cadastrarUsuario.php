<?php
    include_once('php/conexao.php');

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');
    
    
    if (empty($nome) || empty($email) || empty($senha)){
      echo "Todos os campos são obrigatórios";
    }
  echo '<br>';
   
   if ($email === false) {
     echo "E-mail inválido!";
    }
  echo '<br>';
      
      if (strlen($senha) < 8) {
        echo "A senha deve ter pelo menos 8 caracteres!";
      }
  echo '<br>';

    // Verificação se o email já existe no banco de dados
    $query = "SELECT id FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Não foi possível concluir o cadastro pois o email inserido já possui um cadastro!";
        $stmt->close();
        $conn->close();
        exit();
    } 

    $stmt->close();

    // Inserção de segurança nas senhas
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Preparação e execução da inserção no banco de dados
    $stmt = $conn->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
  ?>
  
  <script src="js/functions.js"></script>  