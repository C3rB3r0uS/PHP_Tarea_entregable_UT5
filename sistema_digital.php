<?php

class sistema_digital {

    private $num_serie;
    private $instante_activacion;
    private $estado_operativo;

    function __construct($num_serie, $instante_activacion) {
        $this->num_serie = $num_serie;
        $this->instante_activacion = $instante_activacion;
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
