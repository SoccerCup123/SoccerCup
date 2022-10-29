<?php 
header("Access-Control-Allow-Origin: *"); // erro de cors
$servername = "localhost";
$username ="root";
$passaword = "";
$db_name ="soccercup";


$connect = mysqli_connect($servername,$username,$passaword,$db_name);
mysqli_set_charset($connect, "utf8");
if (mysqli_connect_error()){
	echo "<h1>Erro na conexao</h1>".mysqli_connect_error();
}else{
	echo "<p>conexao ok</p>".mysqli_connect_error();
}

$pagina = 'login';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';
switch ($pagina) {
	case 'jogos':
		include 'app/views/jogos.php';
		break;
	case 'apostas':
		include 'app/views/apostas/apostas.php';
		break;
	case 'historicosApostas':
		include 'app/views/apostas/historicosApostas.php';
		break;	
    case 'cadastroUsuario':
		include 'app/views/usuario/cadastroUsuario.php';
		break;
	case 'tabela':
		include 'app/views/TabelaPontos/Tabela.php';
		break;
	case 'campeonatos':
		include 'app/views/campeonatos/campeonatos.php';
		break;		
	case 'finalizaAposta':
		include 'php/finalizarAposta.php';
		break;		
 	case 'login':
		include 'app/views/login.php';
		break;
	case 'logoff':
		include 'php/usuario/logoff.php';
		break;
	default:
		include 'app/views/login.php';
		break;
}
/* Carrega o footer.php */
include 'app/views/footer.php';
