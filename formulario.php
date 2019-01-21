<html>
    <head>
        <title>Los abandonados</title>
    </head>
    <body>
        
        <h1>Proyecto Control</h1>
        
        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">
            
            <fieldset>
                <legend><b>Creación de Sistema Digital</b></legend>
                
                <label for="num_serie_sd">Número de serie</label>
                <input type="text" name="num_serie_sd" value="" />
                <br>
                <label for="instante_activacion_sd">Instante de activación</label>
                <input type="text" name="instante_activacion_sd" value="" />
                <br>
                <input type="submit" name="boton_sd" value="Crear objeto" />
                
            </fieldset>
            
            <fieldset>
                <legend><b>Creación de chasis acorazado</b></legend>
                
                <label for="num_serie_ca">Número de serie</label>
                <input type="text" name="num_serie_ca" value="" />
                <br>
                <label for="instante_activacion_ca">Instante de activación</label>
                <input type="text" name="instante_activacion_ca" value="" />
                <br>
                 <label for="fuente_energia_ca">Fuente de energía</label>
                <input type="text" name="fuente_energia_ca" value="" />
                <br>
                 <label for="material_coraza_ca">Material de la coraza</label>
                <input type="text" name="material_coraza_ca" value="" />
                <br>    
                <input type="submit" name="boton_ca" value="Crear objeto"/>
                
            </fieldset>
            
            <fieldset>
                <legend><b>Creación de CPUs</b></legend>
                
                <label for="num_serie_cpu">Número de serie</label>
                <input type="text" name="num_serie_cpu" value="" />
                <br>
                <label for="instante_activacion_cpu">Instante de activación</label>
                <input type="text" name="instante_activacion_cpu" value="" />
                <br>
                <label for="categoria_cpu_cpu">Categoría de CPU</label>
                <input type="text" name="categoria_cpu_cpu" value="" />
                <br>
                <label for="velocidad_cpu_cpu">Velocidad de CPU</label>
                <input type="text" name="velocidad_cpu_cpu" value="" />
                <br>
                <input type="submit" name="boton_cpu" value="Crear objeto"/>
                      
            </fieldset>
            
            <fieldset>
                <legend><b>Creación de controladores</b></legend>
                
                <label for="num_serie_enlazador">Número de serie</label>
                <input type="text" name="num_serie_enlazador" value="" />
                <br>
                <label for="instante_activacion_enlazador">Instante de activación</label>
                <input type="text" name="instante_activacion_enlazador" value="" />
                <br>
                <label for="procesador_cpu">CPU usada</label>
                <?PHP 
                
                echo "<select name='procesador_cpu'>";
                
                if($_SESSION){
                    
                    foreach ($_SESSION as $key => $value) {
                        
                        if($value instanceof CPU){
                            
                            echo "<option value='".$key."'>".$key."</option>";
                            
                        }
                        
                    } 
                    
                }
              
                echo "</select>"
                
                ?>
                <br>
                <label for="velocidad_cpu_controlador">Velocidad de CPU</label>
                <input type="text" name="velocidad_cpu_controlador" value="" />
                <br>
                <input type="submit" name="boton_controlador" value="Crear objeto"/>
                      
            </fieldset>
            
             <fieldset>
                <legend><b>Creación de enlazadores</b></legend>
                
                <label for="num_serie_enlazador">Número de serie</label>
                <input type="text" name="num_serie_enlazador" value="" />
                <br>
                <label for="instante_activacion_enlazador">Instante de activación</label>
                <input type="date" name="instante_activacion_controlador" value="" />
                <br>
<!--                <label for="procesador_cpu">Categoría de CPU</label>
                <input type="text" name="categoria_cpu" value="" />
                <br>-->
                <label for="velocidad_cpu_controlador">Velocidad de CPU</label>
                <input type="text" name="velocidad_cpu_controlador" value="" />
                <br>
                <input type="submit" name="boton_controlador" value="Crear objeto"/>
                      
            </fieldset>
            
            
            
            
   

    </body>
</html>


