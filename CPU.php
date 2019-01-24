<?php

require_once "sistema_digital.php";

class CPU extends sistema_digital {

    private $categoria_CPU;
    private $velocidad_CPU;

    function __construct($num_serie, $instante_activacion, $categoria_CPU, $velocidad_CPU) {
        parent::__construct($num_serie, $instante_activacion);

        $this->categoria_CPU = $categoria_CPU;
        $this->velocidad_CPU = $velocidad_CPU;

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
