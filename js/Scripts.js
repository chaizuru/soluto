
const botonSeleccionar = document.getElementById('botonSeleccionar');


console.log(fechaHasta);
botonSeleccionar.addEventListener('click',()=>{
    const fechaDesde = document.getElementById('fechaDesde');
    let fechaHasta = document.getElementById('fechaHasta');
    
    mostrarGrafico(fechaDesde,fechaHasta);
})
$(document).ready(function () {
    
    
});
 function mostrarGrafico(fechaDesde,fechaHasta)
{
    
    {
        console.log(`http://localhost/solutoria/index.php?c=Indicadores&m=retornar_valor&tipo=uf&fechadesde=${fechaDesde.value}&fechahasta=${fechaHasta.value}`);
        $.post(`http://localhost/solutoria/index.php?c=Indicadores&m=retornar_valor&tipo=uf&fechadesde=${fechaDesde.value}&fechahasta=${fechaHasta.value})`,
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

function obtenerDatos(){
    return new promise(resolve=>{
        setTimeout(() => {
            
        }, 2000);
    })
}
