<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EdukHack</title>

    <link rel="stylesheet" href="css/styles.css">
    
    <!--logo-->
    <link rel="shortcut icon" href="img/logo.svg">

</head>
<body>
	<style type="text/css">
		body{
			background-color: #C6C6C6;
		}
		#form{
			z-index: 10px;
			background-color: white;
		}
	</style>

    <header id="top">
		<?php include "script/header.php"; ?>
		<!--Ocultar a barra do menu-->
		<style type="text/css">
			#bottons{display: none;}
		</style>

	</header>
	<div id="form">
		<form action="login.php" method="post">
			<label>
				<input type="text" name="login" placeholder="Email" class="ent" required><br>
				<input type="password" name="senha" placeholder="Senha" class="ent" required><br>

				<label class="bt">
					<input type="submit" value=" Logar" class="btLogin">
                </label>
        </label>
    </form>

    <!--Cadastro-->
    <label>
        <a href="cadastro.php">Cadastre-se aqui!</a>
    </label>
</div>
</body>
</html>