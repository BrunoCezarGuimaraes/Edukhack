<?php
/*Pegado o valor da pagina*/
$pagina = isset( $_GET['page'] ) ? $_GET['page'] : "";

/*Dependo do valor da pagina ira ir para um dos conteudos*/
switch ($pagina) {
	case 1:
		include "cont/home.php";
		break;
	case 2:
		include "cont/perfil.php";
		break;	
	case 3:
		include "cont/design.php";
		break;
	case 4:
		include "cont/ensinomedio.php";
		break;
	case 5:
		include "cont/educacaosexual.php";
		break;
	case 6:
		include "cont/financas.php";
		break;
	case 7:
		include "cont/empreendorismo.php";
		break;
	case 8:
		include "cont/beleza.php";
		break;
					
	default:
		include "cont/home.php";
		break;
}
?>