
<?php
 echo "<script>hola();</script>";
 include("conexion.php");
 
 /* recogemos las credenciales intoducidas por el usuario recibidas por POST */
 $email = $_POST["email_txt"];
 $pass = $_POST["pass_txt"];

 /* comprobamos que exista en base de datos el usuario con ese email y contraseña */
 $consulta = "SELECT id_usuarios, nombre FROM usuarios WHERE email = '".$email."' and pass = '".$pass."';";
 $ejecutar_consulta = $conexion->query($consulta);

 if ($ejecutar_consulta->num_rows == 1) {   /* si existe el usuario */
 	while($registros = $ejecutar_consulta->fetch_assoc())
	{
		// declaro mis variables de sesion y enviao al usuario a protegido.php
		session_start();
		$_SESSION["autentificado"] = true ;
		$_SESSION["usuario"] = $registros["nombre"];
		$_SESSION["id-usuario"] = $registros["id_usuarios"];
		$_SESSION["error"] = 0 ;
                $conexion->close();
		header("Location: web/protegido.php");

	}

 }else{
 	session_start();
	// declaro mis variables de sesion con autentificado a false, enviamos al usuario a la vista de login
	$numErrores = $_SESSION["error"] ;
	$_SESSION["error"] = $numErrores + 1 ;
	$_SESSION["autentificado"] = false ;
	$_SESSION["usuario"] = "";
	$_SESSION["id-usuario"] = 0;
        $conexion->close();
	header("Location: ../index.php");
 }

