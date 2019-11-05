<!DOCTYPE html>
<html>
<head>
    <title>SisCola</title>
    <meta charset="utf-8">
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
                    <th>Especificação</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                    <th>Fornecedor</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'utensilios.php';
                $utensilios = new Utensilios_Escolares();

                $listUtensilios=$utensilios->listarUtensilios();

                foreach ($listUtensilios as $key) {
                    echo "<tr><td>".$key['idUtensilios']."</td><td>".$key['nomeUtensilio']."</td><td>".$key['especificacao']."</td><td>".$key['quantidade']."</td><td>".$key['idCategoria']."</td><td>".$key['idFornecedores']."</td><td><a class='glyphicon glyphicon-trash' href='controllerutensilios.php?acao=excluir&id=".$key['idUtensilios']."'></a></td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>