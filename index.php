<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<div class="container-fluid">
		
		<nav class="navbar navbar-expand-sm navbar-light bg-faded">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="#">SisCola</a>

			<div class="collapse navbar-collapse" id="nav-content">   
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
						<div class="dropdown-menu" aria-labelledby="Preview">
							<a class="dropdown-item" href="cadpessoa.php">Pessoa</a>
							<a class="dropdown-item" href="cadfornecedores.php">Fornecedores</a>
							<a class="dropdown-item" href="cadcategoria.php">Categoria</a>
							<a class="dropdown-item" href="cadtipo.php">Tipo</a>
							<a class="dropdown-item" href="cadutensilio.php">Utensílios Escolares</a>
							<a class="dropdown-item" href="cadhistoricocaixa.php">Histórico do Caixa</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">Movimentações</a>
						<div class="dropdown-menu" aria-labelledby="Preview">
							<a class="dropdown-item" href="cademprestimo.php">Empréstimo</a>
							<a class="dropdown-item" href="cadcaixa.php">Caixa</a>
							<a class="dropdown-item" href="cadmulta.php">Multa</a>
							<a class="dropdown-item" href="caddevolucao.php">Devolução</a>
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="logout.php">Sair<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	</html>