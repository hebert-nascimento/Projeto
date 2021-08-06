<?php
    include_once 'Conexao.php';
    // include_once 'autenticacao.php';
?>

<!DOCTYPE html>

<html lang="pt-br">
<head><title>Atualizar</title>
     <meta charset="utf-8">
		  <link rel="stylesheet" type="text/css" href="custom.css"/>
		  <script type="text/javascript" src="js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
<?php
			$email = $_SESSION['email'];
			$NVsenha = md5($_POST['NVsenha']);

			$sql = "UPDATE formulario SET senha = '".$NVsenha."' WHERE email = '".$email."'";


			if(mysqli_query($conn, $sql)){
				echo "<p class='text-center text-sucess'>Senha alterada com Sucesso!</p>";
				
			}else{
				echo "Erro alterar senha!";
				
				mysqli_close($conn);
			}

?>

<br /> <br /> <a href="Logado.php">Voltar ao login</a>


</body>
</html>