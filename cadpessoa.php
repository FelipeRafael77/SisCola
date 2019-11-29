<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SisCola</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/model.js"></script>
</head>

<body>

	<form class="text-center" data-toggle="validator" action="controllerpessoa.php" method="POST">
       
       <div class="text-center"> 
        <br><h1>Cadastro de Pessoa</h1>
        <a href="listpessoas.php">Ver dados já cadastrados</a>
       </div>
        
        <div class="form-row">
        	<div class="form-group col-md-4 ml-3">
        		Nome: <input class="form-control mr-sm-2" type="text" name="nome" required>
                <div class="help-block with-errors"></div>
        	</div>
        	<div class="form-group col-md-2">
        		RG: <input class="form-control mr-sm-2" type="text" name="rg">
        	</div>
        	<div class="form-group col-md-2">
        		CPF: <input class="form-control mr-sm-2" type="text" name="cpf">
                
        	</div>
        	<div class="form-group col-md-3">
        		Endereço: <input class="form-control mr-sm-2" type="text" name="endereco" required>
                <div class="help-block with-errors"></div>
        	</div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-3 ml-3">
        		Telefone: <input class="form-control mr-sm-2" type="text" name="telefone">
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
            <div class="form-group col-md-2 offset-md-4">
            <?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare('SELECT idLogin, login FROM login');
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Login: <select class="form-control mr-sm-2" name="select_login">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idLogin'];?>"><?php echo $row['login'];?></option>
               <?php } ?>
            </select>
        </div>

            <div class="form-group col-md-2">
              <?php
            require_once('conexao.php');
            $conexao = new PDO( 'mysql:host=localhost;dbname=sisestagio' , 'root' , '' );
            $stmt = $conexao-> prepare( 'SELECT idTipo, descricao FROM tipo' );
            $stmt-> execute();
            $resultado = $stmt-> fetchAll( PDO::FETCH_ASSOC );
            ?>
            Tipo: <select class="form-control mr-sm-2" name="select_tipo">
                <option>Selecione...</option>
                <?php foreach( $resultado as $row ) { ?>  
                <option value="<?php echo $row['idTipo'];?>"><?php echo $row['descricao'];?></option>
               <?php } ?>
            </select>
          </div>
      </div>
        <div>
        	<br><td></td><input class="btn btn-dark ml-3 mr-3" type="submit" value="Enviar"></td>
                <a class="btn btn-outline-dark" onClick="window.history.back();">Cancelar</a>
        	</div>
	</form>
	
</body>

</html>