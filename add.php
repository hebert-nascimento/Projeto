<?php
include 'header.php';
include_once 'autenticacao.php';
include_once 'Conexao.php';
?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><strong>Menu</strong></div>
        <div class="list-group list-group-flush">
            <a href="add.php" class="fa fa-plus list-group-item list-group-item-action bg-light"> Add</a>
            <a href="#" class="fa fa-search list-group-item list-group-item-action bg-light"> Pesquisas</a>
            <a href="#" class="fa fa-list-alt list-group-item list-group-item-action bg-light"> Lista</a>
            <a href="#" class="fa fa-paperclip list-group-item list-group-item-action bg-light"> Anexos</a>
            <a href="#" class="fa fa-question-circle list-group-item list-group-item-action bg-light"> Curiosidades</a>
            <a href="#" class="fa fa-info list-group-item list-group-item-action bg-light"> Status</a>
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
            <div style="text-align: center;">
                <?php
                if (isset($_GET["msg"]) && $_GET["msg"] != "") {
                    ?>
                    <br>
                    <div class="alert alert-<?php echo $_GET["class"]; ?>">
                        <?php echo $_GET["msg"]; ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <br>
        <!-- TAG DE CASDASTRO DE CURRICULO -->
        <div class="container">
            <form action="cadastro-curriculo.php" method="post" class="was-validated" id="form-curriculo">
                <div class="form-row">
                    <div class="col-lg-6">

                        <!-- TAG PARA NOME E SOBRENOME -->
                        <span class="fa fa-user"></span>
                        <label><strong>Nome</strong></label>
                        <input type="text" class="form-control" id="nome_cur" name="nome_cur" required="required" placeholder="Digite seu nome completo">
                    </div>
                    <div class="col-lg-6">
                        <span class="fa fa-user"></span>
                        <label><strong>Sobrenome</strong></label>
                        <input type="text" class="form-control" id="sobrenome_cur" name="sobrenome_cur" required="required" placeholder="Digite seu sobrenome completo">
                    </div>
                </div><br>

                <!-- TAG PARA SEXO E ESTADO CIVIL -->
                <div class="form-row">
                    <div class="col-lg-6" style="padding-top: 10px;">
                        <span class="fa fa-transgender"></span>
                        <label><strong>Sexo</strong></label>
                        <div class="input-group input-group-md ">
                            <select class="form-control" data-val="true" data-val-number="The field cod_sexo must be a number." data-val-required="O campo cod_sexo é obrigatório." id="Aluno_cod_sexo" name="sexo" required="required" title="Selecione sexo">
                                <option value="">SELECIONE</option>
                                <option value="M">MASCULINO</option>
                                <option value="F">FEMININO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding-top: 10px;">
                        <span class="fa fa-transgender"></span>
                        <label><strong>Estado Civil</strong></label>
                        <div class="input-group input-group-md ">
                            <span class="input-group-addon">
                                <span><i aria-hidden="true"></i></span>
                            </span>
                            <select class="form-control" data-val="true" data-val-number="The field cod_estado_civil must be a number." data-val-required="O campo cod_estado_civil é obrigatório." id="Aluno_cod_estado_civil" name="estado_civil" required="required" title="Selecione estado civil">
                                <option value="">SELECIONE</option>
                                <option value="solteiro">SOLTEIRO</option>
                                <option value="casado">CASADO</option>
                                <option value="separado">SEPARADO/DIVORCIADO</option>
                                <option value="viuvo">VÍUVO</option>
                                <option value="outros">OUTROS</option>
                            </select>
                        </div>
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col-lg-6" style="padding-top: 10px;">
                        <span class="fa fa-edit"></span>
                        <label><strong>Curso</strong></label>
                        <select type="text" class="custom-select" name="curso" required>
                            <option value="">*</option>
                            <option value="administracao">ADMINISTRAÇÃO</option>  
                            <option value="analise de sistemas">ANALISE DE SISTEMAS</option>
                            <option value="arte teatro">ARTE TEATRO</option>
                            <option value="banco de dados">BANCO DE DADOS</option>
                            <option value="biologia">BIOLOGIA</option>
                            <option value="ciencias biologicas">CIENCIAS BIOLOGICAS</option>
                            <option value="ciencias contabeis">CIENCIAS CONTABEIS</option>
                            <option value="direito">DIREITO</option>
                            <option value="educacao fisica">EDUCAÇÃO FISICA</option>
                            <option value="enfermagem">ENFERMAGEM</option>
                            <option value="engenharia">ENGENHARIA</option>
                            <option value="engenharia automotiva">ENGENHARIA AUTOMOTIVA</option>
                            <option value="engenharia da computacao">ENGENHARIA DE COMPUTAÇÃO</option>
                            <option value="engenharia industrial">ENGENHARIA INDUSTRIAL</option>
                            <option value="estatistica">ESTATÍSTICA</option>
                            <option value="filosofia">FILOSOFIA </option>
                            <option value="fisica">FÍSICA</option>
                            <option value="informatica">INFORMÁTICA</option>
                            <option value="jornalismo">JORNALISMO</option>
                            <option value="marketing">MARKETING</option>
                            <option value="matematica">MATEMÁTICA</option>
                            <option value="medicina">MEDICINA</option>
                            <option value="musica">MUSICA</option>
                            <option value="odontologia">ODONTOLOGIA</option>
                            <option value="pedagogia">PEDAGOGIA</option>
                            <option value="radio e tv">RÁDIO E TV</option>
                            <option value="recursos humanos">RECURSOS HUMANOS</option>
                            <option value="segurança de rede">SEGURANÇA DE REDE</option>
                            <option value="turismo">TURISMO</option>
                        </select>
                        <div class="invalid-feedback">Defina as opções de curso!</div>
                    </div>
                    <div class="col-lg-6" style="padding-top: 10px;">
                        <span class="fa fa-university"></span>
                        <label><strong>Instituição</strong></label>
                        <input type="text" class="form-control" id="instituicao" name="instituicao" required="required" placeholder="Qual a instituição de ensino?" />
                    </div> 
                </div> 

                <!-- TAG PARA TURNO E PERÍODO-->
                <div class="form-group">
                    <div class="col-lg-6" style="padding-top: 10px;">
                        <span class="fa fa-moon-o"></span>
                        <label><strong>TURNO</strong></label>
                        <span class="field-validation-valid text-danger"></span>
                        <div class="input-group">
                            <input class="form-control" id="turno" name="turno" required="required" type="text" value="" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span class="fa fa-hourglass-half"></span>
                    <label><strong>Período</strong></label>
                    <select multiple class="form-control col-md-2" id="exampleFormControlSelect2" name="periodo" required="required">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><strong>Texto</strong></label>
                    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="texto" rows="5" required="required"></textarea>
                </div>
                <br><hr>
                <button type="submit" class="btn btn-block btn-primary mb-2" id="btnSubmit">Enviar</button>
            </form>
        </div>  

        <!-- MENU LATERAL -->
        <button class="btn menulateral" id="menu-toggle"><strong> <> </strong></button>
    </div>
</div>

<?php include('footer.php'); ?>
