<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form action="controllermulta.php" method="POST">
       
       <div class="text-center"> 
        <br><h1>Multa</h1><br>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-2">
        		Data: <input class="form-control mr-sm-2" type="date" name="data">
        	</div>
        	<div class="form-group col-md-2">
        		Valor: <input class="form-control mr-sm-2" type="text" name="valor">
        	</div>
        	<div class="form-group col-md-2">
        		Devolução: <input class="form-control mr-sm-2" type="number" name="devolucao">
        	</div>
        </div>
		
        <div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar">
                
        	</div>
	
	</form>
	
</body>

</html>