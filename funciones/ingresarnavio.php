


<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<title>Ingreso de barcos a la DB</title>
</head>
<body>

<hr><br>

<?php

include('../conexiones/conexion-vehiculos.php');

$respuesta='';

$Nombre= $_POST['Nombre'];
$Tipo= $_POST['Tipo'];
$Antiguedad= $_POST['Antiguedad'];
$Nacionalidad= $_POST['Nacionalidad'];

								$consulta= mysqli_query($conexion, "INSERT INTO navios( id, Nombre, Tipo, Antiguedad, Nacionalidad) VALUES( NULL, '$Nombre', '$Tipo','$Antiguedad', '$Nacionalidad')") or die("no se conectó". mysql_error());

								$resultado=mysql_query($consulta);
								echo "Los datos ingresados fueron registrados correctamente, ingrese al siguiente link para continuar navegando";
?>

<strong><br><a href="../paginas/barchos.php" >Volver</a></strong>
</body>
</html>


