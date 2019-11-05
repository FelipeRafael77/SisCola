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
                    <th>Descrição</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'tipo.php';
                $tipo = new Tipo();

                $listTipo=$tipo->listarTipo();

                foreach ($listTipo as $key) {
                    echo "<tr><td>".$key['idTipo']."</td><td>".$key['descricao']."</td></td><td><a class='glyphicon glyphicon-trash' href='controllertipo.php?acao=excluir&id=".$key['idTipo']."'></a></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>