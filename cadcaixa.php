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
        		Saldo: <input class="form-control mr-sm-2" type="text" name="saldo">
        	</div>
        	<div class="form-group col-md-2">
        		Entrada: <input class="form-control mr-sm-2" type="text" name="entrada">
        	</div>
        	<div class="form-group col-md-2">
        		Saída: <input class="form-control mr-sm-2" type="text" name="saida">
        	</div>
            <div class="form-group col-md-2">
                <?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare( 'SELECT idHistorico_Caixa, descricao FROM historico_caixa' );
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Histórico: <select class="form-control mr-sm-2" name="select_historico">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idHistorico_Caixa'];?>"><?php echo $row['descricao'];?></option>
               <?php } ?>
            </select>
            </div>
            <div class="form-group col-md-2">
                <?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare( 'SELECT idMulta, data FROM multa' );
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Multa: <select class="form-control mr-sm-2" name="select_multa">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idMulta'];?>"><?php echo $row['data'];?></option>
               <?php } ?>
            </select>
            </div>
        </div>
		
        <div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	
	</form>
	
</body>

</html>