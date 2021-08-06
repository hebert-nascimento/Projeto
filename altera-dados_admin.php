<?php
    session_start();
    include_once 'Conexao.php';
	$NVemail_admin = $_POST['NVemail_admin'];
	$NVnome_admin = $_POST['NVnome_admin'];
	$NVsobrenome_admin = $_POST['NVsobrenome_admin'];

	$alt = "UPDATE formulario SET email = '".$NVemail_admin."', nome = '".$NVnome_admin.", sobrenome = '".$NVsobrenome_admin."' 'WHERE id = ".$_SESSION["id"];
	if(mysqli_query($conn, $alt)){
				// echo "<p class='text-center text-sucess'>Senha alterada com Sucesso!</p>"; 

				$query = "SELECT * FROM formulario WHERE id = ".$_SESSION["id"];
				$result = mysqli_query($conn, $query);
				if ($arrayUsuario = mysqli_fetch_array($result)) {
					unset($_SESSION["email"]);
					$_SESSION["email"] = $arrayUsuario["email"];
					header("Location: painel.php");
				}
				
			} 
			mysqli_close($conn);
?>