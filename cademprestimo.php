<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form class="text-center" action="controlleremprestimo.php" method="POST">
        
        <div class="text-center"> 
        <br><h1>Cadastro de Empréstimo</h1>
        <a href="listemprestimo.php">Ver dados já cadastrados</a>
       </div>

       <div class="form-row">
        	<div class="form-group col-md-2 offset-md-2">
        		Tipo de Empréstimo: <input class="form-control mr-sm-2" type="text" name="tipoEmprestimo">
        	</div>
        	<div class="form-group col-md-2">
        		Data do Empréstimo: <input class="form-control mr-sm-2" type="date" name="dataEmprestimo">
        	</div>
        	<div class="form-group col-md-2">
        		Prazo: <input class="form-control mr-sm-2" type="date" name="prazo">
        	</div>
        	<div class="form-group col-md-2">
        		Pessoa: <input class="form-control mr-sm-2" type="number" name="pessoa">
        	</div>
        </div>

		<div class="text-center">
        	<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	
	</form>
	
</body>

</html>