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
                    <th>Data</th>
                    <th>Valor</th>
                    <th>Devolução</th>
                </thead>
                <?php

                include_once 'multa.php';
                $multa = new Multa();

                $listMulta=$multa->listarMulta();

                foreach ($listMulta as $key) {
                    echo "<tr><td>".$key['idMulta']."</td><td>".$key['data']."</td><td>".$key['valor']."</td><td>".$key['idDevolucao']."</td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>