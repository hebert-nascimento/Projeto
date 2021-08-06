<?php
session_start();
include 'Conexao.php';
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$sql = "SELECT * FROM formulario WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION["id"] = $row["id"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["tipo"] = $row["tipo"];
    $_SESSION["senha"] = $row["senha"];
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["TEMPO"] = time();
    header("location: painel.php");
} else {
    $msg = "Login ou senha inválidos.";
    header("Location: index.php?msg=".$msg."&class=danger");
}
mysqli_close($conn);
?>