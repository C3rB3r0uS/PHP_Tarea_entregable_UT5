<?php

require_once "CPU.php";
require_once "UCE.php";
require_once "chasis_acorazado.php";
require_once "controlador.php";
require_once "enlazador.php";
require_once "sistema_digital.php";

session_start();

if (!$_POST) {

    include "formulario.php";
} else {

    // ELIMINAR SESIÓN

    if (isset($_POST["destruir_sesion"])) {

        unset($_SESSION);
        session_destroy();
        $_SESSION = array();
        echo "<b>Sesión borrada</b><br>";
    }

    // CREACIÓN DE OBJETOS "SISTEMA DIGITAL"

    if (isset($_POST["boton_sd"])) {

        // Compruebo que los 2 campos de los atributos necesarios para la craeción del objeto no estén vacíos

        if (!empty($_POST["num_serie_sd"]) && !empty($_POST["instante_activacion_sd"])) {

            $num_serie_sd = $_POST["num_serie_sd"];
            $instante_activacion_sd = $_POST["instante_activacion_sd"];

            // Hago una comprobación de tipos de los atributos y creo un objeto de la clase sistema_digital

            if (is_numeric($instante_activacion_sd)) {

                $objeto_sd = new sistema_digital($num_serie_sd, $instante_activacion_sd);
                echo "<b>Se ha creado un objeto Sistema digital </b><br>";

                // Creo variable de sesión y la inicializo como array
                // Al estar limitado a un objeto del tipo "sistema digital", si la variable de sesión existe
                // es que esta variable recoge el array con un objeto en su interior.

                if (!isset($_SESSION["array_sistema_digital"])) {

                    $_SESSION["array_sistema_digital"] = array();
                    array_push($_SESSION["array_sistema_digital"], serialize($objeto_sd));
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "CHASIS ACORAZADO"

    if (isset($_POST["boton_ca"])) {

        if (!empty($_POST["num_serie_ca"]) && !empty($_POST["instante_activacion_ca"])) {

            $num_serie_ca = $_POST["num_serie_ca"];
            $instante_activacion_ca = $_POST["instante_activacion_ca"];
            $fuente_energia_ca = $_POST["fuente_energia_ca"];
            $material_coraza_ca = $_POST["material_coraza_ca"];

            if (is_numeric($instante_activacion_ca)) {

                $objeto_ca = new chasis_acorazado($num_serie_ca, $instante_activacion_ca, $fuente_energia_ca, $material_coraza_ca);
                echo "<b>Se ha creado un objeto chasis acorazado</b><br>";

                if (!isset($_SESSION["array_chasis_acorazado"])) {

                    $_SESSION["array_chasis_acorazado"] = array();
                    array_push($_SESSION["array_chasis_acorazado"], serialize($objeto_ca));
                } else {

                    array_push($_SESSION["array_chasis_acorazado"], serialize($objeto_ca));
                    echo "Tamaño array_chasis_acorazado: " . count(($_SESSION["array_chasis_acorazado"])) . "<br>";
                    print_r(($_SESSION["array_chasis_acorazado"]));
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "CPU"

    if (isset($_POST["boton_cpu"])) {

        if (!empty($_POST["num_serie_cpu"]) && !empty($_POST["instante_activacion_cpu"]) && !empty($_POST["velocidad_cpu_cpu"])) {

            $num_serie_cpu = $_POST["num_serie_cpu"];
            $instante_activacion_cpu = $_POST["instante_activacion_cpu"];
            $categoria_cpu = $_POST["categoria_cpu"];
            $velocidad_cpu_cpu = $_POST["velocidad_cpu_cpu"];

            if (is_numeric($instante_activacion_cpu) && is_numeric($velocidad_cpu_cpu)) {

                $objeto_cpu = new CPU($num_serie_cpu, $instante_activacion_cpu, $categoria_cpu, $velocidad_cpu_cpu);
                echo "<b>Se ha creado un objeto CPU</b><br>";

                if (isset($_SESSION["array_cpu"])) {

                    array_push($_SESSION["array_cpu"], serialize($objeto_cpu));
                    echo "Tamaño array_cpu: " . count(($_SESSION["array_cpu"])) . "<br>";
                    print_r($_SESSION["array_cpu"]);
                } else {

                    $_SESSION["array_cpu"] = array();
                    array_push($_SESSION["array_cpu"], serialize($objeto_cpu));
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "CONTROLADOR"

    if (isset($_POST["boton_controlador"])) {

        if (!empty($_POST["num_serie_controlador"]) && !empty($_POST["instante_activacion_controlador"]) && !empty($_POST["ram_controlador"])) {

            $num_serie_controlador = $_POST["num_serie_controlador"];
            $instante_activacion_controlador = $_POST["instante_activacion_controlador"];
            $procesador_cpu;
            $ram_controlador = $_POST["ram_controlador"];

            foreach ($_SESSION["array_cpu"] as $cpu) {

                if ($_POST["procesador_cpu"] == unserialize($cpu)->getNum_serie()) {

                    $procesador_cpu = unserialize($cpu);
                }
            }

            if (is_numeric($instante_activacion_controlador) && is_numeric($ram_controlador)) {

                $objeto_controlador = new controlador($num_serie_controlador, $instante_activacion_controlador, $procesador_cpu, $ram_controlador);
                echo "<b>Se ha creado un objeto controlador</b><br>";

                if (isset($_SESSION["array_controlador"])) {

                    array_push($_SESSION["array_controlador"], serialize($objeto_controlador));
                    echo "Tamaño array_controlador: " . count(($_SESSION["array_controlador"])) . "<br>";
                    print_r($_SESSION["array_controlador"]);
                } else {

                    $_SESSION["array_controlador"] = array();
                    array_push($_SESSION["array_controlador"], serialize($objeto_controlador));
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "ENLAZADOR"

    if (isset($_POST["boton_enlazador"])) {

        if (isset($_POST["num_serie_enlazador"]) && isset($_POST["instante_activacion_enlazador"]) && isset($_POST["ram_enlazador"])) {

            $num_serie_enlazador = $_POST["num_serie_enlazador"];
            $instante_activacion_enlazador = $_POST["instante_activacion_enlazador"];
            $procesador_enlazador;
            $ram_enlazador = $_POST["ram_enlazador"];
            $conexion_enlazador = $_POST["conexion_enlazador"];

            foreach ($_SESSION["array_cpu"] as $cpu) {

                if ($_POST["procesador_enlazador"] == unserialize($cpu)->getNum_serie()) {

                    $procesador_enlazador = unserialize($cpu);
                }
            }

            if (is_numeric($instante_activacion_enlazador) && is_numeric($ram_enlazador)) {

                $objeto_enlazador = new enlazador($num_serie_enlazador, $instante_activacion_enlazador, $procesador_enlazador, $ram_enlazador, $conexion_enlazador);
                echo "<b>Se ha creado un objeto enlazador</b><br>";

                if (isset($_SESSION["array_enlazador"])) {

                    array_push($_SESSION["array_enlazador"], serialize($objeto_enlazador));
                    echo "Tamaño array_enlazador: " . count($_SESSION["array_enlazador"]) . "<br>";
                    print_r($_SESSION["array_enlazador"]);
                } else {

                    $_SESSION["array_enlazador"] = array();
                    array_push($_SESSION["array_enlazador"], serialize($objeto_enlazador));
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "UCE"

    if (isset($_POST["boton_uce"])) {

        if (isset($_POST["num_serie_uce"]) && isset($_POST["instante_activacion_uce"])) {

            $num_serie_uce = $_POST["num_serie_uce"];
            $instante_activacion_uce = $_POST["instante_activacion_uce"];
            $procesador_uce;
            $chasis_uce;

            foreach ($_SESSION["array_cpu"] as $cpu) {

                if ($_POST["procesador_uce"] == unserialize($cpu)->getNum_serie()) {

                    $procesador_uce = unserialize($cpu);
                }
            }

            foreach ($_SESSION["array_chasis_acorazado"] as $chasis) {

                if ($_POST["chasis_uce"] == unserialize($chasis)->getNum_serie()) {

                    $chasis_uce = unserialize($chasis);
                }
            }

            if (is_numeric($instante_activacion_uce)) {

                $objeto_uce = new UCE($num_serie_uce, $instante_activacion_uce, $procesador_uce, $chasis_uce);
                echo "<b>Se ha creado un objeto UCE</b><br>";

                if (isset($_SESSION["array_uce"])) {

                    array_push($_SESSION["array_uce"], serialize($objeto_uce));
//                    echo "Tamaño array_uce: ". count($_SESSION["array_uce"]) . "<br>";
//                    print_r($_SESSION["array_uce"]);

                    for ($i = 0; $i < count($_SESSION["array_uce"]); $i++) {

                        $uce = unserialize($_SESSION["array_uce"][$i]);
                        if ($uce instanceof UCE) {
                            if ($uce->getEstado_operativo() == "ON") {

                                echo "UCE  número " . $i . " => Estado operativo: ON, Nº de serie: " . $uce->getNum_serie() . "<br>";
                            }
                        }
                    }
                } else {

                    $_SESSION["array_uce"] = array();
                    array_push($_SESSION["array_uce"], serialize($objeto_uce));
                }
            }
        }
    }

    // FUNCIONALIDAD BOTÓN HLL

    if (isset($_POST["boton_hll"])) {

        // Inicialización de la variable de sesión HLL, que se usará posteriormente para desactivar los botones
        // del formulario que permiten la creación de objetos.

        $_SESSION["HLL"] = 1;

        if (isset($_SESSION["array_uce"])) {

            for ($i = 0; $i < count($_SESSION["array_uce"]); $i++) {

                $uce = unserialize($_SESSION["array_uce"][$i]);
                if ($uce instanceof UCE) {

                    $uce->Scout_Finch();
                }
            }
        }

        if (isset($_SESSION["array_enlazador"])) {

            for ($i = 0; $i < count($_SESSION["array_enlazador"]); $i++) {

                $enlazador = unserialize($_SESSION["array_enlazador"][$i]);
                if ($enlazador instanceof enlazador) {

                    $enlazador->Scout_Finch();
                }
            }
        }

        if (isset($_SESSION["array_controlador"])) {

            for ($i = 0; $i < count($_SESSION["array_controlador"]); $i++) {

                $controlador = unserialize($_SESSION["array_controlador"][$i]);
                if ($controlador instanceof controlador) {

                    $controlador->Scout_Finch();
                }
            }
        }

        if (isset($_SESSION["array_chasis_acorazado"])) {

            for ($i = 0; $i < count($_SESSION["array_chasis_acorazado"]); $i++) {

                $chasis = unserialize($_SESSION["array_chasis_acorazado"][$i]);
                if ($chasis instanceof chasis_acorazado) {

                    $chasis->Scout_Finch();
                }
            }
        }

        if (isset($_SESSION["array_cpu"])) {

            for ($i = 0; $i < count($_SESSION["array_cpu"]); $i++) {

                $cpu = unserialize($_SESSION["array_cpu"][$i]);
                if ($cpu instanceof CPU) {

                    $cpu->Scout_Finch();
                }
            }
        }

        if (isset($_SESSION["array_sistema_digital"])) {

            for ($i = 0; $i < count($_SESSION["array_sistema_digital"]); $i++) {

                $sistema = unserialize($_SESSION["array_sistema_digital"][$i]);
                if ($sistema instanceof sistema_digital) {

                    $sistema->Scout_Finch();
                }
            }
        }
    }

    include "formulario.php";
}