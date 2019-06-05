<?php
    session_start();
    include('connection.php');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cotações - UFSBRA Câmbio</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
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
          <h1 class="display-3 text-center">UFSBRA Câmbio</h1>
          <p class="text-center">"A melhor casa de câmbio com as melhores cotações do mercado, proporcionando um bom negócio na venda da compra de moedas estrangeiras!"</p>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <center><img src="../../../../moedas.jpg" class="img-fluid" alt="Imagem responsiva" style="max-width: 50%"></center>
            <h2 class="text-center">Moedas em espécie disponiveis</h2>
            <p class="text-center">A UFSBRA tem uma variedade enorme de moedas estrangeiras disponíveis para compra e venda no mercado. Verfique as informações de cada uma delas.</p>
            <p class="text-center"><a class="btn btn-warning" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <center><img src="../../../../pagamento.jpg" class="img-fluid" alt="Imagem responsiva" style="max-width: 50%"></center>
            <h2 class="text-center">Escolha a forma de pagamento de suas transações</h2>
            <p class="text-center">Todos os nossos clientes tem a opção de escolher o método de pagamento na compra de alguma moeda, tendo a escolha por dinheiro, por cartão de crédito e débito!</p>
            <p class="text-center"><a class="btn btn-warning" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <center><img src="../../../../central.png" class="img-fluid" alt="Imagem responsiva" style="max-width: 50%"></center>
            <h2 class="text-center">Central do Usuário</h2>
            <p class="text-center">Nosso sistema conta uma central de usuário contendo todas as operações realizadas no site como: status de pedidos de compra ou venda de moedas, histórico de suas transações até o momento, dados pessoais, entre outras informações.</p>
            <p class="text-center"><a class="btn btn-warning" href="#" role="button">Acessar Central de Usuário &raquo;</a></p>
          </div>
        </div>
      </div> <!-- /container -->
     <img src="../../../../negocios.jpeg" class="img-fluid" alt="Imagem responsiva" style="width:100%;">
      

    </main>

    <footer class="bg-dark">
      <p class="h6 text-center text-light pb-4 pt-4 mb-0">UFSBRA Câmbio - 2019 &copy; Todos os direitos reservados</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
