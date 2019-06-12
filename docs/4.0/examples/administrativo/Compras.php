<?php
    session_start();
    include('connection.php');

    mysqli_set_charset($conn,"utf8");
    $consulta_sql="select c.compra_id, c.cpf_fk, m1.nome as moeda_entrada, m2.nome as moeda_saida, c.valor, c.date, c.status FROM `compra` as c INNER JOIN `moeda` as m1 on c.moeda_usada_fk = m1.moeda_id INNER JOIN `moeda` as m2 on c.moeda_comprada_fk = m2.moeda_id ORDER BY c.date DESC";
    $consulta_n_clientes = "select count(*) as qtd_cliente from cliente";
    $consulta_n_compras = "select count(*) as qtd_compra from compra";
    $consulta_n_moedas = "select count(*) as qtd_moeda from moeda";
    $result = $conn->query($consulta_sql); 
    $result_n_clientes = $conn->query($consulta_n_clientes); 
    $result_n_compra = $conn->query($consulta_n_compras); 
    $result_n_moeda = $conn->query($consulta_n_moedas);
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../cambio.png">

    <title>Página Inicial - UFSBRA Câmbio</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
      

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="sidebar-sticky bg-secondary">
            <div class="bg-warning text-center pb-2">
                <figure>
                    <img src="Imagens/cambio.png" class="img-fluid mt-3" alt="..." style="width: 5rem;">
                    <figcaption class="text-dark font-weight-bold pt-2">UFSBRA Câmbio</figcaption>
                </figure>    
            </div>
            <center><img src="Imagens/man.png" class="img-fluid mt-3 mb-3" alt="..." style="width: 5rem;"></center>
            <p class="text-center text-white font-weight-bold">Leandro Naidhig</p>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active text-light" href="index.php">
                  <span data-feather="home"></span>
                  Página Inicial<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="Clientes.php">
                  <span data-feather="users"></span>
                    <b>Clientes</b>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="Moedas.php">
                  <span data-feather="dollar-sign"></span>
                  Moedas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="Compras.php">
                  <span data-feather="shopping-cart"></span>
                  Compras
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="logout.php">
                  <span data-feather="log-out"></span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="card-deck">
        <div class="card">
            <img src="../cliente/images/clientes.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold">Número de clientes</h5>
                <?php 
                    $obj1 = $result_n_clientes->fetch_object();
                ?>
                <h2 class="card-text"><center><?php echo $obj1->qtd_cliente?></center></h2>
            </div>
        </div>
        <div class="card">
            <img src="../cliente/images/vendas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold">Número de transações</h5>
                <?php 
                    $obj2 = $result_n_compra->fetch_object();
                ?>
              <h2 class="card-text"><center><?php echo $obj2->qtd_compra?></center></h2>
            </div>
        </div>
        <div class="card">
            <img src="../cliente/images/compras.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold">Número de moedas</h5>
                <?php 
                    $obj3 = $result_n_moeda->fetch_object();
                ?>
                <h2 class="card-text"><center><?php echo $obj3->qtd_moeda?></center></h2>
            </div>
        </div>
        </div>
            <hr>

        <form action="" method="post" class="bg-warning mr-1" style="border-radius: 10px">
          <label class="mx-4 mt-2 h6">Procurar por Código:</label>
          <div class="form-group mx-4">
            <input type="number" name="search_cod" id="inputPassword6" class="form-control mr-sm-1" aria-describedby="passwordHelpInline" placeholder="Apenas dígitos">
            <input type="submit" class="btn btn-primary my-2 mb-3" value="Pesquisar">
          </div>
        </form>
            <?php
              if(isset($_POST["search_cod"])){
                  $search_value_cod=$_POST["search_cod"];
                  $sql="select c.compra_id, c.cpf_fk, m1.nome as moeda_entrada, m2.nome as moeda_saida, c.valor, c.date, c.status FROM `compra` as c INNER JOIN `moeda` as m1 on c.moeda_usada_fk = m1.moeda_id INNER JOIN `moeda` as m2 on c.moeda_comprada_fk = m2.moeda_id WHERE c.compra_id = '".$search_value_cod."' ORDER BY c.date DESC ";
                      
                  if(empty($search_value_cod) != 1){
                      $res=$conn->query($sql);
                  }
                }

              ?>
 
        <form action="" method="post" class="bg-warning mr-1" style="border-radius: 10px">
          <label class="mx-4 mt-2 h6">Procurar por CPF:</label>
          <div class="form-group mx-4">
            <input type="number" name="search_cpf" id="inputPassword6" class="form-control mr-sm-1" aria-describedby="passwordHelpInline" placeholder="Apenas dígitos">
            <button type="submit" class="btn btn-primary my-2 mb-3">Pesquisar</button>
          </div>
        </form>
            <?php
                if(isset($_POST["search_cpf"])){
                  $search_value_cpf=$_POST["search_cpf"];
                  $sql="select c.compra_id, c.cpf_fk, m1.nome as moeda_entrada, m2.nome as moeda_saida, c.valor, c.date, c.status FROM `compra` as c INNER JOIN `moeda` as m1 on c.moeda_usada_fk = m1.moeda_id INNER JOIN `moeda` as m2 on c.moeda_comprada_fk = m2.moeda_id WHERE c.cpf_fk = '".$search_value_cpf."' ORDER BY c.date DESC";
                  
                  if(empty($search_value_cpf) != 1){
                      $res=$conn->query($sql);
                  }
                }

              ?>


      <form action="" method="post" class="bg-warning mr-1" style="border-radius: 10px">
          <label class="mx-4 mt-2 h6">Procurar por Moeda:</label>
          <div class="form-group mx-4">
            <input type="number" name="search_moeda" id="search_moeda" class="form-control mr-sm-1" aria-describedby="passwordHelpInline" placeholder="Apenas gitos">
            <input type="submit" class="btn btn-primary my-2 mb-3" value="Pesquisar">
          </div>
        </form>
            <?php
              if(isset($_POST["search_moeda"])){
                  $search_value_moeda=$_POST["search_moeda"];
                  $sql="select c.compra_id, c.cpf_fk, m1.nome as moeda_entrada, m2.nome as moeda_saida, c.valor, c.date, c.status FROM `compra` as c INNER JOIN `moeda` as m1 on c.moeda_usada_fk = m1.moeda_id INNER JOIN `moeda` as m2 on c.moeda_comprada_fk = m2.moeda_id WHERE c.moeda_comprada_fk = '".$search_value_moeda."' ORDER BY c.date DESC ";
                      
                  if(empty($search_value_moeda) != 1){
                    
                      $res=$conn->query($sql);
                  }
                }

              ?>



          <h2 class="pt-5 text-center">Últimas transações</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>CPF comprador</th>
                  <th>Moeda de entrada</th>
                  <th>Moeda de saída</th>
                  <th>Valor (com IOF)</th>
                  <th>Data e horário</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
            <?php
                  if(empty($search_value_cod) != 1)
                    while ($obj = $res->fetch_object()) {
            ?>  
                <tr>
                  <td><?php echo $obj->compra_id?></td>
                  <td><?php echo $obj->cpf_fk?></td>
                  <td><?php echo $obj->moeda_entrada?></td>
                  <td><?php echo $obj->moeda_saida?></td>
                  <td><?php echo $obj->valor?></td>
                  <td><?php echo $obj->date?></td>
                  <td><?php echo $obj->status?></td>
                </tr>
            <?php } else if (empty($search_value_cpf) != 1)
                        while ($obj = $res->fetch_object()) {
            ?>
                  <tr>
                  <td><?php echo $obj->compra_id?></td>
                  <td><?php echo $obj->cpf_fk?></td>
                  <td><?php echo $obj->moeda_entrada?></td>
                  <td><?php echo $obj->moeda_saida?></td>
                  <td><?php echo $obj->valor?></td>
                  <td><?php echo $obj->date?></td>
                  <td><?php echo $obj->status?></td>
                </tr>
            <?php } else if (empty($search_value_moeda) != 1)
                        while ($obj = $res->fetch_object()) {
            ?>
                  <tr>
                  <td><?php echo $obj->compra_id?></td>
                  <td><?php echo $obj->cpf_fk?></td>
                  <td><?php echo $obj->moeda_entrada?></td>
                  <td><?php echo $obj->moeda_saida?></td>
                  <td><?php echo $obj->valor?></td>
                  <td><?php echo $obj->date?></td>
                  <td><?php echo $obj->status?></td>
                </tr>

                
            <?php }  else{ 
                        while ($obj = $result->fetch_object()) {
            ?>
                  
                  <tr>
                  <td><?php echo $obj->compra_id?></td>
                  <td><?php echo $obj->cpf_fk?></td>
                  <td><?php echo $obj->moeda_entrada?></td>
                  <td><?php echo $obj->moeda_saida?></td>
                  <td><?php echo $obj->valor?></td>
                  <td><?php echo $obj->date?></td>
                  <td><?php echo $obj->status?></td>
                </tr>
            <?php }}   ?>
                  
              </tbody>
            </table>
          </div>
          </main>
      </div>    
    </div>
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
      
         
          <script>
  //pie
  var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });

</script>
  </body>
</html>
