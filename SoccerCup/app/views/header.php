  <?php
    // Verifica se está logado ou não-->


    session_start();
    $id = $_GET['id'];
    // Verifica se a session não for igual a false-->
    if (!isset($_SESSION['login']) == false)  {
        $nomeCampo = 'Sair';
        $link = '?i=logoff';
        $linkSoccer = 'campeonatos';
    }

    // Verifica se a session não for igual a true-->
    if (!isset($_SESSION['login']) == true) {
        $nomeCampo = 'LOGIN';
        $link = '?i=login';
        $linkSoccer = 'login';
        if($id != "login" || $id != "cadastroUsuario" ){
        ?>
        <script>
        window.location.replace("http://localhost/SoccerCup/index.php?i=login");
        break;
        </script>
    <?php
      }
    }
    ?>

 <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Soccer Cup</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
      type="text/css" />


    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/tabelas.css" rel="stylesheet" />

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg menu text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a href="?i=<?php echo $linkSoccer ?>" class="navbar-brand">Soccer Cup</a>
        <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
          aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <div id="btnSairLogin" class="nav-item mx-0 mx-lg-1 text-white"><a
                class="nav-link py-3 px-0 px-lg-3 rounded text-white" onclik
                href="<?php echo $link ?>"><?php echo $nomeCampo ?></a></div>
          </ul>

        </div>

      </div>

    </nav>