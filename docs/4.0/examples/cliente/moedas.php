<?php
    session_start();
    include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/favicon.ico">

  <title>Moedas - UFSBRA Câmbio</title>

  <!-- Custom styles for this template -->
  <link href="styles/jumbotron.css" rel="stylesheet">
    
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
    
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img style="height: 50px" src="Imagens/cambio.png" class="img-fluid pr-3">
    <a class="navbar-brand" href="#">UFSBRA Câmbio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="compras.php">Compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cotacoes.php">Cotações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informacoes.php">informações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="moedas.php">Moedas</a>
        </li>
      </ul>
      <?php
        if(isset($_SESSION['usuario_cpf'])) {
        ?>
            <a href="../cliente/Central_1.html"><button class="btn btn-success my-2 my-sm-0 mr-sm-2" type="submit"><img src="Imagens/central_user.png" width="30px" height="30px"> Seja Bem Vindo <b><?php echo $_SESSION['usuario_nome'] ?></b></button></a>
            <a href="../cliente/logout.php"><button class="btn btn-danger my-1 my-sm-0" type="submit" style="height:43px;">Sair</button></a>
      <?php
        } else {   
       ?>
            <a href="../cadastro_login/login.php"><button class="btn btn-success my-2 my-sm-0 mr-sm-2" type="submit">Login</button></a>
            <a href="../cadastro_login/cadastro.php"><button class="btn btn-danger my-1 my-sm-0" type="submit">Cadastrar</button></a>
       <?php
        }
       ?>
    </div>
  </nav>

  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-white">
        <h1 class="display-3 text-center">Moedas Estrangeiras</h1>
      </div>
    </div>
    <div class="container">
      <p class="h5 text-center">Lista de Moedas Estrangeiras disponível para Compra na UFSBRA Câmbio</p>
      <hr>
      <div class="card-deck">
        <div class="card border-0">
          <center><img class="card-img-top mt-3" src="Imagens/us-flag.png" style="width:100px"></center>
          <div class="card-body">
            <h5 class="card-title text-center"><b>USD</b> - Dólar Americano</h5>
            <h6 class="card-title text-center">Estados Unidos</h6>
          </div>
        </div>
        <div class="card border-0">
          <center><img class="card-img-top rounded-circle" src="Imagens/japan_flag.png"></center>
          <div class="card-body">
            <h5 class="card-title text-center"><b>JPY</b> - Iene</h5>
            <h6 class="card-title text-center">Japão</h6>
          </div>
        </div>
        <div class="card border-0">
          <center><img class="card-img-top mt-3" src="Imagens/canada_flag.png" alt="Imagem de capa do card" style="width:100px"></center>
          <div class="card-body">
            <h5 class="card-title text-center"><b>CAD</b> - Dólar Canadense</h5>
            <h6 class="card-title text-center">Canadá</h6>
          </div>
        </div>
        <div class="card border-0">
          <center><img class="card-img-top mt-3" src="Imagens/brazil_flag.png" alt="Imagem de capa do card" style="width:100px"></center>
          <div class="card-body">
            <h5 class="card-title text-center"><b>BRL</b> - Real</h5>
            <h6 class="card-title text-center">Brasil</h6>
          </div>
        </div>
        <div class="card border-0">
          <center><img class="card-img-top mt-3" src="Imagens/britain_flag.png" alt="Imagem de capa do card" style="width:100px"></center>
          <div class="card-body">
            <h5 class="card-title text-center"><b>GBP</b> - Libra Esterlina</h5>
            <h6 class="card-title text-center">Reino Unido</h6>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-dark">
    <p class="h6 text-center text-light pb-4 pt-4 mb-0">UFSBRA Câmbio - 2019 &copy; Todos os direitos reservados</p>
  </footer>

  <!-- Include jQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
