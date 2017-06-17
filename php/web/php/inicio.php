<form>
<?php
/* consulta que nos devielve los partidos y sus resultados si los tubiera, y las apuestas de cada uno de los jugadores */

			$consulta = "select p.partido, p.resultado, Cr, Ir, Mr, Jr, Pr, Dr, Ar, Vr from partidos as p 
inner JOIN (select id_partidos, resultado as Cr FROM partidousuario where id_usuarios = 1) as c on c.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Ir FROM partidousuario where id_usuarios = 2) as i on i.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Mr FROM partidousuario where id_usuarios = 3) as m on m.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Jr FROM partidousuario where id_usuarios = 4) as j on j.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Pr FROM partidousuario where id_usuarios = 5) as po on po.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Dr FROM partidousuario where id_usuarios = 6) as d on d.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Ar FROM partidousuario where id_usuarios = 7) as a on a.id_partidos = p.id_partidos 
inner JOIN (select id_partidos, resultado as Vr FROM partidousuario where id_usuarios = 8) as v on v.id_partidos = p.id_partidos 
order by p.id_partidos";

                        
                        /* consulta que nos devuelve el recuento de los aciertos de cada usuario del grupo */
$consulta2 = "select pu.id_usuarios, COUNT(p.partido) as cuenta from partidousuario as pu left JOIN partidos as p on p.id_partidos = pu.id_partidos and p.resultado = pu.resultado GROUP by pu.id_usuarios";
include("php/inicio-form.php");
?>
</form>
<script>
    /*if (Notification) {
        Notification.requestPermission();
    }*/
</script>