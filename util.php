function prettyVardump($data){
        $final='';
        foreach($data as $indice =>$valor){
            $final.= '-' . $valor . '-';
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
