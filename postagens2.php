<?php
  require_once 'ControleTodasPostagens.php';
  require 'verifica.php';

if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])):

?>
<!DOCTYPE php>
<php lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Postagens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/css.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

  </head>

  <body class="bod">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="indexlogin.php">Blog de Notícias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <a class="nav-link" href="indexlogin.php">Inicio
              <span class="sr-only"></span>
            </a>
            <li class="nav-item">
            <a class="nav-link" href="postar.php">Postar</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contato2.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="navbar-nav ml-auto">
    <a class="navbar-brand text-white"><?php echo $nomeUser; ?></a>
        <a class="nav-link" href="logout.php">Sair</a>
    </div>
    </nav>
    <!--div onde serão colocadas as postagens -->
    <?php
    foreach ($array_usuarios as $key => $value){
    ?>
    <div class="container mt-3 mb-5">
      <h1><?php echo $value['titulo_postagem']; ?></h1>
      <hr>
      <h3><?php echo $value['autor_postagem']; ?></h3>
      <hr>
      <p class="text-justify"><?php echo $value['conteudo_postagem']; ?></p>
    </div>
    <?php
      }
    ?>

    <!-- Footer -->
    <footer class="rodapi">
      <div class="container">
        <p class="m-0 text-center text-white">Feito por -- Lucas Novais</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</php>
<?php
else: header("Location: login.php"); endif;
?>