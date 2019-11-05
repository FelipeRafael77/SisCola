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
                    <th>Data</th>
                    <th>Valor</th>
                    <th>Devolução</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'multa.php';
                $multa = new Multa();

                $listMulta=$multa->listarMulta();

                foreach ($listMulta as $key) {
                    echo "<tr><td>".$key['idMulta']."</td><td>".$key['data']."</td><td>".$key['valor']."</td><td>".$key['idDevolucao']."</td><td><a class='glyphicon glyphicon-trash' href='controllermulta.php?acao=excluir&id=".$key['idMulta']."'></a></td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>