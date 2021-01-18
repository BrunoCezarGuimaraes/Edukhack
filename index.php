<?php
    /*verificação se esta longado ou não*/
    include "verificarLogin.php";
?>
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
	<!--Corpo principal da página-->
	<div id="content">
		<!--Cabeçalho-->
		<header id="top">
			<?php include "script/header.php"; ?>
		</header>
		<!--Conteúdo-->
		<div id="mid">
			<?php include "script/middle.php"; ?>
		</div>
        
        <!--Rodapé--->
		<footer id="low">
		    <?php include "script/footer.php"; ?>
		</footer>

	</div>

</body>
</html>