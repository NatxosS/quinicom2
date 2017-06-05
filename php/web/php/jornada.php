

<form id="cambio-jornada" name="cambio_frm" action="php/modificar-jornada.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<form id="cambio-contacto" name="cambio_frm" action="php/modificar-jornada.php" method="post" enctype="multipart/form-data">
		<?php
			$consulta = "select partido, resultado from partidos order by id_partidos";
			include("php/jornada-form.php");
		?>
		</form>
		<?php
		include("php/mensajes.php");
		?>
	</fieldset>
</form>