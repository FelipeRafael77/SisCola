<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controlleremprestimo.php" method="post">
        
        <br><h1>Cadastro de Empréstimo</h1><br>

		Tipo de Empréstimo: <input class="form-control mr-sm-2" type="text" name="tipoEmprestimo">
		Data do Empréstimo: <input class="form-control mr-sm-2" type="text" name="dataEmprestimo">
		Prazo: <input class="form-control mr-sm-2" type="text" name="prazo">
		Pessoa: <input class="form-control mr-sm-2" type="text" name="pessoa">

		<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" href="#">Cancelar</a>
	
	</form>
	
</body>

</html>