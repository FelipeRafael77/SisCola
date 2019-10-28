<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form action="controllerdevolucao.php" method="post">
        
        <div class="text-center"> 
        <br><h1>Cadastro de Devolução</h1>
        <a href="listdevolucao.php">Ver dados já cadastrados</a>
       </div>

       <div class="form-row">
        	<div class="form-group col-md-4">
        		Data de Devolução: <input class="form-control mr-sm-2" type="text" name="dataDevolucao">
        	</div>
        </div>

		<div class="text-center">
            <br><td></td><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar"></td>
                <a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
            </div>
	
	</form>
	
</body>

</html>