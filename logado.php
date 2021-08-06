<?php
    include 'header.php';
    include_once 'autenticacao.php';
    include_once 'Conexao.php';
    // select para exibição de dados abaixo
    $query = "SELECT email,nome,sobrenome FROM formulario WHERE tipo =3 AND id = '" . $_SESSION["id"] . "'";
    $result = mysqli_query($conn, $query);
?>
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
                        <a class="nav-link style-link-nav" href="logado.php">Home <span class="sr-only">(current)</span></a>
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
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
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
        <div class="container-fluid">
            <h1 class="mt-4">Painel de Atividades</h1>

        </div>
        <br>
        <!-- TAG PARA TABELA DE DADOS DO USUARIO -->
        <div class="container"> 
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dados</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Endereço</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</a>
                </div>
            </nav>
            <!-- TAG ONDE SERÃO EXIBIDOS OS DADOS -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row_formulario = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row_formulario['email']; ?></td>
                                    <td><?php echo $row_formulario['nome']; ?></td>
                                    <td><?php echo $row_formulario['sobrenome']; ?></td>
                                    <td><button type="button" class="fa fa-edit btn btn-sm btn-success" data-toggle="modal" data-target="#addUsuarioModal">Editar</button></td>
                                </tr>   
                                <?php
                             }
                            ?>              
                        </tbody>
                    </table>
                </div>
                <?php
                    $query = "SELECT endereco,bairro,estado FROM formulario WHERE tipo =3 AND id = '" . $_SESSION["id"] . "'";
                    $result = mysqli_query($conn, $query);
                ?>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Endereço</th>
                                <th>Bairro</th>
                                <th>Estado</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row_formulario = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row_formulario['endereco']; ?></td>
                                    <td><?php echo $row_formulario['bairro']; ?></td>
                                    <td><?php echo $row_formulario['estado']; ?></td>
                                    <td><button type="button" class="fa fa-edit btn btn-sm btn-success" data-toggle="modal" data-target="#addUsuarioModal">Editar</button></td>
                                </tr>   
                                <?php
                            }
                            ?>              
                        </tbody>
                    </table>
                </div>
                <?php
                    $query = "SELECT celular,telefone,estado FROM formulario WHERE tipo =3 AND id = '" . $_SESSION["id"] . "'";
                    $result = mysqli_query($conn, $query);
                ?>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Celular</th>
                                <th>Telefone</th>
                                <th>Estado</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             while ($row_formulario = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>(21)<?php echo $row_formulario['celular']; ?></td>
                                    <td>(21)<?php echo $row_formulario['telefone']; ?></td>
                                    <td><?php echo $row_formulario['estado']; ?></td>
                                    <td><button type="button" class="fa fa-edit btn btn-sm btn-success" data-toggle="modal" data-target="#addUsuarioModal">Editar</button></td>
                                </tr>   
                                <?php
                              }
                            ?>              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- MENU LATERAL -->
        <button class="btn menulateral" id="menu-toggle"><strong> <> </strong></button>
    </div>
</div>

<?php include('footer.php'); ?>
