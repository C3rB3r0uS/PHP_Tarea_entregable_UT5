<html>
    <head>
        <title>Proyecto Control</title>
    </head>
    <body>

        <h1>Proyecto Control</h1>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de Sistema Digital</b></legend>

                <label for="num_serie_sd">Número de serie: </label>
                <input type="text" name="num_serie_sd" value="" />
                <br>
                <label for="instante_activacion_sd">Instante de activación: </label>
                <input type="text" name="instante_activacion_sd" value="" />
                <br>
                <input type="submit" name="boton_sd" value="Crear objeto" />

            </fieldset>
        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de chasis acorazado</b></legend>

                <label for="num_serie_ca">Número de serie: </label>
                <input type="text" name="num_serie_ca" value="" />
                <br>
                <label for="instante_activacion_ca">Instante de activación: </label>
                <input type="text" name="instante_activacion_ca" value="" />
                <br>
                <label for="fuente_energia_ca">Fuente de energía: </label>
                <select id="fuente_energia_ca" name="fuente_energia_ca">
                    <option value="hidrogeno">Hidrógeno</option>
                    <option value="uranio">Uranio</option>
                </select>
                <br>
                <label for="material_coraza_ca">Material de la coraza: </label>
                <select id="material_coraza_ca" name="material_coraza_ca">
                    <option value="japanium">Japanium</option>
                    <option value="grafeno">Grafeno</option>
                </select>
                <br>    
                <input type="submit" name="boton_ca" value="Crear objeto"/>

            </fieldset>
        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de CPUs</b></legend>

                <label for="num_serie_cpu">Número de serie: </label>
                <input type="text" name="num_serie_cpu" value="" />
                <br>
                <label for="instante_activacion_cpu">Instante de activación: </label>
                <input type="text" name="instante_activacion_cpu" value="" />
                <br>
                <label for="categoria_cpu_cpu">Categoría de CPU: </label>
                <select id="categoria_cpu" name="categoria_cpu">
                    <option value="matricial">Matricial</option>
                    <option value="neuronal">Neuronal</option>
                </select>
                <br>
                <label for="velocidad_cpu_cpu">Velocidad de CPU: </label>
                <input type="text" name="velocidad_cpu_cpu" value="" />
                <br>
                <input type="submit" name="boton_cpu" value="Crear objeto"/>

            </fieldset>
        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de controladores: </b></legend>

                <label for="num_serie_controlador">Número de serie: </label>
                <input type="text" name="num_serie_controlador" value="" />
                <br>
                <label for="instante_activacion_controlador">Instante de activación: </label>
                <input type="text" name="instante_activacion_controlador" value="" />
                <br>
                <label for="procesador_cpu">CPU usada: </label>
                <select name="procesador_cpu">

                <?PHP
                require_once 'CPU.php';
                
                if (isset($_SESSION["array_cpu"])) {
                   
                    foreach ($_SESSION["array_cpu"] as $num_serie_CPU) {
//                       echo '<option value=' . unserialize($num_serie_CPU)->getNumero_serie() . '>' . unserialize($num_serie_CPU)->getNumero_serie() . '</option>';
                   
                    }
  
                }
                ?>
                    
                </select><br>

                <label for="ram_controlador">Cantidad de memoria RAM: </label>
                <input type="text" name="ram_controlador" value="" />
                <br>
                <input type="submit" name="boton_controlador" value="Crear objeto"/>

            </fieldset>

        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de enlazadores</b></legend>

                <label for="num_serie_enlazador">Número de serie: </label>
                <input type="text" name="num_serie_enlazador" value="" />
                <br>
                <label for="instante_activacion_enlazador">Instante de activación: </label>
                <input type="text" name="instante_activacion_controlador" value="" />
                <br>
                <label for="procesador_enlazador">CPU usada: </label>
                <?PHP
                require_once 'CPU.php';

                if (isset($_SESSION["array_CPU"])) {

                    $array_cpu = unserialize($_SESSION["array_cpu"]);

                    echo "<select name='procesador_enlazador'>";

//                    for ($i = 0; $i < count($array_cpu); $i++) {
//
//                        echo "<option value=" . "'CPU " . $i . "'>" .
//                        "'CPU " . $i . " categoría: " . $array_cpu[i]->getCategoria_CPU() . " velocidad: " . $array_cpu[i]->getVelocidad_CPU();
//
//                        echo "</option>";
//                    }

                    foreach ($array_cpu as $num_serie) {

                        echo "<option value=" . $num_serie->getNum_serie() . ">" . $num_serie->getNum_serie() . "</option>";
                    }

                    echo "</select>";
                }
                ?>

                <br>
                <label for="ram_enlazador">Cantidad de memoria RAM: </label>
                <input type="text" name="ram_enlazador" value="" />
                <br>
                <label for="conexion_enlazador">Tipo de conexión: </label>
                <select id="conexion" name="conexion_enlazador">
                    <option value="wifi">WiFi</option>
                    <option value="ultra_wifi">Ultra-WiFi</option>
                    <option value="laser">Láser</option>
                </select>
                <br>
                <input type="submit" name="boton_enlazador" value="Crear objeto"/>

            </fieldset>
        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>

                <legend><b>Creación de UCE</b></legend>

                <label for="num_serie_uce">Número de serie: </label>
                <input type="text" name="num_serie_uce" value="" />
                <br>
                <label for="instante_activacion_uce">Instante de activación: </label>
                <input type="text" name="instante_activacion_uce" value="" />
                <br>

                <label for="procesador_uce">CPU usada: </label>
                <?PHP
                echo "<select name='procesador_uce'>";

                if ($_SESSION["array_CPU"]) {

                    foreach ($_SESSION["array_CPU"] as $key => $value) {

                        if ($value instanceof CPU) {

                            echo "<option value='" . $key . "'>" . $key . "</option>";
                        }
                    }
                }

                echo "</select><br>";
                ?>

                <label for="chasis_uce">Chasis usado: </label>
                <?PHP
                echo "<select name='chasis_uce'>";

                if ($_SESSION) {

                    foreach ($_SESSION as $key => $value) {

                        if ($value instanceof chasis_acorazado) {

                            echo "<option value='" . $key . "'>" . $key . "</option>";
                        }
                    }
                }

                echo "</select><br>"
                ?>
                <input type="submit" name="boton_uce" value="Crear objeto"/>

            </fieldset>

        </form>     

    </body>
</html>


