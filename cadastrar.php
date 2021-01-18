<?php
    include "connectdb.php";
    
    /*Pegando as variaveis do cadastramento*/
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cadastrar = false;

    if ($nome !="" && $email !="" && $senha !="") {
    	$cadastrar = true;
    	session_start();
    	$_SESSION['loginUsuario'] = $email;
    	$_SESSION['senhaUsuario'] = $senha;
    }else{
    	echo "sessão não iniciada";
    }

    if ($cadastrar) {
    	/*Inserao de dados no banco de dados*/
    	$sqlDate = "insert into tb_usuario(nome,email,senha)values('$nome','$email','$senha');";
    	mysqli_query($link,$sqlDate);
        header('location:index.php');

    }else{
    	echo "Error<br>";
    	echo "<a href='cadastro.php'>Cadastro</a><br>";
    }

?>