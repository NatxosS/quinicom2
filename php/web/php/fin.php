
<script>
		function validarDatos(){
			var verificar =true;
			if(confirm("Si finaliza la jornada se borraran los partidos actuales y se sumara el importe ¿Desea continuar?"))
				verificar =true;
			else
				verificar =false;
			
			
		if (verificar) {
				document.cambio_frm.submit();
			}else{
				document.cambio_frm.recaudado_txt.focus();
			}
		}
		
		window.onload = function(){
			document.getElementById("enviar-cambio").onclick = validarDatos;
		}
		
	</script>
<form id="fin-jornada" name="cambio_frm" action="php/modificar-fin-jornada.php" method="post" enctype="application/x-www-form-urlencoded">
	<fieldset>
		<?php
 		?>
 			
 			<table style="text-align:center; margin: 0 auto; padding-top: 1em;">
 				<thead>
				<tr>
					<th></th>
					<th>Pagada por:</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td><label for="1">Carlos</label> <input type="radio" id="1" name="rdo_echada" value="1" checked/></td>
						<td><label for="2">Ignacio</label> <input type="radio" id="2" name="rdo_echada" value="2"/></td>
						<td><label for="3">Mario</label> <input type="radio" id="3" name="rdo_echada" value="3"/></td>
					</tr>
					<tr>
						<td><label for="4">Jota</label> <input type="radio" id="4" name="rdo_echada" value="4"/></td>
						<td><label for="5">Pollo</label> <input type="radio" id="5" name="rdo_echada" value="5"/></td>
						<td><label for="6">David</label> <input type="radio" id="6" name="rdo_echada" value="6"/></td>
					</tr>
					<tr>
						<td><label for="7">Alberto</label> <input type="radio" id="7" name="rdo_echada" value="7"/></td>
						<td><label for="8">Victor</label> <input type="radio" id="8" name="rdo_echada" value="8"/></td>

					</tr>
			</tbody>
	</table>

			<br/>
			<div>
			<label for="recaudado">Recaudado: </label>
			<input type="number" step="any" id="recaudado" class="cambio" name="recaudado_txt" placeholder="Escribe la recaudacion" title="recaudado" oninput="maximo(this)" min="0" max="999999999" maxlength="10" required value = "0" />
			</div>
			
			<div>
				<br/>
				<input type="button" id="enviar-cambio" class="cambio" name="enviar_btn" value="Guardar" />
			</div>
		</form>
		<?php
		include("php/mensajes.php");
		?>
		<?php
			$consulta = "select usuarios.nombre, SUM(importe) as importe, count(id_usuarios) as participaciones from jornadas inner join usuarios on jornadas.id_echada = usuarios.id_usuarios group by id_echada
						UNION
						select 'Total:', sum(importe), COUNT(id_jornada) from jornadas;";
			include("php/tabla-importes.php");
		?>
	</fieldset>
		

</form>