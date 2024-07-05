<?php 
//definição de variáveis de conexão com o banco de dados 
$host = 'localhost';
$username = 'root';
$pass = '';
$database = 'formularioteste';

//conexão feita com o database
$conexao = new mysqli($host, $username, $pass, $database);

/*
teste para verificar conexão com o database

if($conexao->connect_errno){
    echo "erro";
} else {
    echo "conexão efetuada com sucesso";
}

*/

?>