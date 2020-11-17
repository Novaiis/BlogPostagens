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

  <title>Postar</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="indexlogin.php">Inicio
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="postagens2.php">Postagens</a>
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
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h3 class="display-3">Faça sua postagem!</h1>
        <form action="ControleCadastrarPostagem.php" method="post">

          <p>
            <label>Titulo</label><br>
            <input type="text" name="titulo_postagem">
          </p>

          <p>
            <label>Autor</label><br>
            <input type="text" name="autor_postagem" value="<?php echo $auto;?> <?php echo $aut; ?>" readonly>
          </p>

          <p>
            <label>Conteúdo</label><br>
            <textarea name="conteudo_postagem" cols="100" rows="5"></textarea>
          </p>

          <input type="submit" name="publicar" class="btn btn-primary btn-lg" value="Publicar">

        </form>
    </header>
  </div>>
  <!-- Footer -->
  <footer class="rodapi">
    <div class="container">
      <p class="m-0 text-center text-white">Feito por -- Lucas Novais</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</php>
<?php
else: header("Location: login.php"); endif;
?>