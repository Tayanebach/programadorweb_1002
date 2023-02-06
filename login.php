<?php

require("conexao.php");

if (isset($_POST['login'])) {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM `usuarios` WHERE `usuario`='$usuario' and `senha`='$senha'";

    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) >= 1) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['tipo_msg'] = 'primary';
        $_SESSION['msg'] = 'Bem vindo!';

        header("location: index.php");
    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        $_SESSION['tipo_msg'] = "danger";
        $_SESSION['msg'] = 'Usuário ou senha inválidos!!!';

        header("location:login.php");
    }
}
if (isset($_POST['salvar'])) {

    $email  = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO `usuarios`(`usuario`, `senha`) VALUES ('$email','$senha')";

    $result = mysqli_query($conexao, $query);

    //enviar mensagem de resposta
    $_SESSION['tipo_msg'] = "success";
    $_SESSION['msg'] = "Usuário cadastrado com sucesso!!!";

    /* unset($_SESSION['tipo_msg']);
    unset($_SESSION['msg']); */
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
    <div class="container">

        <?php if(isset($_SESSION['msg'])) { ?>

        <!--mensagem a mostrar -->
        <main class="container p-4">
            <div class="alert alert-<?php echo $_SESSION['tipo_msg'] ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['msg'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php /* unset($_SESSION['msg'], $_SESSION['tipo_msg']); */ } ?>
            <!-- Fim da mensagem a mostrar -->

            <div class="row justify-content-center">
                <div class="col-md-4 mt-auto">
                    <div class="card text-center mt-5">
                        <div class="card-header">
                            LOGIN
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Endereço de email</label>
                                    <input type="text" name="usuario" class="form-control"
                                        placeholder="voce@exemplo.com">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Senha</label>
                                    <input type="password" name="senha" class="form-control"
                                        placeholder="*************">
                                </div>
                                <input type="submit" value="Entrar" class="btn btn-primary btn-lg" name="login">
                                <div>
                                    <button type="button" class="btn btn-link" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@getbootstrap">Cadastre-se</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="email" class="col-form-label">E-mail:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Senha:</label>
                            <input type="password" class="form-control" name="senha" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Salvar" name="salvar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- bootstrap-->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script>
    $alerta = document.querySelector(".alert");
    if ($alerta) {
        setTimeout(() => {
            $alerta.remove();
        }, 2000);
    }
    </script>
</body>

</html>