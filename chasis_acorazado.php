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
    
    function getNum_serie() {
        return $this->num_serie;
    }

    function getInstante_activacion() {
        return $this->instante_activacion;
    }

    function getEstado_operativo() {
        return $this->estado_operativo;
    }

    function getFuente_energia() {
        return $this->fuente_energia;
    }

    function getMaterial_coraza() {
        return $this->material_coraza;
    }

}
