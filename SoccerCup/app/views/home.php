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
              $idCan = $_GET['id']; 
              $resulta = "SELECT times.nome, jogos.data, jogos.estadio FROM jogos jogos INNER JOIN times times INNER JOIN 
              campeonatos campeonatos ON (jogos.idTime1 = times.id OR jogos.idTime2 = times.id) 
              AND jogos.idCampeonato = $idCan  AND campeonatos.id = jogos.idCampeonato;"; 

              $resultDados =  mysqli_query($connect,$resulta);
              if(($resultDados) AND ($resultDados->num_rows != 0)){
                while($row_usuario = mysqli_fetch_array($resultDados)){
            ?>

           <tr class="text-center">
             <td class="align-middle"><?php echo $row_usuario['data'];?></td>
             <td class="align-middle"><?php echo $row_usuario['estadio'];?></td>
             <td class="align-middle">
               <img src="" class="rounded-circle img-hidden" alt="Senegal" height="24" width="24">
               <span><?php echo $row_usuario['nome'];?> vs <?php echo $row_usuario['nome'];?></span>
               <img src="" class="rounded-circle img-hidden" alt="Holanda" height="24" width="24">
             </td>
             <td class="align-middle">
               <a href="?i=apostas" class="btn btn-warning btn-sm" role="button">
                 <i class="fas fa-pencil-alt"></i>&nbsp;Apostar</a>
             </td>
           </tr>

           <?php  }} ?>
         </tbody>
       </table>
       <p class="masthead-subheading font-weight-light mb-0 text-uppercase">Aposte com seus Amigos!</p>
     </div>
   </header>