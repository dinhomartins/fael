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

<h5>Cadastro de entradas financeiras</h5>
<hr>
<div class="row">
  <!-- Box-Informações -->
  <div class="col-md-6">

    <form method="POST" action="classes/entradas.php" id="form" name="form" >
      <div class="form-group">
        <label for="exampleInputEmail1">Entrada</label>
        <input type="number" class="form-control" name="entrada" id="entrada" aria-describedby="entrada" placeholder="Valores ">
        <small id="entrada" class="form-text text-muted">Informe aqui todos os valores recebidos.</small>
      </div>
      <div class="form-group">
        <label >Data</label>
        <input type="date" name="data" id="data" min="2019-01-01"
        max="2040-12-31" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
      </div>

      <button type="submit" id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
      <button id="demo" onclick="myFunction()">Try it</button>
      <p id="demo">Click the button to change the text in this paragraph.</p>


    </form>
  </div>
<script>
        function myFunction() {
          document.getElementById("demo").innerHTML = "Hello World";
        }
        </script>
</div>  
</div>
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