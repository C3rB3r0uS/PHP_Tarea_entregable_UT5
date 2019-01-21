<?php

include "sistema_digital.php";

class enlazador extends sistema_digital{
    
    private $procesador;
    private $ram;
    private $conexion;
    
    function __construct($num_serie, $instante_activacion, $procesador, $ram, $conexion){
        
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
        
        if(strcasecmp($conexion, "WIFI") == 0 || 
                strcasecmp($conexion, "ULTRA-WIFI") == 0 || 
                strcasecmp($conexion, "LASER") == 0){
            
            $this->conexion = $conexion;
            
        }else{
            
            echo "El valor de la conexión indicado en el constructor no es válido";
            
        }
        
        $this->estado_operativo = "ON";
                   
    }
    
    
}