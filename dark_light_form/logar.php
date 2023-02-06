<?php

require('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO `individuos`(`email`,`senha`) VALUES ('$nome','$email','$senha')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar: ";
} else {

    //enviar mensagem de resposta
    $_SESSION['msg'] = "usuario salva com sucesso!!!";
    $_SESSION['tipo_msg'] = "success";

    header("location: login.php");
}
