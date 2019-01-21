<?php

include "sistema_digital.php";
include "CPU.php";
include "chasis_acorazado.php";

class UCE extends sistema_digital{
    
    private $procesador;
    private $cuerpo;
    
    function __construct($num_serie, $instante_activacion, $procesador, $cuerpo) {
        parent::__construct($num_serie, $instante_activacion);
        
        if($procesador instanceof CPU){
            
            $this->procesador = $procesador;
            
        }else{
            
            echo "El procesador indicado en el constructor no es válido";
            
        }
        
        if($cuerpo instanceof chasis_acorazado){
            
            $this->cuerpo = $cuerpo;
            
        }else{
            
            echo "El cuerpo indicado en el constructor no es válido";
            
        }
        
        $this->estado_operativo = "ON";
        
    }
    
    
}

