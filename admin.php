<?php include_once('header.php'); ?>

<?php
    include_once 'Conexao.php';
?>
<title>Admin</title>
<body>
  <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><strong>Menu</strong></div>
            <div class="list-group list-group-flush">
                <a href="add.php" class="fa fa-plus list-group-item list-group-item-action bg-light"> Add</a>
                <a href="pesquisa-cursos.php" class="fa fa-address-book list-group-item list-group-item-action bg-light"> Candidatos</a>
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
                     <?php echo $_SESSION["email"];?>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="fa fa-heart dropdown-item" href="#">Status</a>
                    <a class="fa fa-envelope dropdown-item" href="#">Mensagens</a>
                    <button type="button" class="fa fa-key dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">
                       Alterar senha
                   </button>
                   <a class="fa fa-cog dropdown-item" href="#">Configuraçôes</a>
                   <a class="fa fa-sign-out dropdown-item" href="sair.php">Sair</a>
               </div>
           </div>  
       </div> 
   </nav>

   <!-- MENU LATERAL -->
   <button class="btn menulateral" id="menu-toggle"><strong> <> </strong></button>
            <!-- <div class="container-fluid">
                <h1 class="mt-4">Painel de Atividades</h1>
               <div class="resultado"></div>
           </div> -->
           <br>

            <div id="main" class="container" style="margin-top: 50px">

              <div id="top" class="row">
                <div class="col-sm-3">
                    <h2>Itens</h2>
                </div>
                <div class="col-sm-6">

                  <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-lg" type="submit">
                        <span class="fa fa-search"></span>
                      </button>
                    </span>
                  </div>

                </div>
                <div class="col-sm-3">
                  <a href="#" class="btn btn-primary pull-right h2">Novo Item</a>
                </div>
              </div> <!-- /#top -->
              <hr>

                <!-- SELECIONA DADOS DO BANCO -->
                <?php 
                        $sql = "SELECT id,email,nome,sobrenome,data_de_cadastro FROM formulario WHERE id !=1 LIMIT 6";
                        $query = mysqli_query($conn, $sql);
                        $qtd = mysqli_num_rows($query);
                ?>
                <?php
                       if($qtd>0){
                    ?>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col" class="alert-secondary cor-de-titulo">ID</th>
                          <th scope="col" class="alert-secondary cor-de-titulo">EMAIL</th>
                          <th scope="col" class="alert-secondary cor-de-titulo">NOME</th>
                          <th scope="col" class="alert-secondary cor-de-titulo">SOBRENOME</th>
                          <th scope="col" class="alert-secondary cor-de-titulo">DATA</th> 
                          <th class="alert-secondary cor-de-titulo">OPÇÕES</th> 
                      </tr>
                  </thead>
                  <?php
                       while ($linha = mysqli_fetch_assoc($query)){ 
                    ?>
                    <tbody>
                        <tr>   
                            <td><?php echo $linha['id'];?></td>  
                            <td><?php echo $linha['email'];?></td>
                            <td><?php echo $linha['nome'];?></td>
                            <td><?php echo $linha['sobrenome'];?></td>
                            <td><?php echo $linha['data_de_cadastro'];?></td>
                            <td class="actions">
                              <div class="btn-group" role="group" aria-label="Basic example">
                                  <a class="btn btn-success btn-sm" href="info-curriculo.php" id="<?php echo $linha['id'];?>" >Visualizar</a>
                                  <a  class="btn btn-warning" data-toggle="modal" data-target="#exampleModalScrollable" style="color: white;">
                                  Editar
                              </a>
                                <?php echo '<a class="btn btn-danger btn-sm" href="excluir-usuario.php"?id=' . $linha['id'] .' data-toggle="modal" data-target="#delete-modal">Excluir</a>'  ?>
                              </div>
                          </td>
                      </tr>
                  </tbody>
                  <?php
                       }
                ?>
          </table>
                 <?php
                       } else{ 
                ?>
                       <h4>Não foram encontrados registros.</h4>
                <?php
                       }
                ?>
    <br>
          <!-- </div> -->
          <div id="bottom" class="row">
                          <div class="col-md-12">
                            <ul class="pagination">
                              <li class="disabled"><a>&lt; Anterior</a></li>
                              <li class="disabled"><a>1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                            </ul><!-- /.pagination -->
                          </div>
                        </div> <!-- /#bottom -->
                      </div> <!-- /#main -->
          </div>


<?php include_once('footer.php'); ?>