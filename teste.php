<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js" ></script>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Controle Financeiro Pessoal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="js.js" ></script>
 

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Controle FInanceiro</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">

        <div class="user-info">
          <span class="user-name">Dinho
            <strong>Martins</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">

          </li>
          <li class="">
            <a href="index.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Home</span> 
            </a>
          </li>

          <li class="">
            <a href="relatorio.php">
              <i class="fas fa-bell"></i>
              <span>Relatório</span> 
            </a>
          </li>

          <li class="">
            <a href="entradas.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Registro de Entradas</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>

          </li>
          <li class="">
            <a href="saidas.php">
              <i class="far fa-gem"></i>
              <span>Registro de Saídas</span>
            </a>        
          </li>          
      <!-- sidebar-menu  -->
    </div>

  </nav>
    <!-- Menu Lateral  -->
      <main class="page-content">
        <div class="container-fluid">
          <h2>FAEL - Controle Financeiro Pessoal - Programação WEB</h2>
          <hr>
  

    <form method="POST" action="" id="form" name="form"  onSubmit=“return verifica()” >
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
      <button id="demo" onclick="verifica()">Try it</button>
      <p id="demo">Click the button to change the text in this paragraph.</p>


    </form>

    </main>
    <!-- Fim do container" -->
    </div>

		<script>
	        function verifica(){ 
	        	if (document.getElementById("entrada").value == "" || document.getElementById("data").value == "" || document.getElementById("descricao").value == "" ) 
	        		{ alert("Por favor, preencha os campos corretamente."); 
	        		return true; 
	        	}

	        }  
        </script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="chart.js" ></script>
</body>

</html>