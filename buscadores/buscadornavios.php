
<?php
session_start();

if(isset($_SESSION["usuarios"])) {echo "Logueado como:  ". $_SESSION["usuarios"]; echo "<strong><br><a href='../vehiculos/logout.php' >Salir</a></strong>" ;}
?>

<!DOCTYPE html>
<html>
<head>

<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<title>Buscado de navios en DB.</title>
</head>
<body>
<hr>
Estos fueron los resultados que arrojó nuestra DB.<br><br>

<?php

include('../conexiones/conexion-vehiculos.php');

$respuesta= '';

if(isset($_POST['buscador'])) { $buscadorquery= $_POST['buscador'];

								$consulta= mysqli_query($conexion, "SELECT * FROM navios WHERE Nombre LIKE '%$buscadorquery%' OR Tipo LIKE '%$buscadorquery%'") or die("No se encontraron resultados...". mysqli_error()); 

								$contadordecol= mysqli_num_rows($consulta);

								if($contadordecol == 0) { $respuesta= "no hay resultados en la db";}

								else{ while($columnas = mysqli_fetch_array($consulta))  {  $nom= $columnas['Nombre'];
																						 $tip= $columnas['Tipo']; 

																						 $respuesta.= '<div>' . $nom . "  " . $tip . '</div>';}

			}
		}
print ("$respuesta");



?>

<strong><br><a href="../paginas/barchos.php" >Volver</a></strong>
</body>
</html>
