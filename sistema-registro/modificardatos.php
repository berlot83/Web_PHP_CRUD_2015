
<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<title>Madoficar datos de su cuenta:</title>
</head>
<body>

<?php
include('../conexiones/conexion-vehiculos.php');
session_start();

$usuariosession= $_SESSION["usuarios"];


$nombre=$_POST['nombre'];
	$nombrelimitado= preg_match("/^[a-zA-Z]+$/", $nombre);

$usuario=$_POST['usuario'];
	$usuariolimitado= preg_match("/^[a-zA-Z0-9]+$/", $usuario);

$password=$_POST['password'];
	$passwordcorta=  substr($password,0,12);

$email=$_POST['email'];
	$emaillimitado= filter_var($email, FILTER_VALIDATE_EMAIL);


	
if($nombrelimitado and $usuariolimitado and $passwordcorta and $emaillimitado) {
				
								$consulta= "UPDATE usuarios SET Nombre= '$nombre', usuarios= '$usuario', password= '$password', email= '$email' WHERE usuarios='$usuariosession'";
								echo "Se modificaron todos sus datos ingrese nuevamente en el siguiente link:". "<br><br>";
								$resultado= mysqli_query($conexion, $consulta);

									session_destroy();

		echo "<strong><br><a href='../index.php' >Ir a inicio para iniciar sesión nuevamente...</a></strong>"."<br>" ;  }

	else

	 	{echo "<br><br>"."Error en el envio de datos, no se actualizaron, controle los requisitos de envío". "<br><br>"; 
	 	echo "<strong><br><a href='../sistema-registro/datospersonales.php' >Volver a intentarlo.</a></strong>"."<br>" ; }
	

												






	?>


</body>
</html>

