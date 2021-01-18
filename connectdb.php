<?php
/*Conexão com o banco de dados*/
$host = "localhost";  /*Host do banco de dados*/
$user = "root";       /*Usuario*/
$pass = "";           /*Senha*/
$db = "db_edukhack";  /*Nome do banco de dados*/

$link = mysqli_connect($host, $user, $pass, $db);
/*Verificação de erro*/

if (!$link) {
    printf("Can't connect to localhost. Errorcode: %d\n", mysqli_connect_errno());
}else{
	/*print("conexao bem sucedida");*/
}

?>