<?php 

$pagina = 'login';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;

    case 'apostas':
		include 'app/views/apostas/apostas.php';
		break;
    case 'cadastroUsuario':
		include 'app/views/usuario/cadastroUsuario.php';
		break;
 	case 'login':
		include 'app/views/login.php';
		break;
	case 'logoff':
		include 'php/logoff.php';
		break;
	default:
		include 'app/views/login.php';
		break;
}
/* Carrega o footer.php */
include 'app/views/footer.php';
