<?php

include "sistema_digital.php";
include "CPU.php";

class controlador extends sistema_digital{
    
    private $procesador;
    private $ram;
    
    public function __construct($num_serie, $instante_activacion,$procesador, $ram) {
        
        parent::__construct($num_serie, $instante_activacion);
       
        if($procesador instanceof CPU){
            $this-> procesador = $procesador;
            
        }else{
            
            echo "La CPU indicada en el argumento del constructor no es válida";
            
        }
        
        if(is_numeric($ram)){
            
            $this->ram = $ram;
            
        }else{
            
            echo "El valor de la memoria RAM indicado en el constructor no es correcto";
            
        }
        
        $this->estado_operativo = "ON";
        
    }
    
    
    
}

