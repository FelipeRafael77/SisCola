<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controllerfornecedores.php" method="post">
        
        <br><h1>Cadastro de Fornecedores</h1><br>

		Nome: <input class="form-control mr-sm-2" type="text" name="nome">
		CNPJ: <input class="form-control mr-sm-2" type="text" name="cnpj">
		Endereço: <input class="form-control mr-sm-2" type="text" name="endereco">
		Telefone: <input class="form-control mr-sm-2" type="text" name="telefone">

		<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<input class="btn btn-secondary" type="reset" name="enviar" value="Limpar Campos">&nbsp;<a class="btn btn-outline-dark" href="logout.php">Logout</a>
	
	</form>
	
</body>

</html>