<?php include_once('header.php'); ?>

<?php 
	include_once("conexao.php");
	$palavra = $_POST['palavra'];

	$sql = "SELECT * FROM dados WHERE email LIKE '%$palavra%'";
	$query = mysqli_query($conn, $sql);
	$qtd = mysqli_num_rows($query);
 ?>

 <?php
      if($qtd>0){
?>
		<table class="table table-hover tabela">
		  <thead>
			<tr>
			  <th scope="col" class="alert-info">ID</th>
			  <th scope="col" class="alert-info">EMAIL</th>
			  <th scope="col" class="alert-info">NOME</th>
			  <th scope="col" class="alert-info">SOBRENOME</th>
			  <th scope="col" class="alert-info">DATA</th> 
			  <th class="alert-info">opções</th> 
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
			    <td><?php echo $linha['data'];?></td>
			    <td>
			    	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
	  				Editar
					</button>
				</td>
			</tr>
		  </tbody>
		  <?php
				}
		  ?>
		  
		</table>
	<?php
	  }	else{ 
	?>
<h4>Não foram encontrados registros.</h4>
	<?php
	  		}
	?>
<?php include_once('footer.php'); ?>