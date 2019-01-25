<?php

require_once "sistema_digital.php";

class CPU extends sistema_digital {

    private $categoria_CPU;
    private $velocidad_CPU;

    function __construct($num_serie, $instante_activacion, $categoria_CPU, $velocidad_CPU) {
        parent::__construct($num_serie, $instante_activacion);

        $this->categoria_CPU = $categoria_CPU;
        $this->velocidad_CPU = $velocidad_CPU;
        $this->estado_operativo = "ON";
    }
    
    function getCategoria_CPU() {
        return $this->categoria_CPU;
    }

    function getVelocidad_CPU() {
        return $this->velocidad_CPU;
    }
    
    public function getNum_serie() {
        return parent::getNum_serie();
    }

}
