   
   
   <header class="masthead text-black text-center">
     <div class="container d-flex align-items-center flex-column">

       <h1 class="text-uppercase mb-0">Copa do Mundo</h1>
       <img class="masthead-avatar mb-1" src="./assets/logo.png" alt="logo Soccer Cup" />

        <?php        
          $resulta = "SELECT * FROM pontos"; 
          $resultDados =  mysqli_query($connect,$resulta);
          
          if(($resultDados) AND ($resultDados->num_rows != 0)){
        ?>


       <table class="table table-striped table-bordered table-hover ">
         <thead>
           <tr>
             <h2>Fase de grupos da Copa do Mundo 2022</h2>
           </tr>
         </thead>
         <tbody>
            <tr class="text-center font-weight-bold ">
              <td class="align-middle">Nome</td>
              <td class="align-middle">Pontos</td>
            </tr>
            <?php
            while($row_usuario = mysqli_fetch_array($resultDados)){
            ?>
              <tr class="text-center">
              <td class="align-middle"><?php echo  $row_usuario['nome']; ?></td>
              <td class="align-middle"><?php echo  $row_usuario['pontos']; ?></td>
            </tr>   
            <?php } ?>    
          </tbody>
       </table>
      <?php } ?>
       <p class="masthead-subheading font-weight-light mb-0 text-uppercase">Aposte com seus Amigos!</p>
     </div>
   </header>