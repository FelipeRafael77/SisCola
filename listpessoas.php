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
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Registro do Professor</th>
                    <th>Matrícula do Aluno</th>
                    <th>Status</th>
                    <th>Login</th>
                    <th>Tipo</th>
                </thead>
                <?php

                include_once 'pessoa.php';
                $pessoa = new Pessoa();

                $listPessoas=$pessoa->listarPessoa();

                foreach ($listPessoas as $key) {
                    echo "<tr><td>".$key['idPessoa']."</td><td>".$key['nomePessoa']."</td><td>".$key['rgPessoa']."</td><td>".$key['cpfPessoa']."</td><td>".$key['enderecoPessoa']."</td><td>".$key['telefonePessoa']."</td><td>".$key['registroProfessor']."</td><td>".$key['matriculaAluno']."</td><td>".$key['status']."</td><td>".$key['idLogin']."</td><td>".$key['idTipo']."</td></td></tr>";
                }
                ?>
            </table>

            <div class="text-center">
                <a class="btn btn-outline-dark" onClick="window.history.back();">Voltar</a>
            </div>

</body>
</html>