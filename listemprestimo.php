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
                    <th>Tipo de Empréstimo</th>
                    <th>Data de Empréstimo</th>
                    <th>Prazo</th>
                    <th>Pessoa</th>
                </thead>
                <?php

                include_once 'emprestimo.php';
                $emprestimo = new Emprestimo();

                $listEmprestimo=$emprestimo->listarEmprestimo();

                foreach ($listEmprestimo as $key) {
                    echo "<tr><td>".$key['idEmprestimo']."</td><td>".$key['tipoEmprestimo']."</td><td>".$key['dataEmprestimo']."</td><td>".$key['prazo']."</td><td>".$key['idPessoa']."</td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>