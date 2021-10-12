<?php
function prettyVardump($array){
        $final='';
        $contador =0;
        foreach($array as $indice =>$valor){
            if(!$contador==0){
                $final .= ', ';
            }
            $final.= $valor;
            
            $contador++;
        }
        
        return $final;
    }
    
    function iguales($uno, $dos){
        if($uno==$dos){
            echo 'Las contraseñas son iguales';
        }else{
            echo 'Las contraseñas son distintas';
            
        }
    }
    
    function enableErrors(){
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    
    function validar($name, $array){
        $value=null;
        if (isset($array[$name])) {
            $value = $array[$name];
        }
        return $value;
    }
