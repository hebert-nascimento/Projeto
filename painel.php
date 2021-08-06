 <?php 
 include_once './autenticacao.php';

 if ($_SESSION["tipo"] == "2")
                {
                    include_once 'admin.php';
                }
                else
                {
                    include_once 'logado.php';
                }