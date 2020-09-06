
const botonSeleccionar = document.getElementById('botonSeleccionar');
const grafico = document.getElementById('graphCanvas');
const botonCrud = document.getElementById('botonCrud');

botonCrud.addEventListener('click',()=>{
    
    location.href = 'http://localhost/solutoria/index.php?c=Indicadores&m=insertardatos';
})

botonSeleccionar.addEventListener('click',()=>{
    

    const fechaDesde = document.getElementById('fechaDesde');
    const fechaHasta = document.getElementById('fechaHasta');
    const tipoindicador = document.getElementById('tipoindicador');
    mostrarGrafico(tipoindicador,fechaDesde,fechaHasta);
})
$(document).ready(function () {
    
    
});
 function mostrarGrafico(tipoIndicador,fechaDesde,fechaHasta)
{
    
    {
    
           $.post(`http://localhost/solutoria/index.php?c=Indicadores&m=retornar_valor&tipo=${tipoIndicador.value}&fechadesde=${fechaDesde.value}&fechahasta=${fechaHasta.value})`,
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
    text: 'Gráfico de valor de indicador escogido  '+tipoIndicador.value
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

function obtenerDatos(){
    return new promise(resolve=>{
        setTimeout(() => {
            
        }, 2000);
    })
}

function limpiarGrafico(){
    
    var chart = new Chart(grafico, {
       
        type: 'line',
    
       
        data: {
            labels: [],
            datasets: [{
                label: '',
                data: []
            }]
        },
    
        
        options: {}
    });
    
}