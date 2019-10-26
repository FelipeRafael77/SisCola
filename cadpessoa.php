<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form action="controllerpessoa.php" method="POST">
       
       <div class="text-center"> 
        <br><h1>Cadastro de Pessoa</h1><br>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-4">
        		Nome: <input class="form-control mr-sm-2" type="text" name="nome">
        	</div>
        	<div class="form-group col-md-2">
        		RG: <input class="form-control mr-sm-2" type="number" name="rg">
        	</div>
        	<div class="form-group col-md-2">
        		CPF: <input class="form-control mr-sm-2" type="number" name="cpf">
        	</div>
        	<div class="form-group col-md-3">
        		Endereço: <input class="form-control mr-sm-2" type="text" name="endereco">
        	</div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-3">
        		Telefone: <input class="form-control mr-sm-2" type="number" name="telefone">
        	</div>
        	<div class="form-group col-md-3">
        		Registro de Professor: <input class="form-control mr-sm-2" type="number" name="regprof">
        	</div>
        	<div class="form-group col-md-3">
        		Matrícula do Aluno: <input class="form-control mr-sm-2" type="number" name="mataluno">
        	</div>
        	<div class="form-check">
        		Status: <input class="form-control mr-sm-2" type="text" name="status">
        	</div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-3">
        		Login: <input class="form-control mr-sm-2" type="text" name="login">
                
        	</div>
        	<div class="form-group col-md-3">
        		Tipo: <input class="form-control mr-sm-2" type="text" name="tipo">
        </div>
		
        <div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar">
                
        	</div>
	
	</form>
	
</body>

</html>