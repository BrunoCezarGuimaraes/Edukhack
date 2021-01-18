<?php
    /*login*/
    include "connectdb.php";

    session_start();

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $_SESSION['loginUsuario'] = $login;
    $_SESSION['senhaUsuario'] = $senha;

    if(isset($_SESSION['loginUsuario']) && isset($_SESSION['senhaUsuario'])){
    	$sql = mysqli_query($link, "select * from tb_usuario where email = '$login'");
    	/*verificação*/
    	while ($date = mysqli_fetch_array($sql)) {
    		$email = $date['email'];
    		$pass = $date['senha'];
    	}
        
        /*verificação de login e senha*/
        if ($login == $email && $senha == $pass) {
        	/*Sera direcionado para a parte do perfil do usuario*/
        	header('location:index.php');
        }else{
        	/*Direcionado caso não esteja cadastrado*/
            header('location:user.php');
        }


    }else{
    	/*mandar automaticamente o lugar do login*/
    	header('location:user.php');
    }

?>