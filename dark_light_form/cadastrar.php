<?php

//SELECT * FROM `individuos` WHERE `nome`='$nome' and `email`='$email' and `senha`='$senha';

require('conexao.php');


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$senha = $_POST['senha'];


$query = "INSERT INTO `cadastro`(`nome`, `sobrenome`, `email`, `numero`, `senha`) VALUES ('$nome','$sobrenome','$email','$numero','$senha')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar: ";
} else {

    //enviar mensagem de resposta
    $_SESSION['msg'] = "usuario salva com sucesso!!!";
    $_SESSION['tipo_msg'] = "success";

    header("location: login.php");
}


?>