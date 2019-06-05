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
  <link rel="icon" href="icons/favicon.ico"> <!-- alterei -->
  <link rel="stylesheet" href="styles/vendas.css">

  <title>Compras - UFSBRA Câmbio</title>

  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!-- Include SmartWizard CSS -->
  <link href="styles/smart_wizard.css" rel="stylesheet" type="text/css" />
    
  <!-- Optional SmartWizard theme -->
  <link href="styles/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
    
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
        <h1 class="display-3 text-center">Venda de Moedas Estrangeiras</h1>
      </div>
    </div>

    <!-- olar -->

    <div class="container">
      <br />
      <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

        <!-- SmartWizard html -->
        <div id="smartwizard">
          <ul>
            <li><a href="#step-1">Passo 1<br /><small>Seleionar pedido</small></a></li>
            <li><a href="#step-2">Passo 2<br /><small>Selecionar pagamento</small></a></li>
            <li><a href="#step-3">Passo 3<br /><small>Endereço de entrega</small></a></li>
            <li><a href="#step-4">Passo 4<br /><small>Finalizar pedido</small></a></li>
          </ul>

          <div>
            <div id="step-1">
              <h2>Pedido:</h2>


              <div id="form-step-0" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="moeda">Moeda Desejada:</label>
                  <input type="number" class="form-control" name="moeda" id="moeda" placeholder="Selecione a moeda que deseja comprar" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div id="form-step-0" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="quantia">Valor Desejado:</label>
                  <input class="form-control" name="quantia" id="quantia" placeholder="Digite a quantia da moeda que deseja" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-12" style="margin:0 auto 0 auto;">
                  <div class="row" style="text-align:center;">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-6 " style="margin: 30px auto 30px auto; ">
                      <img src="Imagens/us-flag.png" class="product-image" style=" height:60px; width:60px;">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-6" style="margin: 30px auto 30px 0;">
                      <input class="form-control" style="width:200px; height:40px;" type="text" placeholder="Readonly input here…" readonly>
                    </div>
                  </div>
                </div>
              </div>

            </div>




            <div id="step-2">
              <h2>Pagamento</h2>
              <div id="form-step-1" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="moeda">Forma de Pagamento:</label>
                  <input type="number" class="form-control" name="moeda" id="forma_pgto" placeholder="Selecione a forma de pagamento" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div id="form-step-1" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="quantia">Número do Cartão:</label>
                  <input class="form-control" name="quantia" id="card_number" placeholder="Digite o número do cartão" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div id="form-step-1" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="quantia">Validade:</label>
                  <label for="quantia" style="margin-left:30%" ;>CVV:</label>
                  <div class="row" style="padding-left:3%;">

                    <input class="form-control" style="width:30%; margin-right:11%;" name="quantia" id="validade" placeholder="Data" required>

                    <input class="form-control" style="width:30%;" name="quantia" id="cvv" placeholder="Código CVV" required>

                  </div>

                  <div class="help-block with-errors"></div>
                </div>
              </div>


            </div>



            <div id="step-3">
              <h2>Your Address</h2>
              <form>


                <div class="form-group">
                  <label class="my-1 mr-2 font-weight-bold" style="font-weight:normal!important;" for="inlineFormCustomSelectPref">Endereço:</label>
                  <div class="input-group">
                    <input type="text" style="font-weight:normal!important;" class="form-control" id="end" placeholder="Digite seu endereco" required autofocus />
                    <span class="input-group-addon" style="font-weight: normal!important;"><span class="glyphicon glyphicon-lock"></span></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="my-1 mr-2 font-weight-bold" style="font-weight: normal!important;" for="inlineFormCustomSelectPref">Cidade:</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="cidade" placeholder="Valid Card Number" required autofocus />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  </div>
                </div>

                <div class="form-group" style="position:relative;">
                  <div style="display:block;">

                    <label class="my-1 mr-2 font-weight-bold" style="font-weight: normal!important;" for="inlineFormCustomSelectPref">Estado:</label>
                    <label style="padding-left:55px; font-weight: normal!important;" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">CEP:</label>

                    <div style="position:absolute;">
                      <input type="text" class="form-control" style="font-weight: normal!important;" id="estado" placeholder="SP" required />
                    </div>

                    <div style="position:absolute; left:120px;">
                      <input type="text" style="width:150px; font-weight: normal!important;" class="form-control" id="cep" placeholder="YY" required />
                    </div>

                    <div style="position:absolute; left:300px;">
                      <label> <input type="checkbox" checked="checked" name="sameadr"> Salvar Endereço </label>
                    </div>

                  </div>
                </div>

              </form>

            </div>


            <div id="step-4" class="sw-main sw-theme-dots">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <div class="center-wrapper">
                <div class="content">

                  <div class="bag-product">
                    <div>
                      <img src="images/us-flag.png" class="product-image">
                    </div>
                    <div class="description">
                      <p class="product-code small muted">código do pedido: SS022592000</p>
                      <h1 id="resumo-pedido">Resumo do pedido:</h1>

                      <p class="description-text">United States dollar</p>

                      <div class="quantity-wrapper">
                        <div>
                          <p style="margin-bottom:">Valor desejado:</p>
                          <h3>$825.00 (USD)</h3>


                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="bag-total">

                    <div class="delivery">
                      <p class="small">Entrega padrão ( 4 dias úteis) - gratuita<br>


                    </div>
                    <div class="total">
                      <h3>Total:</h3>
                      <h3>R$ 3.399,00 </h3>
                    </div>

                    <div class="acc-type-address">
                      <div class="acc-payment-address-header"><span class="acc-payment-open-icon"></span><strong class="acc-payment-title">Endereço <br>
                          <span class="acc-payment-featured">
                            Nome Cliente
                          </span>
                        </strong></div>
                      <div class="acc-payment-address-body">
                        <p>
                          Rua x, 1400
                          <br>
                          Complemento ou referências
                          <br>
                          Bairro
                          <br>
                          Cidade, SP
                          <br>CEP: xxxxxxxx
                        </p>
                      </div>
                    </div>


                  </div>

                </div>
              </div>


            </div>
          </div>
        </div>

      </form>

    </div>






  </main>

  <footer class="bg-dark" style="margin-top:100px;">
    <p class="h6 text-center text-light pb-4 pt-4 mb-0">UFSBRA Câmbio - 2019 &copy; Todos os direitos reservados</p>
  </footer>

  <!-- Include jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include jQuery Validator plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


  <!-- Include SmartWizard JavaScript source -->
  <script type="text/javascript" src="js/jquery.smartWizard.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Toolbar extra buttons
      var btnFinish = $('<button type="button" class="btn btn-dark">Dark</button>').text('Finalizar')
        .addClass('btn btn-info')
        .on('click', function() {
          if (!$(this).hasClass('disabled')) {
            var elmForm = $("#myForm");
            if (elmForm) {
              elmForm.validator('validate');
              var elmErr = elmForm.find('.has-error');
              if (elmErr && elmErr.length > 0) {
                alert('Por favor, preencha o formulário corretamente!');
                return false;
              } else {
                alert('Seu pedido foi realizado!');
                elmForm.submit();
                return false;
              }
            }
          }
        });
      var btnCancel = $('<button></button>').text('Cancel')
        .addClass('btn btn-danger')
        .on('click', function() {
          $('#smartwizard').smartWizard("reset");
          $('#myForm').find("input, textarea").val("");
        });



      // Smart Wizard
      $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        transitionEffect: 'fade',
        toolbarSettings: {
          toolbarPosition: 'bottom',
          toolbarExtraButtons: [btnFinish /*, btnCancel*/ ]
        },
        anchorSettings: {
          markDoneStep: true, // add done css
          markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
          removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
          enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        }
      });

      $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        var elmForm = $("#form-step-" + stepNumber);
        // stepDirection === 'forward' :- this condition allows to do the form validation
        // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
        if (stepDirection === 'forward' && elmForm) {
          elmForm.validator('validate');
          var elmErr = elmForm.children('.has-error');
          if (elmErr && elmErr.length > 0) {
            // Form validation failed
            return false;
          }

          var moeda = $('#moeda'),
            quantia = $('#quantia'),
            forma_pgto = $('#forma_pgto'),
            card_number = $('#card_number'),
            validade = $('#validade'),
            cvv = $('#cvv'),
            endereco = $('#end'),
            cidade = $('#cidade'),
            estado = $('#estado'),
            cep = $('#cep');



          if ((moeda.val() == "" || quantia.val() == "") && stepNumber == 0) {
            return false;
          }

          if ((forma_pgto.val() == "" || card_number.val() == "" || validade.val() == "" || cvv.val() == "") && stepNumber == 1) {
            return false;
          }

          if (endereco.val() == "" || cidade.val() == "" || estado.val() == "" || cep.val() == "") {
            return false;
          }


        }
        return true;
      });

      $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
        // Enable finish button only on last step
        if (stepNumber == 3) {
          $('.btn-finish').removeClass('disabled');
        } else {
          $('.btn-finish').addClass('disabled');
        }
      });

    });
  </script>
</body>

</html>
