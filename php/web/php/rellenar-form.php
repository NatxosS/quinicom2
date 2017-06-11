<div id="jornada">
    <?php
    include("conexion.php");
    $ejecutar_consulta = $conexion->query($consulta);
    $num_regs = $ejecutar_consulta->num_rows;

    if ($num_regs == 0) {
        echo "<br /><br /><span class='mensajes'>No se encontraron registros :( </span><br /> ";
    } else {
        ?>
        <div class="row">
            <div class="table-responsive col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <table class="table table-striped table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Num</th>
                            <th>Partido</th>
                            <th>&nbsp;1 &nbsp; X &nbsp; 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;

                        while ($registros = $ejecutar_consulta->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $registros["id_partidos"]; ?> </td>
                                <td> <label for="opcion" ><?php echo utf8_decode($registros["partido"]); ?> </label> </td>
                                <td width="80"> 
                                    <input type="radio" name="rdo_<?php echo $i; ?>" value="1" <?php if (($registros["resultado"]) == "1") echo "checked"; ?> /> 
                                    <input type="radio" name="rdo_<?php echo $i; ?>" value="X" <?php if (($registros["resultado"]) == "X") echo "checked"; ?> /> 
                                    <input type="radio" name="rdo_<?php echo $i; ?>" value="2" <?php if (($registros["resultado"]) == "2") echo "checked"; ?>/>
                                </td>
                            </tr>
                            <?php
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
    }
    $conexion->close();
    ?>
    <div class="row boton">
        <button type="submit" name="enviar_btn" id="enviar-cambio" class="cambio btn btn-primary btn-lg btn-block">Guardar</button>
    </div>
    
</div>