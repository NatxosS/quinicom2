<!-- *****************  Vista de jornada  ****************  -->

<div id="jornada">
<?php
 include("conexion.php");
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;
// ejecutamos la consulta del archivo jornada.php (Nos devuelve los partidos y sus resultados si los tubiese)
	if($num_regs == 0)
	{
		echo "<div class='alert alert-danger alert-dismissable fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>No se encontrarón los registros :/ </strong></div>";
	}
	else
	{
	?>
	 <div class="row">
            <div class="table-responsive col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <table class="table table-striped table-bordered text-center">
			<thead>
				<tr>
                                    <th style="width: 20px">Num</th>
					<th>Partido</th>
					<th>Resultado final</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				
				while($registros = $ejecutar_consulta->fetch_assoc())
				{
				?>
					<tr>
						<td> <?php echo $i; ?></td>
                                                <td width="60%"> <input autocomplete="off" type="text" name='partido_<?php echo $i; ?>' class="form-control" placeholder="Equipo1 - Equipo2" value='<?php echo utf8_decode($registros["partido"]); ?>' /> </td>
						<td width="90"> <!-- chequeamos según resultado -->
							<input type="radio" name="rdo_<?php echo $i; ?>" value="1" <?php if (($registros["resultado"]) == "1") echo "checked"; ?> onDblClick="uncheckRadio(this)" /> 
							<input type="radio" name="rdo_<?php echo $i; ?>" value="X" <?php if (($registros["resultado"]) == "X") echo "checked"; ?> onDblClick="uncheckRadio(this)" /> 
							<input type="radio" name="rdo_<?php echo $i; ?>" value="2" <?php if (($registros["resultado"]) == "2") echo "checked"; ?> onDblClick="uncheckRadio(this)" />
						</td>
					</tr>
				<?php
				$i = $i + 1;
				}
				?>
			</tbody>
		</table>

	<?php
	}
	$conexion->close();
?>
        <div class="row boton">
            <button type="submit" name="enviar_btn" id="enviar-cambio" class="cambio btn btn-primary btn-lg btn-block">Guardar</button>
            <!-- Futuro botón si hacemos la carga de partidos desde alguna API externa -->
            <!--button type="submit" name="enviar_btn" id="solicitarPartidos" class="cambio btn btn-primary btn-lg btn-block" disabled>Cargar Partidos</button-->
        </div>
</div>