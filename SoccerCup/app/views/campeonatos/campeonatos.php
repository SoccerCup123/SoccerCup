
  <section class="page-section portfolio" id="portfolio">
    <table class="table table-striped table-bordered table-hover ">
      <tbody>
        <div class="row justify-content-center">
          <tr class="text-center font-weight-bold ">
            <!-- Botões-->
            <?php     
                 
              $resulta = "SELECT * FROM campeonatos"; 
              $resultDados =  mysqli_query($connect,$resulta);
              if(($resultDados) AND ($resultDados->num_rows != 0)){
                while($row_usuario = mysqli_fetch_array($resultDados)){
              ?>
            <div class="col-md-3 col-lg-3 mb-3">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    
                    <td>
								    <a href="?i=jogos&id=<?php echo $row_usuario['id'];?>" class="btn  btn-sm " role="button" >
							      <img   class="img-fluid" src='imagens/<?php  echo  $row_usuario['imagem']; ?>'alt="..." />
                </div>
            </div>
          <?php }} ?> 
          </div>
        </tr> 
      </tbody>
    </table>
</section>

