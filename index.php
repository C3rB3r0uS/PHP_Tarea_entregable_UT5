<?php

//include "CPU.php";
//include "UCE.php";
//include "chasis_acorazado.php";
//include "controlador.php";
//include "enlazador.php";
//include "sistema_digital.php";

session_start();

$array_CPU = array();
$array_UCE = array();
$array_chasis_acorazado = array();
$array_controlador = array();
$array_enlazador = array();
$array_sistema_digital = array();

if ($_POST) {

    include "formulario.php";
} else {

    include "formulario.php";

    if (isset($_POST["boton_sd"])) {
        
    }

    if (isset($_POST["boton_ca"])) {
        
    }

    if (isset($_POST["boton_cpu"])) {
        
    }

    if (isset($_POST["boton_controlador"])) {
        
    }

    if (isset($_POST["boton_enlazador"])) {
        
    }

    if (isset($_POST["boton_uce"])) {
        
    }
}