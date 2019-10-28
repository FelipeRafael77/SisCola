<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form class="text-center" action="controllerlogin.php" method="post">
        
        <div class="text-center">
        <br><h1>Cadastro de Login</h1>
        </div>

        <div class="form-row">
        	<div class="form-group col-md-3 offset-md-3">
        		Login: <input class="form-control mr-sm-2" type="text" name="login">
        	</div>
        	<div class="form-group col-md-3">
        		Senha: <input class="form-control mr-sm-2" type="password" name="senha">
        	</div>
        </div>

		<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<a class="btn btn-outline-dark" href="#">Cancelar</a>
	
	</form>
	
</body>

</html>