<?php

session_start();

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

$time1     =   $_SESSION['Time1_id'];
$time2     =   $_SESSION['Time2_id'];
$idJogo = $_SESSION['Campeonato_id'];
$userid    =     $_SESSION['login'];
$ValueFish =              $_GET['v']; 
$ValueText =              $_GET['b']; 
$idCan     =             $_GET['id']; 
$hoje = date('Y/m/d ');

$sql = "INSERT INTO `historicoAposta`(`idTime1`, `idTime2`, `pontos`, `idJogo`, `idUsuario`,`data`,`texto`)
 VALUES ('$time1','$time2','$ValueFish','$idJogo','$userid','$hoje','$ValueText')";

if(mysqli_query($connect, $sql)){
    echo "<h1>Cadastro Realizado com Sucesso !!!</h1>";
?>
<script>
alert("Boa sorte !!!");
window.location.replace("http://localhost/SoccerCup/index.php?i=historicosApostas");
</script>
<?php }else{
    echo "<h1>Erro</h1>";
} ?>
