<?php
session_start();
include_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) === 1) {
        $usuario = mysqli_fetch_assoc($resultado);

        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_email'] = $usuario['email'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Email ou senha incorretos.'); window.location.href='index.php';</script>";
    }
}
?>
