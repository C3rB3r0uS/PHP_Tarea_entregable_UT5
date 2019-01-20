<?php

include "sistema_digital.php";

class enlazador extends sistema_digital {

    private $procesador;
    private $ram;
    private $conexion;

    function __construct($num_serie, $instante_activacion, $procesador, $ram, $conexion) {

        parent::__construct($num_serie, $instante_activacion);

        $this->procesador = $procesador;
        $this->ram = $ram;
        $this->conexion = $conexion;
        $this->estado_operativo = "ON";
    }

}
