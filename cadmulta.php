<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/model.js"></script>
    <script src="js/jquery.mask.min.js"></script>
</head>

<body>

	<form class="text-center" data-toggle="validator" action="controllermulta.php" method="POST">
       
       <div class="text-center"> 
        <br><h1>Multa</h1>
        <a href="listmulta.php">Ver dados já cadastrados</a>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-2 offset-md-3">
        		Data: <input class="form-control mr-sm-2" type="date" name="data" required>
                <div class="help-block with-errors"></div>
        	</div>
        	<div class="form-group col-md-2">
        		Valor: <input class="form-control mr-sm-2" type="text" name="valor" id="dinheiro4" maxlength="8" required>
                <div class="help-block with-errors"></div>
        	</div>
        	<div class="form-group col-md-2">
        		<?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare( 'SELECT idDevolucao, dataDevolucao FROM devolucao' );
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Devolução: <select class="form-control mr-sm-2" name="select_devolucao">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idDevolucao'];?>"><?php echo $row['dataDevolucao'];?></option>
               <?php } ?>
            </select>
        	</div>
        </div>
		
        <div class="text-center">
            <br><td></td><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar"></td>
                <a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
            </div>
	
	</form>
	
</body>

</html>