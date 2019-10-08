<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

	<form action="controllerpessoa.php" method="post">
       
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
        		<br><input class="form-check-input" type="checkbox" name="ativo">Ativo</input></br>
        	</div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-3">
        		Login: <select class="custom-select">
        			<option selected>Selecione um login...</option>
        			<option value="1">One</option>
        			<option value="2">Two</option>
        			<option value="3">Three</option>
        		</select>
        	</div>
        	<div class="form-group col-md-3">
        		Tipo: <select class="custom-select">
        			<option selected>Selecione um tipo...</option>
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