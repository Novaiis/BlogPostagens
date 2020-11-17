<?php
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

  <title>Blog De Notícias</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexlogin.php">Blog de Notícias</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

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

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bem vindo ao Blog de Noticias Relacionadas a TI</h1>
      <p class="lead">O blog tem o intuito de trazer ao usuario a interação com o mundo da informatica e se o usuario
        quiser também aplicar novos artigos ao blog!</p>
    </header>
<br><br><br><br>

        <div><h1>
        <a href="postagens2.php">Veja as postagens dos úsuarios</a></h1>
        </div>
</div>
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