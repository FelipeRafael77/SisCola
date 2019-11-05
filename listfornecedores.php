<!DOCTYPE html>
<html>
<head>
    <title>SisCola</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="text-center">
    <h1>Dados cadastrados</h1>
</div>

    <br><br><table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'fornecedores.php';
                $fornecedores = new Fornecedores();

                $listFornecedores=$fornecedores->listarFornecedores();

                foreach ($listFornecedores as $key) {
                    echo "<tr><td>".$key['idFornecedores']."</td><td>".$key['nomeFornecedor']."</td><td>".$key['cnpjFornecedor']."</td><td>".$key['enderecoFornecedor']."</td><td>".$key['telefoneFornecedor']."</td><td><a class='glyphicon glyphicon-trash' href='controllerfornecedores.php?acao=excluir&id=".$key['idFornecedores']."'></a></td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>