<?php

require("conexao.php");

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM `cadastro` WHERE `email`= '$email' and `senha`='$senha'";

    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) >= 1) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        $_SESSION['tipo_msg'] = "success";
        $_SESSION['msg'] = 'Bem vindo!!!';

        header("location: formulario/index.php");


    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        //msg de resposta
        $_SESSION['tipo_msg'] = "danger";
        $_SESSION['msg'] = 'Usuário ou senha inválidos!!!';

        header("location:login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login Dark/Light Mode</title>
</head>

<body>

    <main id="container">
        <form id="login_form" action="login.php" method="post">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <!-- SOCIAL MEDIA LINKS -->
            <div id="social_media">
                <!-- FACEBOOK -->
                <a href="#">
                    <img src="assets/imgs/facebook.png" alt="">
                </a>

                <!-- GOOGLE -->
                <a href="#">
                    <img src="assets/imgs/google.png" alt="Google logo">
                </a>

                <!-- GITHUB -->
                <a href="#">
                    <img src="assets/imgs/github.png" alt="">
                </a>
            </div>

            <!-- INPUTS -->
            <div id="inputs">
                <!-- NAME -->
                <!-- <div class="input-box">
                    <label for="nome">
                        Name
                        <div class="input-field">
                            <form action="login.php" method="post">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="nome" name="nome">
                        </div>
                    </label>
                </div> -->

                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>

                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="senha">
                        Password
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="senha" name="senha">
                        </div>
                    </label>

                    <!-- FORGOT PASSWORD -->
                    <div id="forgot_password">
                        <a href="#">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" name="login" id="login_button">
                Login
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>