<?php

$host= 'localhost';
$usuario= 'root';
$senha="";
$bancod='crud';

$conexao = mysqli_connect($host, $usuario, $senha, $bancod);

if (!$conexao) {
    echo "Erro ao conectar com o banco de dados: <br>";
}
else{
    echo "Conexão efetuada com sucesso";
}

?>