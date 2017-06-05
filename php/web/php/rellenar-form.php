<div id="jornada">
<?php
 include("conexion.php");
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;

	if($num_regs == 0)
	{
		echo "<br /><br /><span class='mensajes'>No se encontraron registros :( </span><br /> ";
	}
	else
	{
	?>
		<table class="rellenar">
			<thead>
				<tr>
					<th>Num</th>
					<th>Partido</th>
					<th>1 X 2</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				
				while($registros = $ejecutar_consulta->fetch_assoc())
				{
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

	<?php
	}
	$conexion->close();
?>
	<div>
		<br/>
		<input type="submit" id="enviar-cambio" class="cambio" name="enviar_btn" value="Guardar" />
	</div>
</div>