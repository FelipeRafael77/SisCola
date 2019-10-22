<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controlleremprestimo.php" method="post">
        
        <div class="text-center"> 
        <br><h1>Cadastro de Empréstimo</h1><br>
       </div>

       <div class="form-row">
        	<div class="form-group col-md-4">
        		Tipo de Empréstimo: <input class="form-control mr-sm-2" type="text" name="tipoEmprestimo">
        	</div>
        	<div class="form-group col-md-2">
        		Data do Empréstimo: <input class="form-control mr-sm-2" type="number" name="dataEmprestimo">
        	</div>
        	<div class="form-group col-md-2">
        		Prazo: <input class="form-control mr-sm-2" type="number" name="prazo">
        	</div>
        	<div class="form-group col-md-3">
        		Pessoa: <select class="custom-select" name="idPessoa">
        			<option selected>Selecione uma pessoa...</option>
        			<option value="1">On</option>
        			<option value="2">Two</option>
        			<option value="3">Three</option>
        		</select>
        	</div>
        	</div>
        </div>

		<div class="text-center">
        	<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	
	</form>
	
</body>

</html>