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
                    <th>Tipo de Empréstimo</th>
                    <th>Data de Empréstimo</th>
                    <th>Prazo</th>
                    <th>Pessoa</th>
                    <th>Excluir</th>
                </thead>
                <?php

                include_once 'emprestimo.php';
                $emprestimo = new Emprestimo();

                $listEmprestimo=$emprestimo->listarEmprestimo();

                foreach ($listEmprestimo as $key) {
                    echo "<tr><td>".$key['idEmprestimo']."</td><td>".$key['tipoEmprestimo']."</td><td>".$key['dataEmprestimo']."</td><td>".$key['prazo']."</td><td>".$key['idPessoa']."</td><td><a class='glyphicon glyphicon-trash' href='controlleremprestimo.php?acao=excluir&id=".$key['idEmprestimo']."'></a></td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>