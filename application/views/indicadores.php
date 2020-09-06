<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" ></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Ingreso Solutoria Pablo Barría</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Solutoria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Gráfico <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <button type="button" id='botonCrud' class="btn btn-primary">IR A CRUD</button>
      </li>
      
      
    </ul>
    
  </div>
</nav>
<br>
<center><h1>Prueba de ingreso a Solutoria - Pablo Barría (Chaizuru Github)</h1></center>
<hr>
  
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <h4>Fecha Comienzo</h4>
    <input type="date" id="fechaDesde" name="trip-start"
       value="2018-07-22"
       min="2017-01-01" max="2020-12-31"><br>
       <h4>Fecha Fin</h4>
    <input type="date" id="fechaHasta" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2020-12-31"><br>
    <h4>Tipo de Indicador</h4>
    <select name="select" id='tipoindicador'>
    <option value="uf">UF</option> 
    <option value="ivp">IVP</option>
    <option value="dolar">DOLAR</option> 
    <option value="dolar_intercambio">Dolar ACUERDO</option> 
    <option value="euro">EURO</option> 
    <option value="ipc">IPC</option>  
    <option value="utm">UTM</option> 
    <option value="imacec">IMACEC</option> 
    <option value="tpm">TPM</option> 
    <option value="libra_cobre">LIBRA COBRE</option> 
    <option value="tasa_desempleo">TASA DESEMPLEO</option> 
    <option value="bitcoin">BITCOIN</option> 
</select>
    <div><br><button type="button" id='botonSeleccionar' class="btn btn-primary">Seleccionar</button>
   
  </div>
    </div>
    <div class="col-sm">
    <div id="chart-container" style=" height:40vh; width:60vw">
        <canvas id="graphCanvas"></canvas>
    </div>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
<script type='text/javascript' src="<?php echo base_url(); ?>js/Scripts.js"></script>
</body>
</html>