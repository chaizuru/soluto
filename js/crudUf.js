function eliminar(id)
  {
    location.href = `http://localhost/solutoria/index.php?c=Indicadores&m=eliminardatouf&id=${id}`;
    
  }

  function editar(id){
    const valor = document.getElementById(`va${id}`).innerText;
    const lbltitulomodal = document.getElementById('lbltitulomodal');
    console.log(valor);
    const txtvaloruf = document.getElementById('txtvaloruf');
    txtvaloruf.value = valor;
    lbltitulomodal.innerText= `Editar UF ID ${id}`;
    $('#exampleModal').modal('show');
    
     
  }