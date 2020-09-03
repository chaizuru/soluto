<?php

class Indicador_model extends CI_Model {
   

    
    
    
    public function obtener_indicador( $tipo_indicador, $fechadesde, $fechahasta){
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
        $result3 = array();
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
            array_push($result3,$data);
        }}
        $myJSON = json_encode($result3);

echo $myJSON;
       // $jsonfiltrado=json_encode($arr);
       // echo $jsonfiltrado;
        
     
        
       
       
    }



}


?>