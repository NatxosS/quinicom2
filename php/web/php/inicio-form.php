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
		<table style="text-align:center;">
			<thead>
				<tr>
					<th>Num</th>
					<th>Partido</th>
					<th>Resultado</th>
					<th>Carlos</th>
					<th>Ignacio</th>
					<th>Mario</th>
					<th>Jota</th>
					<th>Pollo</th>
					<th>David</th>
					<th>Alberto</th>
					<th>Victor</th>
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
						<td width="25%"><?php echo utf8_decode($registros["partido"]); ?> </td>
						<td width="60" id="<?php echo $i ?>"> 
						<?php echo $registros["resultado"]; ?> 
						</td>
						<td width="60" id="<?php echo '1_'.$i ?>"> 
						<?php echo $registros["Cr"]; ?>
						</td>
						<td width="60" id="<?php echo '2_'.$i ?>"> 
						<?php echo $registros["Ir"]; ?>
						</td>
						<td width="60" id="<?php echo '3_'.$i ?>"> 
						<?php echo $registros["Mr"]; ?>
						</td>
						<td width="60" id="<?php echo '4_'.$i ?>"> 
						<?php echo $registros["Jr"]; ?>
						</td>
						<td width="60" id="<?php echo '5_'.$i ?>"> 
						<?php echo $registros["Pr"]; ?>
						</td>
						<td width="60" id="<?php echo '6_'.$i ?>"> 
						<?php echo $registros["Dr"]; ?>
						</td>
						<td width="60" id="<?php echo '7_'.$i ?>"> 
						<?php echo $registros["Ar"]; ?> 
						</td>
						<td width="60" id="<?php echo '8_'.$i ?>"> 
						<?php echo $registros["Vr"]; ?> 
						</td>
					</tr>
				<?php
				$i = $i + 1;
				}
				?>
				<tr>
				</tr>
				<tr>
					<?php
					$ejecutar_consulta2 = $conexion->query($consulta2);
					$num_regs2 = $ejecutar_consulta2->num_rows;

					if($num_regs2 == 0)
					{
					?>
						
						
						<td colspan="3">Total: </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						<td width="60"> 0 </td>
						
						
					<?php
					}
					else
					{
					?>
						<td colspan="3">Total: </td>
						
						<?php 
						 $j = 1;
						while($registros2 = $ejecutar_consulta2->fetch_assoc()) { ?>
							<td width="60" id="<?php echo 'total'.$j ?>">  <?php echo $registros2["cuenta"]; ?> </td>
						 
						<?php
							$j = $j + 1;
						}
						?>
						<script languaje="javascript"> 
							funcion_colorea(); 
						</script> 
						<?php
					}
					?>

				</tr>
			</tbody>
		</table>
<?php
	}
	$conexion->close();
?>
</div>