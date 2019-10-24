<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controllerutensilios.php" method="post">

		<div class="text-center"> 
        <br><h1>Cadastro de Utensílios Escolares</h1><br>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-4">
        		Nome: <input class="form-control mr-sm-2" type="text" name="nome">
        	</div>
        	<div class="form-group col-md-4">
        		Especificação: <input class="form-control mr-sm-2" type="text" name="especificacao">
        	</div>
        	<div class="form-group col-md-2">
        		Quantidade: <input class="form-control mr-sm-2" type="number" name="quantidade">
        	</div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-4">
        		Categoria: <select class="custom-select">
        			<option selected>Selecione uma categoria...</option>
        			<option value="1">One</option>
        			<option value="2">Two</option>
        			<option value="3">Three</option>
               </select>
        	</div>
        	<div class="form-group col-md-4">
        		Fornecedores: <select class="custom-select">
        			<option selected>Selecione um fornecedor...</option>
        			<option value="1">One</option>
        			<option value="2">Two</option>
        			<option value="3">Three</option>
        		</select>
        	</div>
        </div>
		<div class="text-center">
        	<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	</form>
	
</body>

</html>