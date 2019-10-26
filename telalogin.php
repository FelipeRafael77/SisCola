<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>SisCola - Gerenciamento de Empréstimos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

<form method="POST" action="autenticalogin.php">
  <body class="text-center">
    <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>SisCola</h3>
                    
                        <div class="form-group">
                            <input type="text" name="login" class="form-control" placeholder="Login" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Entrar" />
                        </div>
                        <a href="cadlogin.php">Não possui cadastro? Inscreva-se aqui!</a>
                    </div>
            </div>
        </div>
        </form>
  </body>
</html>