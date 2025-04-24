<?php 
// session_start();
// include_once('conexao.php');

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $email = trim($_POST["email"]);
//     $senha = trim($_POST["senha"]);

//     $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
//     mysqli_stmt_execute($stmt);
//     $resultado = mysqli_stmt_get_result($stmt);

//     if (mysqli_num_rows($resultado) === 1) {
//         $usuario = mysqli_fetch_assoc($resultado);

//         $_SESSION['usuario_id'] = $usuario['id'];
//         $_SESSION['usuario_email'] = $usuario['email'];

//         header("Location: dashboard.php");
//         exit();
//     } else {
//         echo "<script>alert('Email ou senha incorretos.'); window.location.href='index.html';</script>";
//     }
// }
?> 
