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

    <br><br><table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>Data de Abertura</th>
                    <th>Saldo</th>
                    <th>Entrada</th>
                    <th>Saída</th>
                    <th>Histórico</th>
                    <th>Multa</th>
                </thead>
                <?php

                include_once 'caixa.php';
                $caixa = new Caixa();

                $listCaixa=$caixa->listarCaixa();

                foreach ($listCaixa as $key) {
                    echo "<tr><td>".$key['idCaixa']."</td><td>".$key['dataAbertura']."</td><td>".$key['saldo']."</td><td>".$key['entrada']."</td><td>".$key['saida']."</td><td>".$key['idHistorico_Caixa']."</td><td>".$key['idMulta']."</td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>