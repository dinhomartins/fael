<?php 
// Conexao com o banco de dados
include_once('classes/db.conect.class.php');
include('header.php');
?>


<!-- Menu Lateral  -->
<main class="page-content">
  <div class="container-fluid">
    <h2>FAEL - Controle Financeiro Pessoal - Programação WEB</h2>
    <hr>
    <h5>Resumo</h5>
    <hr>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"> 
      <h3>Valor Total: </h3>        
      </div>
    </div>


    <?php 

// Classe relatorio exebi os dados em uma tabela
    class Relatorio
      {

        private $valor;
        private $data;
        private $descicao;


        public function exibirRelatorio()
        {

          $link = new PDO("mysql:host=localhost;dbname=finance", "root", "");
          $conexao = $link->prepare("SELECT * FROM entradas");
          $stmt = $link->prepare("SELECT * FROM entradas");

          $conexao->execute();
          $stmt->execute();

          $total = 0;

          while ($results = $conexao->fetch(PDO::FETCH_ASSOC)) 
          {
            $total += $results['valor'];
          }

          echo $total;

        ?>



        <table class="table">
          <?php  while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <thead>
              <tr>
                <th scope="col"><?php echo $resultado['id'] ?> </th>
                <th scope="col">data</th>
                <th scope="col">descricao</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" style="width:30%" ><?php  echo $resultado['valor'] ?> </th>
                <td><?php echo  $resultado['data']?> </td>
                <td><?php echo  $resultado['descricao']?> </td>

              </tr>
              <?php endWhile ?>
            </tbody>
          </table>

          <?php 
        }  
        

      }
      ?>
      <?php 
      $usuario = new Relatorio();
      $usuario->exibirRelatorio();

      ?>

    </div>

  </main>
  <!-- Fim do container" -->
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="chart.js" ></script>
</body>
</html>