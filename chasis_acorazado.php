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

        if (strcasecmp($fuente_energia, "hidrogeno") == 0 || strcasecmp($fuente_energia, "uranio") == 0) {

            $this->fuente_energia = $fuente_energia;
        } else {

            echo "La fuente de energía indicada en el argumento del constructor no es correcta";
        }

        if (strcasecmp($material_coraza, "japanium") == 0 || strcasecmp($material_coraza, "grafeno")) {

            $this->material_coraza = $material_coraza;
        } else {

            echo "El material de coraza indicado en el argumento del constructor no es correcto";
        }

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
