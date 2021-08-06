<?php
    session_start();
	include_once("Conexao.php");

		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
		// if(!empty($id)){
			$sql = "DELETE FROM formulario WHERE id='$id'";
			if (mysqli_query($conn, $sql)) {
				$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
				header("Location: painel.php");
			}
		// 	else{
				
		// 		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		// 		header("Location: painel.php");
		// 	}
		// }else{	
		// 	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
		// 	header("Location: painel.php");
		// }

				// $query = "SELECT * FROM formulario WHERE id = ".$_SESSION["id"];
				// $result = mysqli_query($conn, $query);
				// if ($arrayUsuario = mysqli_fetch_array($result)) {
				// 	unset($_SESSION["email"]);
				// 	$_SESSION["email"] = $arrayUsuario["email"];
				// 	header("Location: painel.php");
				// }
			mysqli_close($conn);		
?>