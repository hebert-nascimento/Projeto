<?php
    session_start();
	// include_once 'autenticacao.php';
    include_once 'Conexao.php';

	$NVemail = filter_input(INPUT_POST,'NVemail',FILTER_SANITIZE_STRING);
	$NVnome = filter_input(INPUT_POST,'NVnome',FILTER_SANITIZE_STRING);
	$NVsobrenome = filter_input(INPUT_POST,'NVsobrenome',FILTER_SANITIZE_STRING);
	$NVendereco = filter_input(INPUT_POST,'NVendereco',FILTER_SANITIZE_STRING);
	$NVbairro = filter_input(INPUT_POST,'NVbairro',FILTER_SANITIZE_STRING);
	$NVestado = filter_input(INPUT_POST,'NVestado',FILTER_SANITIZE_STRING);
	$NVcelular = filter_input(INPUT_POST,'NVcelular',FILTER_SANITIZE_STRING);
	$NVtelefone = filter_input(INPUT_POST,'NVtelefone',FILTER_SANITIZE_STRING);
	
	$alt = "UPDATE formulario SET email = '".$NVemail."', nome = '".$NVnome."' , sobrenome = '".$NVsobrenome."',endereco = '".$NVendereco."',bairro ='".$NVbairro."',estado ='".$NVestado."',celular = '".$NVcelular."',telefone = '".$NVtelefone."' WHERE id = ".$_SESSION["id"];
    
	  // $result = mysqli_query($conn, $alt);
	  // $row_formulario = mysqli_fetch_assoc($result);
	
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