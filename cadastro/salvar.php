<?php

require('conecta.php');


    $nome = $_POST['nome'];
    $email=$_POST['email'];
    $data_nasci = $_POST['data_nascimento'];
    $senha=$_POST['senha'];


$query = "INSERT INTO `usuario`(`nome`, `email`,`data_nasci`,`senha`) VALUES ('$nome','$email', '$data_nasci','$senha')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar: " ;
}else{

    //enviar mensagem de resposta
    $_SESSION['msg']= "usuario salva com sucesso!!!";
    $_SESSION['tipo_msg']= "success";

    header("location: index.php");   
}
