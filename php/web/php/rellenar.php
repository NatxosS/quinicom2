<form id="cambio-rellenar" name="cambio_frm" action="php/modificar-rellenar.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<form id="cambio-contacto" name="cambio_frm" action="php/modificar-jornada.php" method="post" enctype="multipart/form-data">
		<?php
			$consulta = "select p.id_partidos, p.partido, ps.resultado from partidousuario as ps inner join partidos as p on p.id_partidos = ps.id_partidos where ps.id_usuarios = ".$_SESSION["id-usuario"]." order by p.id_partidos";
			include("php/rellenar-form.php");
                        
                        // recogemos los datos de los partidos
		?>
		</form>
		<?php
		include("php/mensajes.php");
		?>
	</fieldset>
</form>