<?php

include "sistema_digital.php";
include "CPU.php";

class controlador extends sistema_digital{
    
    private $procesador;
    private $ram;
    
    public function __construct($num_serie, $instante_activacion,$procesador, $ram) {
        
        parent::__construct($num_serie, $instante_activacion);
       
            $this-> procesador = $procesador; 
            $this->ram = $ram;
            $this->estado_operativo = "ON";
        
    }
     
}

