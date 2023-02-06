<?php
require('conecta.php');

$id = $_GET['id'];
$query = "SELECT `nome`, `email`, `data_nasci`,`senha` FROM `usuario` WHERE `id`=$id";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) == 1) {
    $linha = mysqli_fetch_assoc($result);
    $nome = $linha['nome'];
    $email = $linha['email'];
    $data_nasci = $linha['data_nasci'];
    $senha = $linha['senha'];
}
   
 //escutar clique do botão alterar
   if(isset($_POST['alterar'])){
     $id = $_GET['id'];
     $nome = $POST['nome'];
     $email=$_POST['email'];
     $data_nasci = $POST['data_nasci'];
     $senha=$_POST['senha'];

     $query="UPDATE `usuario` SET `nome`='[$nome]',`email`='[$email]',`data_nasci`='[$data_nasci]', `senha`='[$senha]' WHERE `id`= '$id'";
     $result=mysqli_query($conexao, $query);
     header("location:index.php");
   }

?>
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
</head>
<body>
    <h1>Alterar</h1> -->


    <?php include('boot/head.php') ?>
<h1>Alteração</h1>
<div class="container p-4">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card card-body">

                <form action="altera.php?id=<?php echo $_GET['id'] ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="id" value="<?php echo $id ?>" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="nome" value="<?php echo $nome ?>">
                    </div>
                    <div class="form-group">
                        <textarea name="email" class="form-control" cols="30" rows="10" placeholder="email"><?php echo $email ?></textarea>
                    </div>
                    <input type="submit" value="Alterar" name="alterar" class="btn btn-block btn-secondary">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('boot/rodape.php') ?>

</html>
</html>