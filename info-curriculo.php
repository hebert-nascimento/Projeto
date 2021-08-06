<?php include_once('header.php'); ?>

<?php
    include_once 'Conexao.php';
    $sql = "SELECT id,email,nome,sobrenome,data_de_cadastro FROM formulario WHERE id = 7";
    $query = mysqli_query($conn, $sql);
    $qtd = mysqli_num_rows($query);
?>

</div>

 <div id="main" class="container-fluid" style="margin-top: 15px;">
  <h3 class="page-header">Informações de currículo</h3>

  <?php
         if($qtd>0){
      ?>
          <?php
                 while ($linha = mysqli_fetch_assoc($query)){ 
              ?>
  
  <div class="row" style="margin: 10px;">
    <div class="col-md-4">
      <p ><strong>Email</strong></p>
      <p class="breadcrumb"><?php echo $linha['email']; ?></p>
    </div>
  
  <div class="col-md-4">
      <p ><strong>Nome</strong></p>
      <p class="breadcrumb"><?php echo $linha['nome']; ?></p>
    </div>
  
  <div class="col-md-4">
      <p ><strong>Sobrenome</strong></p>
      <p class="breadcrumb"><?php echo $linha['sobrenome']; ?></p>
    </div>

    <div class="col-md-4">
      <p ><strong>Data</strong></p>
      <p class="breadcrumb"><?php echo $linha['data_de_cadastro']; ?></p>
    </div>

    <?php
               }
        ?>
         <?php
               } else{ 
        ?>
        <?php
               }
        ?>
  <?php  
        $sql = "SELECT * FROM curriculo WHERE id = 1";
        $query = mysqli_query($conn, $sql);
        $qtd = mysqli_num_rows($query);
      ?>

     <?php
          if($qtd>0){
        ?>
          <?php
              while ($linha = mysqli_fetch_assoc($query)){ 
            ?>
  <div class="col-md-4">
      <p ><strong>Curso</strong></p>
      <p class="breadcrumb"><?php echo $linha['curso']; ?></p>
    </div>
  
  <div class="col-md-4">
      <p ><strong>Instituição</strong></p>
      <p class="breadcrumb"><?php echo $linha['instituicao']; ?></p>
    </div>
  
    <div class="col-md-4">
      <p ><strong>Turno</strong></p>
      <p class="breadcrumb"><?php echo $linha['turno']; ?></p>
    </div>
  
  <div class="col-md-4">
      <p ><strong>Período</strong></p>
      <p class="breadcrumb"><?php echo $linha['periodo']; ?></p>
    </div>
  
    <div class="col-md-8">
      <p  ><strong>Texto</strong></p>
      <p class="breadcrumb"> <?php echo $linha['texto']; ?> </p>
    </div>
 </div>
  <?php
                       }
                ?>
                 <?php
                       } else{ 
                ?>
                <?php
                       }
                ?>
 <hr />
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="painel.php" class="btn btn-primary">Fechar</a>
   <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
   </div>
 </div>

 <?php include_once('footer.php'); ?>
