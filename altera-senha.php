<?php
    session_start();
	// include_once 'autenticacao.php';
    include_once 'Conexao.php';
    // $id = $_POST['id'];
    // $email = $_POST['email'];
	$NVsenha = md5($_POST['NVsenha']);

	$alt = "UPDATE formulario SET senha = '".$NVsenha."' WHERE id = ".$_SESSION["id"];
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