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
                    <th>Data de Abertura</th>
                    <th>Saldo</th>
                    <th>Entrada</th>
                    <th>Saída</th>
                    <th>Histórico</th>
                    <th>Multa</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'caixa.php';
                $caixa = new Caixa();

                $listCaixa=$caixa->listarCaixa();

                foreach ($listCaixa as $key) {
                    echo "<tr><td>".$key['idCaixa']."</td><td>".$key['dataAbertura']."</td><td>".$key['saldo']."</td><td>".$key['entrada']."</td><td>".$key['saida']."</td><td>".$key['idHistorico_Caixa']."</td><td>".$key['idMulta']."</td><td><a class='glyphicon glyphicon-trash' href='controllercaixa.php?acao=excluir&id=".$key['idCaixa']."'></a></td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>