<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SisCola</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <form action="controllercategoria.php" method="POST">

    	<div class="text-center"> 
        <br><h1>Cadastro de Categoria</h1>
        <a href="listcategoria.php">Ver dados já cadastrados</a>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-4">
        		Categoria: <input class="form-control mr-sm-2" type="text" name="nomeCategoria">
        	</div>
        </div>
		<div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-3" type="submit" name="enviar" value="Enviar"></td><td>
                <a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
    </form>
    
</body>

</html>