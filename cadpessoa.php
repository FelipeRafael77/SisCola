<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controllerpessoa.php" method="post">
        
        <br><h1>Cadastro de Pessoa</h1><br>

		Nome: <input class="form-control mr-sm-2" type="text" name="nome">
		RG: <input class="form-control mr-sm-2" type="number" name="rg">
		CPF: <input class="form-control mr-sm-2" type="number" name="cpf">
		Endereço: <input class="form-control mr-sm-2" type="text" name="endereco">
		Telefone: <input class="form-control mr-sm-2" type="number" name="telefone">
		Registro de Professor: <input class="form-control mr-sm-2" type="number" name="regprof">
		Matrícula do Aluno: <input class="form-control mr-sm-2" type="number" name="mataluno">
		Ativo: <input class="form-control mr-sm-2" type="text" name="ativo">
		Login: <input class="form-control mr-sm-2" type="text" name="idLogin">
		Tipo: <input class="form-control mr-sm-2" type="text" name="idTipo">
		<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
	
	</form>
	
</body>

</html>