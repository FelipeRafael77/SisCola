<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controllerfornecedores.php" method="post">

		<div class="text-center"> 
        <br><h1>Cadastro de Fornecedores</h1><br>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-4">
        		Nome: <input class="form-control mr-sm-2" type="text" name="nomeFornecedor">
        	</div>
        	<div class="form-group col-md-2">
        		CNPJ: <input class="form-control mr-sm-2" type="text" name="cnpjFornecedor">
        	</div>
        	<div class="form-group col-md-2">
        		Endereço: <input class="form-control mr-sm-2" type="text" name="enderecoFornecedor">
        	</div>
        	<div class="form-group col-md-3">
        		Telefone: <input class="form-control mr-sm-2" type="text" name="telefoneFornecedor">
        	</div>
        </div>
		<div class="text-center">
        	<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	</form>
	
</body>

</html>