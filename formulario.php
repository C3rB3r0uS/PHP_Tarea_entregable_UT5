<html>
    <head>
        <title>Proyecto Control</title>
    </head>
    <body>

        <h1>Proyecto Control</h1>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <label for="destruir_sesion">Destruir sesión: </label>
            <input type="submit" name="destruir_sesion" value="Borrar sesión"/>
            <br><br>

        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de Sistema Digital</b></legend>

                <label for="num_serie_sd">Número de serie: </label>
                <input type="text" name="num_serie_sd" value="" />
                <br>
                <label for="instante_activacion_sd">Instante de activación: </label>
                <input type="text" name="instante_activacion_sd" value="" />
                <br>
                <input type="submit" name="boton_sd" value="Crear objeto" <?PHP if(isset($_SESSION["HLL"]) || isset($_SESSION["array_sistema_digital"])) echo "disabled"?>/>

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
                <input type="submit" name="boton_ca" value="Crear objeto" <?PHP if(isset($_SESSION["HLL"])) echo "disabled"?>/>

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
                <input type="submit" name="boton_cpu" value="Crear objeto" <?PHP if(isset($_SESSION["HLL"])) echo "disabled"?>/>

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

                <?PHP
                require_once 'CPU.php';

                if (isset($_SESSION["array_cpu"])) {

                    echo "<select name='procesador_cpu'>";

                    foreach ($_SESSION["array_cpu"] as $cpu) {

                        echo "<option value='" . unserialize($cpu)->getNum_serie() . "'>" . unserialize($cpu)->getNum_serie() . "</option>";
                    }

                    echo "</select>";
                }
                ?>
                <br>
                <label for="ram_controlador">Cantidad de memoria RAM: </label>
                <input type="text" name="ram_controlador" value="" />
                <br>
                <input type="submit" name="boton_controlador" value="Crear objeto" <?PHP if(isset($_SESSION["HLL"])) echo "disabled"?>/>

            </fieldset>

        </form>

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <fieldset>
                <legend><b>Creación de enlazadores</b></legend>

                <label for="num_serie_enlazador">Número de serie: </label>
                <input type="text" name="num_serie_enlazador" value="" />
                <br>
                <label for="instante_activacion_enlazador">Instante de activación: </label>
                <input type="text" name="instante_activacion_enlazador" value="" />
                <br>
                <label for="procesador_enlazador">CPU usada: </label>

                <?PHP
                require_once 'CPU.php';

                if (isset($_SESSION["array_cpu"])) {

                    echo "<select name='procesador_enlazador'>";

                    foreach ($_SESSION["array_cpu"] as $cpu) {

                        echo "<option value='" . unserialize($cpu)->getNum_serie() . "'>" . unserialize($cpu)->getNum_serie() . "</option>";
                    }

                    echo "</select><br>";
                }
                ?>

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
                <input type="submit" name="boton_enlazador" value="Crear objeto" <?PHP if(isset($_SESSION["HLL"])) echo "disabled"?>/>

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
                require_once 'CPU.php';

                if (isset($_SESSION["array_cpu"])) {

                    echo "<select name='procesador_uce'>";

                    foreach ($_SESSION["array_cpu"] as $cpu) {

                        echo "<option value='" . unserialize($cpu)->getNum_serie() . "'>" . unserialize($cpu)->getNum_serie() . "</option>";
                    }

                    echo "</select><br>";
                }
                ?>

                <label for="chasis_uce">Chasis usado: </label>
                <?PHP
                require_once 'chasis_acorazado.php';

                if (isset($_SESSION["array_chasis_acorazado"])) {

                    echo "<select name='chasis_uce'>";

                    foreach ($_SESSION["array_chasis_acorazado"] as $chasis) {

                        echo "<option value='" . unserialize($chasis)->getNum_serie() . "'>" . unserialize($chasis)->getNum_serie() . "</option>";
                    }

                    echo "</select><br>";
                }
                ?>
                <input type="submit" name="boton_uce" value="Crear objeto" <?PHP if(isset($_SESSION["HLL"])) echo "disabled"?>/>

            </fieldset>

        </form> 

        <form method="POST" action="<?PHP $_SERVER["PHP_SELF"] ?>">

            <input type="submit" name="boton_hll" value="Desencadenar HLL" />

        </form>

    </body>
</html>


