<?php

require_once "sistema_digital.php";
require_once "CPU.php";
require_once "chasis_acorazado.php";

class UCE extends sistema_digital {

    private $procesador;
    private $cuerpo;

    function __construct($num_serie, $instante_activacion, $procesador, $cuerpo) {
        parent::__construct($num_serie, $instante_activacion);

        $this->procesador = $procesador;
        $this->cuerpo = $cuerpo;
        $this->estado_operativo = "ON";
    }
    
    function conmutar_Estado() {
        parent::conmutar_Estado();
    }
    
    function Scout_Finch() {
        parent::Scout_Finch();
    }
    
    function getProcesador() {
        return $this->procesador;
    }

    function getCuerpo() {
        return $this->cuerpo;
    }

}
