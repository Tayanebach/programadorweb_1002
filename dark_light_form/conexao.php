<?php

if(!isset($_SESSION)){
    session_start();
}

//variáveis para a conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancod="crud";

//fazendo a conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $bancod);

//testando se houve algum erro com a conexão
if (!$conexao) {
    echo "Erro ao conectar com o banco de dados: <br>";
}


?>