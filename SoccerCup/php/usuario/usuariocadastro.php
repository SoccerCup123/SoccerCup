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

$nome  = $_POST['name'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$saldo = 5;

$administrador_id  = $_SESSION['administrador_id'];// essa super global vem do verificadorLogin
$administrador_id  = 1;
$hoje = date('Y/m/d ');


$sql = "INSERT INTO `usuario`( `nome_completo`, `login`, `senha`, `saldo_atual`, `administrador_id`, `data_criacao`, `data_alteracao`) 
            VALUES ('$nome','$login','$senha','$saldo','$administrador_id','$hoje','$hoje')"; 


if(mysqli_query($connect, $sql)){
    echo "<h1>Cadastro Realizado com Sucesso !!!</h1>";
?>
<script>
alert("Cadastro Realizado com Sucesso !!!");
window.location.replace("http://localhost/SoccerCup/index.php?i=login");
</script>
<?php }else{
    echo "<h1>Erro</h1>";
} ?>