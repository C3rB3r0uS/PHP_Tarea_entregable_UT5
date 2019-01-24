<?php

require_once "sistema_digital.php";
require_once "CPU.php";

class controlador extends sistema_digital{
    
    private $procesador;
    private $ram;
    
    public function __construct($num_serie, $instante_activacion,$procesador, $ram) {
        
        parent::__construct($num_serie, $instante_activacion);
       
            $this-> procesador = $procesador; 
            $this->ram = $ram;
        
    }
    
       function conmutar_Estado() {
           parent::conmutar_Estado();
        
        }
        
        function Scout_Finch() {
            parent::Scout_Finch();
        }
        
        function getNum_serie() {
            parent::getNum_serie();
        }
        
        function getEstado_operativo() {
            parent::getEstado_operativo();
        }
        
    }
    

  




