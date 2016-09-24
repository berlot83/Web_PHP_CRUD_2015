
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
	<title>Buscador de aviones en DB.</title>
</head>
<body>
<hr>
Estos fueron los resultados que arrojó nuestra DB.<br><br>

<?php

$conexion= mysql_connect("localhost", "root", "" ) or die("Imposible conectar". mysql_error() );

// Seleccionar una Tabla.
mysql_select_db("vehiculos") or die("No se pudo conectar a la Tabla requerida");

$respuesta= '';

if(isset($_POST['buscador'])) 	{
									$buscadorquery= $_POST['buscador'];
									

																		$consulta= mysql_query("SELECT * FROM aviones WHERE modelo LIKE '%$buscadorquery%' OR alias LIKE '%$buscadorquery%'") or die("No se encontraron resultados o no se pudo conectar a la db");
																		$contadordecolumnas= mysql_num_rows($consulta);

																		if($contadordecolumnas == 0) {

																			$respuesta= "No hay resultados disponibles al momento...";


																			} else 	{
																						while($columnas = mysql_fetch_array($consulta)) {
																													$mod = $columnas['modelo'];
																													$ali = $columnas['alias'];
																													
																													$respuesta .= '<div>' . $ali . "  " . $mod .'</div>'   ;
																																	}



																		}

								}

print ("$respuesta") ;

?>

<strong><br><a href="../paginas/aviones.php" >Volver</a></strong>
</body>
</html>