<?php
    $hecho = false; // variable que nos dira si ejecutar la finalización o no
?>
<script>
    function validarDatos() {
        var verificar = true;
        if (confirm("Si finaliza la jornada se borraran los partidos actuales y se sumara el importe ¿Desea continuar?"))
            verificar = true;
        else
            verificar = false;


        if (verificar) {
            <?php
                $hecho = true;
            ?>
            document.cambio_frm.submit(); // si aceptamos el mensaje de alerta se hara el submit del formulario (modificar-fin-jornada.php)
        } else {
            document.cambio_frm.recaudado_txt.focus();
        }
    }

    window.onload = function () {
        document.getElementById("enviar-cambio").onclick = validarDatos; // al hacer clic en el boton nos vamos a la función validar datos
    }

</script>
<form id="fin-jornada" name="cambio_frm" action="php/modificar-fin-jornada.php" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <?php
        ?>
        <div class="row">
            <div class="table-responsive col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th colspan="4">Jornada pagada por:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="1">Carlos</label>
                                <input type="radio" id="1" name="rdo_echada" value="1" checked/>
                            </td>
                            <td>
                                <label for="2">Ignacio</label>
                                <input type="radio" id="2" name="rdo_echada" value="2"/>
                            </td>
                            <td>
                                <label for="3">Mario</label>
                                <input type="radio" id="3" name="rdo_echada" value="3"/>
                            </td>
                            <td>
                                <label for="4">Jota</label> <input type="radio" id="4" name="rdo_echada" value="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="5">Pollo</label> <input type="radio" id="5" name="rdo_echada" value="5"/></td>
                            <td><label for="6">David</label> <input type="radio" id="6" name="rdo_echada" value="6"/></td>
                            <td><label for="7">Alberto</label> <input type="radio" id="7" name="rdo_echada" value="7"/></td>
                            <td><label for="8">Victor</label> <input type="radio" id="8" name="rdo_echada" value="8"/></td>
                        </tr>
                        <tr class="success">
                            <th colspan="4">
                                <div class="form-group">
                                    <label for="recaudado">Recaudado en esta jornada: </label>
                                    <input type="number" step="any" class="cambio form-control" id="recaudado" name="recaudado_txt" placeholder="0.00" title="recaudado" oninput="maximo(this)" min="0" max="999999999" maxlength="10" required value = "0" />
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
                <div class="row boton">
                    <button type="submit" name="enviar_btn" id="enviar-cambio" class="cambio btn btn-primary btn-lg btn-block">Guardar y Finalizar Jornada</button>
                </div>
            </div>
        </div>    
</form>
<?php
include("php/mensajes.php");
?>
<?php // incluimos la vista del archivo tabla-importes.php a cntinuación, ejecutando la consulta que nos suma los impirtes recaudados con el mismo id de usuario y las participaciones con el mismo id de usuario
$consulta = "select usuarios.nombre, SUM(importe) as importe, count(id_usuarios) as participaciones from jornadas inner join usuarios on jornadas.id_echada = usuarios.id_usuarios group by id_echada
						UNION
						select 'Total:', sum(importe), COUNT(id_jornada) from jornadas;";
include("php/tabla-importes.php");
?>
</fieldset>


</form>