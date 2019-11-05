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

    <br><br><table class="table table-striped text-center">
                <thead>
                    <th>id</th>
                    <th>Categoria</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'categoria.php';
                $categoria = new Categoria();

                $listCategoria=$categoria->listarCategoria();

                foreach ($listCategoria as $key) {
                    echo "<tr><td>".$key['idCategoria']."</td><td>".$key['nomeCategoria']."</td><td><a class='glyphicon glyphicon-trash' href='controllercategoria.php?acao=excluir&id=".$key['idCategoria']."'></a></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>