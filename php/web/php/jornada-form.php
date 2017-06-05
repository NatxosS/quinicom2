<script>
		function validarDatos(){
			Notification.requestPermission( function(status) {
   			 if (status == "granted"){
         		var notif = new Notification("Ejemplo de notificación");
				setTimeout(notif.close, 30);
			}
			});
			
		}
		window.onload = function(){
			document.getElementById("enviar-cambio").onclick = validarDatos;
		}
</script>
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
		<table>
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
						<td> <?php echo $i; ?></td>
						<td width="60%"> <input  autocomplete="off" type="text"  name='partido_<?php echo $i; ?>' value='<?php echo utf8_decode($registros["partido"]); ?>' /> </td>
						<td width="90"> 
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
	<div>
		<br/>
		<input type="submit" id="enviar-cambio" class="cambio" name="enviar_btn" value="Guardar" />
	</div>
</div>