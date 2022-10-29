  <?php
    //Campo para super globais  Cuidado 
    session_start();
    $_SESSION['Time1_id'];
    $_SESSION['Time2_id'];
    $_SESSION['Pontos'];
    $_SESSION['Campeonato_id'];
    $_SESSION['Usuario_id'];
  ?>
   
   <header class="masthead text-black text-center">
     <div class="container d-flex align-items-center flex-column">

       <h1 class="text-uppercase mb-0">Copa do Mundo</h1>
       <img class="masthead-avatar mb-1" src="./assets/logo.png" alt="logo Soccer Cup" />

       <table class="table table-striped table-bordered table-hover ">
         <thead>
           <tr>
             <h2>Jogos 2022</h2>
           </tr>
         </thead>

         <tbody>
           <tr class="text-center font-weight-bold ">
             <td class="align-middle">Data</td>
             <td class="align-middle">Estádio</td>
             <td class="align-middle">Seleções</td>
             <td class="align-middle"></td>
           </tr>
            
           <?php     
              $_SESSION['Campeonato_id'] = $_GET['idJogo']; 
              $idCan = $_GET['idJogo']; 
              $resulta = "SELECT * FROM jogos jogos INNER JOIN times times INNER JOIN 
              campeonatos campeonatos ON (jogos.idTime1 = times.id ) 
              AND jogos.id = $idCan AND campeonatos.id = jogos.idCampeonato;"; 
          
              $resultDados =  mysqli_query($connect,$resulta);
              if(($resultDados) AND ($resultDados->num_rows != 0)){
                while($row_usuario = mysqli_fetch_array($resultDados)){
            ?>

           <tr class="text-center">
             <td class="align-middle"><?php echo $row_usuario['data'];?></td>
             <td class="align-middle"><?php echo $row_usuario['estadio'];?></td>
             <td class="align-middle">
             <?php 
             $idtime1  =  $row_usuario['idTime1'];
             $idtime2  =  $row_usuario['idTime2'];
             $_SESSION['Time1_id'] = $row_usuario['idTime1'];
             $_SESSION['Time2_id'] = $row_usuario['idTime2'];

             $resulta1 = "SELECT * FROM times where id = $idtime1  ";
             $resulta2 = "SELECT * FROM times where id = $idtime2  ";  
             $resultDados1 =  mysqli_query($connect,$resulta1);
             $resultDados2 =  mysqli_query($connect,$resulta2);
             if(($resultDados1) AND ($resultDados1->num_rows != 0)){
                $row_usuario1 = mysqli_fetch_array($resultDados1);
                $row_usuario2 = mysqli_fetch_array($resultDados2);

                
             ?>
               <div id ="Vitoriatime1"  type="button" class="btn btn-success mr-lg-3">Vitoria </div>
               <img src="imagens/<?php echo $row_usuario1['imagem'];?>" class="rounded-circle img-hidden" alt="Senegal" height="24" width="24">
               
               <span id="time1" ><?php echo $row_usuario1['nome'];?></span>
               <button id="empate" type="button" class="btn btn-success ml-lg-3">Empate</button> 
               <span id="time2" ><?php echo $row_usuario2['nome'];?></span>
               
               <img src="imagens/<?php echo $row_usuario2['imagem'];?>" class="rounded-circle img-hidden" alt="Holanda" height="24" width="24">
               <div id = "Vitoriatime2" type="button" class="btn btn-success mr-lg-3">Vitoria </div>
             </td>
             <?php }  ?>
             <td class="align-middle">
             <button id="finalizar" class="btn btn-warning btn-sm" >
                <i class="fas fa-pencil-alt"></i>&nbsp;Apostar</a>
             </button> 
             </td>
           </tr>
           
           <span id ="escolha" class="alert alert-success" role="alert">Escola um time</span>
           <span id ="escolha1" hidden class="alert alert-success" role="alert">...</span>
       
           <?php  }} ?>
         </tbody>
       </table>
       <p class="masthead-subheading font-weight-light mb-0 text-uppercase">Aposte com seus Amigos!</p>
     </div>
   </header>
   
   
   <script>
   
    window.onload=function(){

      let TextoTimes;

      let Vitoriatime1 = document.getElementById("Vitoriatime1"); 
      let Vitoriatime2 = document.getElementById("Vitoriatime2");
      let Empate = document.getElementById("empate");
      let Finalizar = document.getElementById("finalizar");

      let valueRand1 = Math.floor(Math.random() * 40 + 1);
      let valueRand2 = Math.floor(Math.random() * 20 + 1);
      let valueRand3 = Math.floor(Math.random() * 10 + 1);

      ButtonValit();
      
      Vitoriatime1.onclick = function () {
        var time1 = document.getElementById('time1').innerText;
        TextoTimes = "Vitória_do_" + time1 
        document.querySelector('#escolha').textContent = "Vitória do " + time1 + " Pontos = "+ valueRand1;
        document.querySelector('#escolha1').textContent =  valueRand1;
        ButtonValit();
      }
      Vitoriatime2.onclick = function () {
        var time2 = document.getElementById('time2').innerText;
        TextoTimes = "Vitória_do_" + time2;
        document.querySelector('#escolha').textContent = "Vitória do " + time2 + " Pontos =  "+ valueRand3;
        document.querySelector('#escolha1').textContent =  valueRand3;
        ButtonValit();
      }
      Empate.onclick = function () {
        TextoTimes = "Empate"; 
        document.querySelector('#escolha').textContent = "Empate  Pontos = " + valueRand2 ;
        document.querySelector('#escolha1').textContent = valueRand2 ;
        ButtonValit();
      }
      Finalizar.onclick = function () {
        document.querySelector('#escolha').textContent = "Aqui  ";
        let valueFish = document.getElementById('escolha1').innerText;
        window.location.replace("http://localhost/SoccerCup/?i=finalizaAposta&id=<?php echo $idCan;?>&v="+valueFish+"&b="+TextoTimes);
      }
    }
    function ButtonValit(){
      let checkAposta = document.querySelector('#escolha').textContent;
      let checkButtonAposta = document.querySelector('#finalizar');

      if(checkAposta == "Escola um time"){
        checkButtonAposta.setAttribute("disabled", "disabled");
      }else{
        checkButtonAposta.removeAttribute("disabled");
      }
    }
</script>