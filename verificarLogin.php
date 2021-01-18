<?php
include "connectdb.php";
session_start();
  /*log = loginho, sen = senha*/
  $log = isset($_SESSION['loginUsuario'])?$_SESSION['loginUsuario']:'';
  $sen = isset($_SESSION['senhaUsuario'])?$_SESSION['senhaUsuario']:'';

  if ($log != "" && $sen !== "") {
  	$date = mysqli_query($link,"select * from tb_usuario where email = '$log'");
  	while ($dados = mysqli_fetch_array($date)){
  		/*Dados do usuario logado Log = Logado*/
    		$nomeLog = $dados['nome'];
    		$emailLog = $dados['email'];
    		$senhaLog = $dados['senha'];
    }
  	
  }else{
  	header('location:user.php');
  }
?>