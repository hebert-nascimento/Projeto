<?php
require_once 'Conexao.php';
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);


$query_usuario = "INSERT INTO formulario (email, senha, nome, sobrenome, celular, telefone, endereco, numero, bairro, cidade, estado,tipo) VALUES ('$email','$senha','$nome','$sobrenome','$celular','$telefone','$endereco','$numero','$bairro','$cidade','$estado',3)";
mysqli_query($conn, $query_usuario);
if (mysqli_insert_id($conn)) {
    $msg = "Usuário cadastrado com sucesso.";
    header("Location: index.php?msg=".$msg."&class=success");
} else {
    $msg = "Erro ao cadastrar usuário.";
    header("Location: index.php?msg=".$msg."&class=danger");
}
?>








