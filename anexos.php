<?php include_once('header.php');
session_start(); ?>

<title>Serviços</title>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><strong>Menu</strong></div>
            <div class="list-group list-group-flush">
                <a href="add.php" class="fa fa-plus list-group-item list-group-item-action bg-light"> Add</a>
                <a href="#" class="fa fa-search list-group-item list-group-item-action bg-light"> Pesquisas</a>
                <a href="#" class="fa fa-list-alt list-group-item list-group-item-action bg-light"> Lista</a>
                <a href="anexos.php" class="fa fa-paperclip list-group-item list-group-item-action bg-light"> Anexos</a>
                <a href="#" class="fa fa-question-circle list-group-item list-group-item-action bg-light"> Curiosidades</a>
                <a href="progresso.php" class="fa fa-info list-group-item list-group-item-action bg-light"> Status</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom cornavbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link style-link-nav" href="painel.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link style-link-nav" href="servicos.php">Serviços</a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item">
                            <a class="nav-link style-link-nav" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled style-link-nav" href="sobre.php" tabindex="-1" aria-disabled="true">sobre</a>
                        </li>

                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input class="form-control mr-sm-2" href="#" style="width: 300px;" type="search" placeholder="Pesquisar.." aria-label="Search" />
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php echo $_SESSION["email"]; ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="fa fa-heart dropdown-item" href="#"> Status</a>
                            <a class="fa fa-envelope dropdown-item" href="#"> Mensagens</a>

                            <button type="button" class="fa fa-key dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">
                                Alterar senha
                            </button>
                            <a class="fa fa-cog dropdown-item" href="#"> Configuraçôes</a>
                            <a class="fa fa-sign-out dropdown-item" href="sair.php"> Sair</a>
                        </div>
                    </div>  
                </div> 
            </nav>
            <!-- MENU LATERAL -->
            <button class="btn menulateral" id="menu-toggle"><strong> <> </strong></button>

            <main role="main">

    <div class="container">
         <div align="center" style="margin-top: 100px;">
            <h2><strong>Anexos</strong></h2>
        </div>
    </div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/imagens/corpodebombeiro.png" alt="Imagem Responsiva" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Seja um oficial do Corpo de Bombeiros.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/imagens/corpodepm.jpg" alt="Imagem Responsiva" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Seja um oficial da Policia Militar.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/imagens/exercito.png" alt="Imagem Responsiva" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Sea um oficial do Exercito Brasileiro.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

</main>


<?php include_once ('footer.php'); ?>