<!DOCTYPE html>
<html>
<head>
    <title>SisCola</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="text-center">
    <h1>Dados cadastrados</h1>
</div>

    <br><br><table class="table table-striped text-center">
                <thead>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Especificação</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                    <th>Fornecedores</th>
                </thead>
                <?php

                include_once 'utensilios.php';
                $utensilios = new Utensilios_Escolares();

                $listUtensilios=$utensilios->listarUtensilios();

                foreach ($listUtensilios as $key) {
                    echo "<tr><td>".$key['idUtensilios']."</td><td>".$key['nomeUtensilio']."</td><td>".$key['especificacao']."</td><td>".$key['quantidade']."</td><td>".$key['idCategoria']."</td><td>".$key['idFornecedores']."</td><</td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>