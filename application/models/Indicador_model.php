<?php

class Indicador_model extends CI_Model {
    
    

    public function obtener_indicador( $tipo_indicador, $fecha){
        $indicador_tipo_fecha='https://mindicador.cl/api/'.$tipo_indicador.'/'.$fecha;
        if ( ini_get('allow_url_fopen') ) {
            $json = file_get_contents($indicador_tipo_fecha);
        } else {
            //De otra forma utilizamos cURL
            $curl = curl_init($indicador_tipo_fecha);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($curl);
            curl_close($curl);
        }
        echo $json;
       
       
    }




}

?>