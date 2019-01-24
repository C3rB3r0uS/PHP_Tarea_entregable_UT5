<?php

class chasis_acorazado {

    private $num_serie;
    private $instante_activacion;
    private $estado_operativo;
    private $fuente_energia;
    private $material_coraza;

    function __construct($num_serie, $instante_activacion, $fuente_energia, $material_coraza) {
        $this->num_serie = $num_serie;
        $this->instante_activacion = $instante_activacion;

        $this->fuente_energia = $fuente_energia;
        $this->material_coraza = $material_coraza;
        $this->estado_operativo = "ON";
    }

    function conmutar_Estado() {

        if ($this->estado_operativo == "ON") {

            $this->estado_operativo = "OFF";
        } else {

            $this->estado_operativo = "ON";
        }
    }

    function Scout_Finch() {

        $this->estado_operativo = "OFF";
    }
    
}
