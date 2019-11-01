<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<form class="text-center" action="controllerutensilios.php" method="POST">

		<div class="text-center"> 
        <br><h1>Cadastro de Utensílios Escolares</h1>
        <a href="listutensilios.php">Ver dados já cadastrados</a>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-2 offset-md-1">
        		Nome: <input class="form-control mr-sm-2" type="text" name="nome">
        	</div>
        	<div class="form-group col-md-3">
        		Especificação: <input class="form-control mr-sm-2" type="text" name="especificacao">
        	</div>
        	<div class="form-group col-md-1">
        		Quantidade: <input class="form-control mr-sm-2" type="number" name="quantidade">
        	</div>
            <div class="form-group col-md-2">
                <?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare( 'SELECT idCategoria, nomeCategoria FROM categoria' );
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Categoria: <select class="form-control mr-sm-2" name="select_categoria">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idCategoria'];?>"><?php echo $row['nomeCategoria'];?></option>
               <?php } ?>
            </select>
            </div>
            <div class="form-group col-md-2">
                <?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare( 'SELECT idFornecedores, nomeFornecedor FROM fornecedores' );
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Fornecedor: <select class="form-control mr-sm-2" name="select_fornecedor">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idFornecedores'];?>"><?php echo $row['nomeFornecedor'];?></option>
               <?php } ?>
            </select>
            </div>
        </div>
		<div class="text-center">
        	<br><input class="btn btn-dark ml-3 mr-2" type="submit" name="enviar" value="Enviar"></td><td><a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	</form>
	
</body>

</html>