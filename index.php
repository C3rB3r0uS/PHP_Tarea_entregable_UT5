<?php

require_once "CPU.php";
require_once "UCE.php";
require_once "chasis_acorazado.php";
require_once "controlador.php";
require_once "enlazador.php";
require_once "sistema_digital.php";

session_start();

$array_UCE = array();
$array_controlador = array();
$array_enlazador = array();

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

                $objeto_sd = new sistema_digital($num_serie, $instante_activacion);
                
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
        
       if(!empty($_POST["num_serie_ca"]) && !empty($_POST["instante_activacion_ca"])){
           
           $num_serie_ca = $_POST["num_serie_ca"];
           $instante_activacion_ca = $_POST["instante_activacion_ca"];
           $fuente_energia_ca = $_POST["fuente_energia_ca"];
           $material_coraza_ca = $_POST["material_coraza_ca"];
           
           if(is_numeric($instante_activacion_ca)){
               
               $objeto_ca = new chasis_acorazado($num_serie_ca, $instante_activacion_ca, $fuente_energia_ca, $material_coraza_ca);
               
               $array_chasis_acorazado = array();
               
               if(isset($_SESSION("array_chasis_acorazado"))){
                   
                   $array_chasis_acorazado = unserialize($_SESSION["array_chasis_acorazado"]);
                   array_push($array_chasis_acorazado, $objeto_ca);
                   $_SESSION["array_chasis_acorazado"] = serialize($array_chasis_acorazado);
                   
               }else{
                   
                   array_push($array_chasis_acorazado, $objeto_ca);
                   $_SESSION["array_chasis_acorazado"] = serialize($array_chasis_acorazado);
                   
               }
               
           }
           
       }
        
    }

    // CREACIÓN DE OBJETOS "CPU"

    if (isset($_POST["boton_cpu"])) {
        
        if(!empty($_POST["num_serie_cpu"]) && !empty($_POST["instante_activacion_cpu"]) && !empty($_POST["velocidad_cpu"])){
            
            $num_serie_cpu = $_POST["num_serie_cpu"];
            $instante_activacion_cpu = $_POST["instante_activacion_cpu"];
            $categoria_cpu = $_POST["categoria_cpu"];
            $velocidad_cpu_cpu = $_POST["velocidad_cpu_cpu"]; 
            
            if(is_numeric($instante_activacion_cpu) && is_numeric($velocidad_cpu_cpu)){
                
                $objeto_cpu = new CPU($num_serie_cpu, $instante_activacion_cpu, $categoria_cpu, $velocidad_cpu_cpu);
                
                $array_CPU = array();
                
                 if(isset($_SESSION("array_cpu"))){
                   
                   $array_cpu = unserialize($_SESSION["array_cpu"]);
                   array_push($array_cpu, $objeto_cpu);
                   $_SESSION["array_cpu"] = serialize($array_cpu);
                   
               }else{
                   
                   array_push($array_cpu, $objeto_cpu);
                   $_SESSION["array_cpu"] = serialize($array_cpu);
                   
               }
                
            }
            
        }
        
    }

    // CREACIÓN DE OBJETOS "CONTROLADOR"

    if (isset($_POST["boton_controlador"])) {
        
    }

    // CREACIÓN DE OBJETOS "ENLAZADOR"

    if (isset($_POST["boton_enlazador"])) {
        
    }

    // CREACIÓN DE OBJETOS "UCE"

    if (isset($_POST["boton_uce"])) {
        
    }
}