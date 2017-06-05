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
		<table class="rellenar" style="text-align:center; margin: 0 auto; padding-top: 1em;">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Recaudado</th>
					<th>Participaciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($registros = $ejecutar_consulta->fetch_assoc())
				{
				?>
					<tr>
						<td><?php echo $registros["nombre"]; ?> </td>
						<td><?php echo $registros["importe"]; ?> </td>
						<td><?php echo $registros["participaciones"]; ?> </td>
					</tr>
				<?php
				}
				?>
			</tbody>
	</table>
<?php
}
?>