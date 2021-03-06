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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" />

  <title>Central de Usuário - UFSBRA Câmbio</title>

  <!-- Custom styles for this template -->
  <link href="styles/jumbotron_central.css" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
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
    <div class="container-fluid">
      <div class="row">
        <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
          <ul class="sidenav admin-sidenav list-unstyled">
            <li><a href="#">Meus Pedidos</a></li>
            <li><a href="#">Dados Pessoais</a></li>
            <li><a href="#">Ajuda</a></li>
          </ul>
        </div> <!-- /#admin-sidebar -->
        <div id="admin-main-control" class="col-md-10 p-x-3 p-y-1">
          <div class="content-title m-x-auto">
            <i class="fa fa-dashboard"></i> Dados Pessoais
          </div>
          <p class="display-4">Informações pessoais</p>
          <!------ Include the above in your HEAD tag ---------->

          <form class="form-horizontal">
            <fieldset>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-12 control-label" for="textinput">Nome</label>
                <div class="col-md-12">
                  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">

                </div>
              </div>

              <!-- Multiple Radios (inline) -->
              <div class="form-group">
                <label class="col-md-12 control-label" for="radios">Gênero</label>
                <div class="col-md-12">
                  <label class="radio-inline" for="radios-0">
                    <input type="radio" name="radios" id="radios-0" value="Male" checked="checked">
                    Male
                  </label>
                  <label class="radio-inline" for="radios-1">
                    <input type="radio" name="radios" id="radios-1" value="Female">
                    Female
                  </label>
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-12 control-label" for="selectbasic">Nacionalidade</label>
                <div class="col-md-12">
                  <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                  </select>
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="control-label col-md-12" for="registration-date">Data de nascimento:</label>
                <div class="col-md-12">
                  <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="registration_date" id="registration-date" type="date">
                  </div>
                </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-12 control-label" for="textarea">Endereço</label>
                <div class="col-md-12">
                  <textarea class="form-control" id="textarea" name="textarea"></textarea>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-12 control-label" for="textinput">Telefone</label>
                <div class="col-md-12">
                  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">

                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-12 control-label" for="singlebutton"></label>
                <div class="col-md-12">
                  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Editar</button>
                </div>
              </div>

            </fieldset>
          </form>

        </div> <!-- /#admin-main-control -->
      </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
  </main>

  <footer class="bg-dark">
    <p class="h6 text-center text-light pb-4 pt-4 mb-0">UFSBRA Câmbio - 2019 &copy; Todos os direitos reservados</p>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Include jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
