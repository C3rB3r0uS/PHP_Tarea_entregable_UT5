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

    include "formulario.php";

    // CREACIÓN DE OBJETOS "SISTEMA DIGITAL"

    if (isset($_POST["boton_sd"])) {

        // Compruebo que los 2 campos de los atributos necesarios para la craeción del objeto no estén vacíos

        if (!empty($_POST["num_serie_sd"]) && !empty($_POST["instante_activacion_sd"])) {

            $num_serie_sd = $_POST["num_serie_sd"];
            $instante_activacion_sd = $_POST["instante_activacion_sd"];

            // Hago una comprobación de tipos de los atributos y creo un objeto de la clase sistema_digital

            if (is_numeric($instante_activacion_sd)) {

                $objeto_sd = new sistema_digital($num_serie_sd, $instante_activacion_sd);

                // Creo variable de sesión y lo referencio a un array que recoge a los objetos de esta clase.
                // Al estar limitado a un objeto del tipo "sistema digital", si la variable de sesión existe
                // es que esta variable recoge el array con un objeto en su interior.

                if (!isset($_SESSION["array_sistema_digital"])) {

                    $array_sistema_digital = array();

                    array_push($array_sistema_digital, $objeto_sd);
                    $_SESSION["array_sistema_digital"] = serialize($array);
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

                $array_chasis_acorazado = array();

                if (!isset($_SESSION["array_chasis_acorazado"])) {

                    array_push($array_chasis_acorazado, $objeto_ca);
                    $_SESSION["array_chasis_acorazado"] = serialize($array_chasis_acorazado);
                } else {

                    $array_chasis_acorazado = unserialize($_SESSION["array_chasis_acorazado"]);
                    array_push($array_chasis_acorazado, $objeto_ca);
                    $_SESSION["array_chasis_acorazado"] = serialize($array_chasis_acorazado);
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

                if (isset($_SESSION["array_cpu"])) {

                    $array_cpu = unserialize($_SESSION["array_cpu"]);
                    array_push($array_cpu, $objeto_cpu);
                    $_SESSION["array_cpu"] = serialize($array_cpu);
                } else {

                    $array_cpu = array();
                    array_push($array_cpu, serialize($objeto_cpu));
                    $_SESSION["array_cpu"] = serialize($array_cpu);
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "CONTROLADOR"

    if (isset($_POST["boton_controlador"])) {

        if (!empty($_POST["num_serie_controlador"]) && !empty($_POST["instante_activacion_controlador"]) && !empty($_POST["velocidad_cpu_controlador"])) {

            $num_serie_controlador = $_POST["num_serie_controlador"];
            $instante_activacion_controlador = $_POST["instante_activacion_controlador"];
            $procesador_cpu = $_POST["procesador_cpu"];
            $ram_controlador = $_POST["ram_controlador"];

            if (is_numeric($instante_activacion_controlador) && is_numeric($ram_controlador)) {

                $objeto_controlador = new controlador($num_serie_controlador, $instante_activacion_controlador, $procesador_cpu, $ram_controlador);

                if (isset($_SESSION["array_controlador"])) {

                    $array_controlador = unserialize($_SESSION["array_controlador"]);
                    array_push($array_controlador, $objeto_controlador);
                    $_SESSION["array_controlador"] = serialize($array_controlador);
                } else {

                    $array_controlador = array();
                    array_push($array_controlador, $objeto_controlador);
                    $_SESSION["array_controlador"] = serialize($array_controlador);
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "ENLAZADOR"

    if (isset($_POST["boton_enlazador"])) {

        if (isset($_POST["num_serie_enlazador"]) && isset($_POST["instante_activacion_enlazador"]) && isset($_POST["ram_enlazador"])) {

            $num_serie_enlazador = $_POST["num_serie_enlazador"];
            $instante_activacion_enlazador = $_POST["instante_activacion_enlazador"];
            $procesador_enlazador = $_POST["procesador_enlazador"];
            $ram_enlazador = $_POST["ram_enlazador"];
            $conexion_enlazador = $_POST["conexion_enlazador"];

            if (is_numeric($instante_activacion_enlazador) && is_numeric($ram_enlazador)) {

                $objeto_enlazador = new enlazador($num_serie_enlazador, $instante_activacion_enlazador, $procesador_enlazador, $ram_enlazador, $conexion_enlazador);

                if (isset($_SESSION["array_enlazador"])) {

                    $array_enlazador = unserialize($_SESSION["array_enlazador"]);
                    array_push($array_enlazador, $objeto_enlazador);
                    $_SESSION["array_enlazador"] = serialize($array_enlazador);
                } else {

                    $array_enlazador = array();
                    array_push($array_enlazador, $objeto_enlazador);
                    $_SESSION["array_enlazador"] = serialize($array_enlazador);
                }
            }
        }
    }

    // CREACIÓN DE OBJETOS "UCE"

    if (isset($_POST["boton_uce"])) {

        if (isset($_POST["num_serie_uce"]) && isset($_POST["instante_activacion_uce"])) {

            $num_serie_uce = $_POST["num_serie_uce"];
            $instante_activacion_uce = $_POST["instante_activacion_uce"];
            $procesador_uce = $_POST["procesador_uce"];
            $chasis_uce = $_POST["chasis_uce"];

            if (is_numeric($instante_activacion_uce)) {

                $objeto_uce = new UCE($num_serie_uce, $instante_activacion_uce, $procesador_uce, $chasis_uce);

                if (isset($_SESSION["array_uce"])) {

                    $array_uce = unserialize($_SESSION["array_uce"]);
                    array_push($array_uce, $objeto_uce);
                    $_SESSION["array_uce"] = serialize($array_uce);
                } else {

                    $array_uce = array();
                    array_push($array_uce, $objeto_uce);
                    $_SESSION["array_uce"] = serialize($array_uce);
                }
            }
        }
    }
}