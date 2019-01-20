<?php

include "sistema_digital.php";
include "CPU.php";
include "chasis_acorazado.php";

class UCE extends sistema_digital {

    private $procesador;
    private $cuerpo;

    function __construct($num_serie, $instante_activacion, $procesador, $cuerpo) {
        parent::__construct($num_serie, $instante_activacion);

        $this->procesador = $procesador;
        $this->cuerpo = $cuerpo;
        $this->estado_operativo = "ON";
    }

}
