<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form class="text-center" action="controllercaixa.php" method="POST">
       
       <div class="text-center"> 
        <br><h1>Cadastro de Caixa</h1>
        <a href="listcaixa.php">Ver dados já cadastrados</a>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-2">
        		Data de Abertura: <input class="form-control mr-sm-2" type="date" name="dataAbertura">
        	</div>
        	<div class="form-group col-md-2">
        		Saldo: <input class="form-control mr-sm-2" type="number" name="saldo">
        	</div>
        	<div class="form-group col-md-2">
        		Entrada: <input class="form-control mr-sm-2" type="number" name="entrada">
        	</div>
        	<div class="form-group col-md-2">
        		Saída: <input class="form-control mr-sm-2" type="number" name="saida">
        	</div>
            <div class="form-group col-md-2">
                Histórico: <input class="form-control mr-sm-2" type="number" name="historico">
            </div>
            <div class="form-group col-md-2">
                Multa: <input class="form-control mr-sm-2" type="number" name="multa">
            </div>
        </div>
		
        <div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar">
                
        	</div>
	
	</form>
	
</body>

</html>