<?php session_start();
	  // include 'header.php';
?>
<html lang="pt-br">
<head><title>Pagina Logado php</title>

	<meta charset="utf-8" />	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	   <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="custom.css" />
	   
</head>
<body>


<nav class="navbar navbar-expand-lg cornavbar">
   <a class="navbar-brand style-link-nav" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     <span class="navbar-toggler-icon"></span>
     <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-md-8">
  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		   <li class="nav-item active">
			  <a class="nav-link style-link-nav" href="#">Home <span class="sr-only">(current)</span></a>
		   </li>
		   <li class="nav-item">
			  <a class="nav-link style-link-nav" href="#">Serviços</a>
		   </li>
		   <li class="nav-item">
			  <a class="nav-link style-link-nav" href="#">Contato</a>
		   </li>
		   <li class="nav-item">
			  <a class="nav-link disabled style-link-nav" href="#" tabindex="-1" aria-disabled="true">sobre</a>
		   </li>
		</ul>
		  <form class="form-inline my-2 my-lg-0">
		    <input class="form-control mr-sm-2" href="#" style="width: 300px;" type="search" placeholder="Pesquisar.." aria-label="Search" />
		  </form>
	</div>
  </div>
		<div class="col-md-4">
		  <div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Botão dropdown
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Status</a>
				<a class="dropdown-item" href="#">Mensagens</a>
				<a class="dropdown-item" href="Alterar-senha.php">Alterar senha</a>
				<a class="dropdown-item" href="#">Configuraçôes</a>
				<a class="dropdown-item" href="sair.php">Sair</a>
			  </div>
		  </div>  
		</div>   	
</nav>
<div class="container-fluid">

<div class="row">
<div class="col-3 border">
	<!-- <div class="col-2">
	    <div class="row"> -->
			<div id="sidebar" class="menulateral">
				<h5><dd class="glyphicon glyphicon-home"></dd>
					<small><b>MENU</b></small>
				</h5>
				
				<dl class="">
					<dd><a href="#"<button class="btn btn-outline-info">Add</button></a><dd>
					<dd><a href="#"><button class="btn btn-outline-info">Pesquisas</button></a><dd>
				</dl>
				<br>
			
				<h5><dd class="glyphicon glyphicon-user"></dd>
					<small><b>Perfil</b></small>
				</h5>
			
				<dl class="">
					<dd><a href="#"><button class="btn btn-outline-info">Lista</button></a><dd>
					<dd><a href="#"><button class="btn btn-outline-info">Anexos</button></a><dd>
					<dd><a href="#"><button class="btn btn-outline-info">Curiosidades</button></a><dd>
					<dd><a href="#"><button class="btn btn-outline-info">Edital Concursos</button></a><dd>
					<dd><a href="#"><button class="btn btn-outline-info">História da Empresa</button></a><dd>
				</dl>
          </div>
	 </div>
				<div class="col-6 border">
				   One of three columns
				   
				</div>
		
			<div class="col-3 border">
			   One of three columns
			</div>
</div>













</body>
</html>
