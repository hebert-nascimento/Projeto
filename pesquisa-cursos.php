<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pagina de Pesquisas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-usuario').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "proc_pesq_user.php",
					"type": "POST"
				}
			});
		} );
		</script>
	</head>
	<body>
		<div class="container" style="margin-top: 25px;">
		<h1>Listar usuários</h1>
			<table id="listar-usuario" class="display table table-bordered table-hover" style="width:100%">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Curso</th>
						<th>Instituição</th>
					</tr>
				</thead>
			</table>	
			<a type="submit" class="btn btn-primary btn-sm" href="painel.php">Voltar</a>
		</div>	
	</body>
</html>
