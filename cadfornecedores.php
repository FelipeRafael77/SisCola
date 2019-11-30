<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/model.js"></script>
    <script src="js/jquery.mask.min.js"></script>
</head>

<body>

	<form class="text-center" data-toggle="validator" action="controllerfornecedores.php" method="POST">

		<div class="text-center"> 
        <br><h1>Cadastro de Fornecedores</h1>
        <a href="listfornecedores.php">Ver dados já cadastrados</a>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-2 offset-md-2">
        		Nome: <input class="form-control mr-sm-2" type="text" name="nomeFornecedor" required>
                <div class="help-block with-errors"></div>
        	</div>
        	<div class="form-group col-md-2">
        		CNPJ: <input class="form-control mr-sm-2" type="text" name="cnpjFornecedor" id="cnpj">
        	</div>
        	<div class="form-group col-md-2">
        		Endereço: <input class="form-control mr-sm-2" type="text" name="enderecoFornecedor" required>
                <div class="help-block with-errors"></div>
        	</div>
        	<div class="form-group col-md-2">
        		Telefone: <input class="form-control mr-sm-2" type="text" name="telefoneFornecedor" id="telefone" required>
                <div class="help-block with-errors"></div>
        	</div>
        </div>
		<div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-2" type="submit" name="enviar" value="Enviar"></td><td><a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	</form>
	
</body>

</html>