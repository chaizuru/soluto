<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" ></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    


    <script>
        


       
        </script>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  
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
    <select name="select">
  <option value="value1">Value 1</option> 
  <option value="value2" selected>Value 2</option>
  <option value="value3">Value 3</option>
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