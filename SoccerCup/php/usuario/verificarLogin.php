<?php
            // session_start inicia a sessão
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


            $login = $_POST['login'];
            $senha = $_POST['senha'];
           
            //testan se o  usuário que está logando
            $sqlFun = "SELECT * FROM `usuario` WHERE login = '$login' and senha = '$senha'"; 
            
            $resultadoFun = mysqli_query($connect, $sqlFun);
            
            mysqli_num_rows($resultadoFun) > 0;
            $dadosFun = mysqli_fetch_array($resultadoFun);
            
            if($login == $dadosFun['login'] &&  $senha == $dadosFun['senha']){
               $_SESSION['login'] = $dadosFun['id'] ;
               ?>
               <script>
               window.location.replace("http://localhost/SoccerCup/index.php?i=campeonatos&id=<?php echo $dadosFun['id']?>");
               </script>
            <?php
            }else{
               ?>
               <script>
                  document.body.style.backgroundColor = "black";
                  alert("Senha ao Login estão errados !!!");
                  window.location.replace("http://localhost/SoccerCup/index.php?i=login");
               </script>
               <?php
            }
             
         

          
