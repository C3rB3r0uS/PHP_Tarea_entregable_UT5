<?php

include "sistema_digital.php";

class CPU extends sistema_digital {

    private $categoria_CPU;
    private $velocidad_CPU;

    function __construct($num_serie, $instante_activacion, $categoria_CPU, $velocidad_CPU) {
        parent::__construct($num_serie, $instante_activacion);

        if (is_numeric($velocidad_CPU)) {

            $this->velocidad_CPU = $velocidad_CPU;
        } else {

            echo "La velocidad de CPU indicada en el argumento del constructor no es válida (" . $velocidad_CPU . ").";
        }

        if (strcasecmp($categoria_CPU, "matricial") == 0 || strcasecmp($categoria_CPU, "neuronal") == 0) {

            $this->categoria_CPU = $categoria_CPU;
        } else {

            echo "La categoría de CPU indicada en el argumento del constructor no es válida (" . $categoria_CPU . ")";
        }
        
        $this->estado_operativo = "ON";
        
    }

}

//$num_serie = 1;
//$instante_activacion = getdate();
//$categoria_CPU = "Matricial";
//$velocidad_CPU = 3;
//
//$prueba = new CPU($num_serie, $instante_activacion, $categoria_CPU, $velocidad_CPU);

