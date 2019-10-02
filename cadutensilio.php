<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controllerutensilios.php" method="post">
        
        <br><h1>Cadastro de Utensílios Escolares</h1><br>

		Nome do Utensílio: <input class="form-control mr-sm-2" type="text" name="nome">
		Especificação: <input class="form-control mr-sm-2" type="text" name="especificacao">
		Quantidade: <input class="form-control mr-sm-2" type="number" name="quantidade">
		Cód. Categoria: <input class="form-control mr-sm-2" type="number" name="cod1">
		Cód. Fornecedores: <input class="form-control mr-sm-2" type="number" name="cod2">

		<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" href="#">Cancelar</a>
	
	</form>
	
</body>

</html>