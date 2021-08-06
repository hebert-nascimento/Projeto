<?php
    session_start();
    if (!isset($_SESSION['email']))
    {
        session_destroy();
        
        $msg = "Acesso Negado!";
        header("location:index.php?msg=".$msg);
    }
  // elseif ($_SESSION["TEMPO"] + 500 < time())
  //   {
  //       session_destroy();
        
  //       $msg = "Sessão Expirada!";
  //       header("location:index.php?msg=".$msg);
  //   }
  //   else
  //   {
  //       $_SESSION["TEMPO"] = time();
  //   }
?>