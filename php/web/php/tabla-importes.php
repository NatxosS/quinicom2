<?php
 include("conexion.php");
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;

	if($num_regs == 0)
	{
		echo "<div class='alert alert-danger alert-dismissable fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>No se enontraron los registros :/ </strong></div>";
	}
	else
	{
		?>
                <div class="row">
                    <div class="table-responsive col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <table class="rellenar table table-striped table-bordered text-center">
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
                    </div>
                </div>
<?php
}
