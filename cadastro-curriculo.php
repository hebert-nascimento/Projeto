<?php 
	require_once("Conexao.php");

	$nome = $_POST['nome_cur'];
	$sobrenome = $_POST['sobrenome_cur'];
	$sexo = $_POST['sexo'];
	$estado_civil = $_POST['estado_civil'];
	$curso = $_POST['curso'];
	$instituicao = $_POST['instituicao'];
	$turno = $_POST['turno'];
	$periodo = $_POST['periodo'];
	$texto = $_POST['texto'];

	$sql = "INSERT INTO curriculo (nome_cur,sobrenome_cur,sexo,estado_civil,curso,instituicao,turno,periodo,texto) VALUES('$nome','$sobrenome','$sexo','$estado_civil','$curso','$instituicao','$turno','$periodo','$texto')";
	$query = mysqli_query($conn, $sql);
	if (mysqli_insert_id($conn)) {
    $msg = "Currículo cadastrado com sucesso!";
    header("Location: add.php?msg=".$msg."&class=success");
} else {
    $msg = "Erro ao cadastrar!".mysql_errno();
    header("Location: add.php?msg=".$msg."&class=danger");
}
?>