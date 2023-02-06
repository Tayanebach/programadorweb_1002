<?php

require('conexao.php');

if(isset($_POST ['salvar']));
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$query = "INSERT INTO `tarefa`(`titulo`, `descricao`) VALUES ('$titulo','$descricao')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar: " ;
}else{

    //enviar mensagem de resposta
    $_SESSION['msg']= "Tarefa salva com sucesso!!!";
    $_SESSION['tipo_msg']= "success";

    header("location: index.php");   
}
