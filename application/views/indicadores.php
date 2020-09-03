<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" ></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
<center><div id="chart-container" style="position: relative; height:40vh; width:80vw">
        <canvas id="graphCanvas"></canvas>
    </div></center>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("http://localhost/solutoria/index.php?c=Indicadores&m=retornar_valor&tipo=uf&fechadesde=2019-08-13&fechahasta=2020-12-17",
                function (data)
                {
                    
                     var valores = [];
                    var fechas = [];
                    var data = JSON.parse(data);
                    for (var i in data) {
                    
                        fechas.push(data[i].fecha);
                        valores.push(data[i].valor);
                    }

                    var chartdata = {
                        labels: fechas,
                        datasets: [
                            {
                                label: 'Valor Indicador',
                                
                                data: valores
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,
                        options: {
                            
        title: {
            display: true,
            text: 'Gráfico de valor de indicador escogido'
        },scales: {
    yAxes: [{
      scaleLabel: {
        display: true,
        labelString: 'Valor Indicador Escogido'
      }
    }],xAxes: [{
      scaleLabel: {
        display: true,
        labelString: 'Fecha'
      }
    }]
  }
    }
                    });
                });
            }
        }
        </script>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>