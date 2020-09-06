<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" ></script>

<script type='text/javascript' src="<?php echo base_url(); ?>js/crudUf.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<table style="width:100%" class="alert alert-primary">
  <tr>
    <th>ID</th>
    <th>PRECIO</th>
    <th>FECHA</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
<?php 

foreach($datos->result_array() as $row)
{       ?>
<tr class='alert alert-dark'>
    <td> <?php echo $row['id'];?></td>
    <td> <?php echo $row['valor'];?></td>
    <td> <?php echo $row['fecha'];?></td>
    <td><button type="button" class="btn btn-secondary" onClick="reply_click(<?php echo $row['id'];?>)">Editar</button> <?php echo $row['id'];?></td>
    <td><button type="button" class="btn btn-danger" onClick="reply_click(<?php echo $row['id'];?>)">Eliminar</button> <?php echo $row['id'];?></td>
  </tr>
<?php
       
        
}

?>
</table>
<body>
    
</body>
</html>