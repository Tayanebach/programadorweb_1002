<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>

</head><?php require("conecta.php") ?>
<?php include("./boot/head.php") ?>

<?php
if (isset($_SESSION['msg'])) { ?>

<!--mensagem a mostrar -->
<main class="container p-4">
    <div class="alert alert-<?php echo $_SESSION['tipo_msg'] ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['msg'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php session_unset();
} ?>
    <!-- Fim da mensagem a mostrar -->


    <body>
        <h1>Cadastro</h1>
        <h2>Preencha o seu Cadastro:</h2>

        <form action="salvar.php" method="post">

            <div class="form-group">
                <h6>Seu nome:</h6>
                <input type="text" name="nome" placeholder="Nome" class="form-control">
            </div>

            <div class="form-group">
                <h6>Seu melhor E-mail:</h6>
                <input type="email" class="form-control" name="email" placeholder="voce@exemplo.com">
            </div>

            <div class="form-group">
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" required class="form-control">
            </div>

            <div class="form-group">
                <h6>Sua senha:</h6>
                <input type="password" placeholder="senha" name="senha" class="form-control">
            </div>
            <input type="submit" value="Confirmar cadastro" class="btn btn-block btn-success">
        </form>



        <table class="table table-bordered">
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>

            <?php
                //require("conecta.php");
                $query = "SELECT * FROM `usuario`";
                $resultados = mysqli_query($conexao, $query);
                while ($linha = mysqli_fetch_assoc($resultados)) { ?>
            <tr>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['email']; ?></td>
                <td><?php echo $linha['data_nasci']; ?></td>

                <td>
                    <br></br>

                    <a href="altera.php?id=<?= $linha['id'] ?>" class="btn btn-secondary">
                        Editar
                        <i class="fas fa-marker"></i>
                    </a>

                </td>
            </tr>
            <?php } ?>
        </table>
        </div>
        </div>



        <!-- </body>
</html> -->

        <?php include("./boot/rodape.php") ?>