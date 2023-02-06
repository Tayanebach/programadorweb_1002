<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_my_password_re_ydq7.svg" alt="">
        </div>
        <div class="form">
            <form action="../cadastrar.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Primeiro Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="numero">Celular</label>
                        <input id="numero" type="tel" name="numero" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmar">Confirme sua Senha</label>
                        <input id="confirmar" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>
                <div class="botao">
                    <input type="submit" name="salvar" value="Continuar">
                </div>

                 <!--o que eu tinha feito?
                  <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>  
                css/.botao input[type="submit"] -->
            </form>
        </div>
    </div>
</body>

</html>
