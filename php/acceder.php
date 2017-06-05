
<?php
 echo "<script>hola();</script>";
 include("conexion.php");
 
 $email = $_POST["email_txt"];
 $pass = $_POST["pass_txt"];
 
 
 $consulta = "SELECT id_usuarios, nombre FROM usuarios WHERE email = '".$email."' and pass = '".$pass."';";
 $ejecutar_consulta = $conexion->query($consulta);

 if ($ejecutar_consulta->num_rows == 1) {
 	while($registros = $ejecutar_consulta->fetch_assoc())
	{
		// declaro mis variables de sesion
		session_start();
		$_SESSION["autentificado"] = true ;
		$_SESSION["usuario"] = $registros["nombre"];
		$_SESSION["id-usuario"] = $registros["id_usuarios"];
		$_SESSION["error"] = 0 ;
		header("Location: web/protegido.php");

	}

 }else{
 	session_start();
	// declaro mis variables de sesion
	$numErrores = $_SESSION["error"] ;
	$_SESSION["error"] = $numErrores + 1 ;
	$_SESSION["autentificado"] = false ;
	$_SESSION["usuario"] = "";
	$_SESSION["id-usuario"] = 0;
	header("Location: ../index.php");
 }
$conexion->close();

?>