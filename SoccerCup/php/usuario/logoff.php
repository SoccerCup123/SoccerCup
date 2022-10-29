<?php
// session_start inicia a sessão
session_start();


if(isset($_SESSION['login'])){
    session_destroy();
    ?>
    <script>
    alert(" Até logo !!!");
    window.location.replace("http://localhost/SoccerCup/index.php?i=home");
    </script>

<?php
}
?>