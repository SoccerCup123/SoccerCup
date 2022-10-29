<?php


session_start();


header("Access-Control-Allow-Origin: *"); // erro de cors
$servername = "localhost";
$username ="root";
$passaword = "";
$db_name ="soccercup";
$userid  =  $_SESSION['login'];

$connect = mysqli_connect($servername,$username,$passaword,$db_name);
?>
  <header class="masthead text-black text-center">
                <div class="container d-flex align-items-center flex-column">
                    <div class="card">
<?php      
    $resulta = "SELECT * FROM historicoAposta WHERE historicoAposta.idUsuario = $userid ORDER BY id DESC ;"; 
    $resultDados =  mysqli_query($connect,$resulta);

    if(($resultDados) AND ($resultDados->num_rows != 0)){
        while($row_usuario = mysqli_fetch_array($resultDados)){
        
?>
          
    <table class="table table-success table-striped ">    
        <tbody>      
            <?php
            $idtime1  =  $row_usuario['idTime1'];
            $idtime2  =  $row_usuario['idTime2'];
            $resulta1 = "SELECT * FROM times where id = $idtime1  ";
            $resulta2 = "SELECT * FROM times where id = $idtime2 ";  
            $resultDados1 =  mysqli_query($connect,$resulta1);
            $resultDados2 =  mysqli_query($connect,$resulta2);
            if(($resultDados1) AND ($resultDados1->num_rows != 0)){
               $row_usuario1 = mysqli_fetch_array($resultDados1);
               $row_usuario2 = mysqli_fetch_array($resultDados2);
            ?>
            <tr class="text-center">
            <td class="table-info">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row_usuario['texto'];?></h5>
                <img src="imagens/<?php echo $row_usuario1['imagem'];?>" class="rounded-circle img-hidden" alt="Senegal" height="24" width="24">
                <span><?php echo $row_usuario1['nome'];?> vs <?php echo $row_usuario2['nome'];?></span>
                <img src="imagens/<?php echo $row_usuario2['imagem'];?>" class="rounded-circle img-hidden" alt="Holanda" height="24" width="24">
                </br>
                <span>Pontos <?php echo $row_usuario['pontos'];?></span>
                </br>
                <span><?php echo $row_usuario['data'];?></span>
                </br>

            </div>
        </td>    
        </tr>
        </tbody>
    </table>
<?php }}} ?>
        </div>
    </div>  
</header>   