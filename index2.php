<?php include './header.php'; ?>

<title>Tela De Login</title>
<nav class="navbar navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Brand</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Link <span class="sr-only">(current)</span></a></li>
            </ul>

            <!--TAG PARA CAIXA DE ADMIN-->
            <!--<button class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span-->
            <!--class="glyphicon glyphicon-user"></span>Admin</a>-->
            <!--                <ul class="dropdown-menu">                     
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Configurações</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-off"></span>Entrar</a></li>
            
                            </ul>-->
            <!--</fieldset>-->
            <!--</button>-->
            <button data-toggle="modal" data-target="#squarespaceModal" class="modaladmin glyphicon-user">Admin</button>
        </div>
</nav>

<!--TAG PARA LOGIN DE USUÁRIO-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login">
                <div class="col-md-12">
                    <form class="form" action="verificar_login.php" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="password" name="senha" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Lembre-me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar" id="Enviar">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info"  class="btn EstiloModal CadastrarModal" data-toggle="modal" data-target="#myModal">Cadastre-se Aqui!</a>
                        </div>
                    </form>
                </div>
            </div>
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
    </div>
</div>


<?php include './footer.php'; ?>