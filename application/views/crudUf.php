<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" ></script>

<script type='text/javascript' src="<?php echo base_url(); ?>js/crudUf.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
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
      <button type="button" id="btngra" class="btn btn-primary">IR A GRÁFICO</button>
        
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">CRUD <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    
  </div>
</nav>
<br>
<center><h1>Prueba de ingreso a Solutoria - Pablo Barría (Chaizuru Github)</h1></center>
<hr>
<table style="width:100%" class=" table alert alert-primary">
<thead class="thead-dark">
  <tr>
    <th>ID</th>
    <th>PRECIO</th>
    <th>FECHA</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
  </thead>
<?php 

foreach($datos->result_array() as $row)
{       ?>
<tr class='alert alert-dark'>
    <td> <?php echo $row['id'];?></td>
    <td id="va<?php echo $row['id'];?>"> <?php echo $row['valor'];?></td>
    <td> <?php echo $row['fecha'];?></td>
    <td><button type="button" class="btn btn-primary" data-whatever="@mdo" onClick="editar(<?php echo $row['id'];?>)">Editar Valor</button></td>
    <td><button type="button" class="btn btn-danger" onClick="eliminar(<?php echo $row['id'];?>)">Eliminar</button></td>
  </tr>
<?php
       
        
}

?>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="lbltitulomodal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Valor UF:</label>
            <input type="text" class="form-control" id="txtvaloruf">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id='btneditar' class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>  
</body>
</html>