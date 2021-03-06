<?php

class Indicador_model extends CI_Model {
   

    
    
    
    public function obtener_indicador( $tipo_indicador, $fechadesde, $fechahasta){
        $indicador_tipo_fecha='https://mindicador.cl/api/'.$tipo_indicador;
        if ( ini_get('allow_url_fopen') ) {
            
            $json = file_get_contents($indicador_tipo_fecha);
        } else {
            //De otra forma utilizamos cURL
            $curl = curl_init($indicador_tipo_fecha);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($curl);
            curl_close($curl);
        }
        $nuevaapi = array();
        $result = json_decode($json);
        $arr = array();
        $jsonfiltrado;
        $myObj = new stdClass;
        
        foreach ($result->serie as $uf) {
           
        if($uf->fecha>$fechadesde && $uf->fecha<$fechahasta){
           $myObj->fecha = $uf->fecha;
            $myObj->fecha;
            $myObj->valor = $uf->valor;
          
            $data = array(
                'id'    =>    "1",
                'fecha'    =>  date("d-m-Y", strtotime($myObj->fecha)) ,
                'valor'  =>  $myObj->valor
            );
            array_push($nuevaapi,$data);
        }}
        $myJSON = json_encode($nuevaapi);

        echo $myJSON;
      
        }
   
    
    public function insertarDatosTablaUfJSON(){
        




        $indicador_tipo_fecha='https://mindicador.cl/api/uf';
        if ( ini_get('allow_url_fopen') ) {
            
            $json = file_get_contents($indicador_tipo_fecha);
        } else {
            //De otra forma utilizamos cURL
            $curl = curl_init($indicador_tipo_fecha);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($curl);
            curl_close($curl);
        }
        $nuevaapi = array();
        $result = json_decode($json);
        $myObj = new stdClass;
        $this->load->database('solutoria');
        $this->db->empty_table('uf'); 
        foreach ($result->serie as $uf) {
           
        
           $myObj->fecha = $uf->fecha;
            $myObj->fecha;
            $myObj->valor = $uf->valor;
            $sql = "INSERT INTO uf (id, fecha, valor) VALUES (NULL, '$myObj->fecha',$myObj->valor)";
            $this->db->query($sql);
            echo $this->db->affected_rows();
           
        }
        
        $data = array(
            'id' => null,
            'fecha' => '2012-02-02',
            'valor' => '123'
    );
    header("Location: http://localhost/solutoria/index.php?c=Indicadores&m=cruduf");
    
    }

    public function obtenerDatosUf(){
        $query = $this->db->get('uf');

        return $query;
  
    }

    public function eliminaruf($id){
        $this->load->database('solutoria');
        $this->db->delete('uf', array('id' => $id));  
    }
    
    public function editaruf($id,$valor){
        $this->load->database('solutoria');
        $data = array(
            'valor' => $valor
            
    );
    
    $this->db->where('id', $id);
    $this->db->update('uf', $data);
    header("Location: http://localhost/solutoria/index.php?c=Indicadores&m=cruduf");
    }
    

}


?>