
<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<title>Ingresar un Avión a la DB.</title>
</head>
<body>

<hr><br>

<?php

include('../conexiones/conexion-vehiculos.php');

$respuesta='';


$modelo= $_POST['modelo'];
	$modelolimitado= preg_replace("#[^a-zA-Z0-9_]#i","", $modelo);

$tiempo_de_utilidad= $_POST['tiempo_de_utilidad'];
	$tiempo_de_utilidad_limitado= preg_replace("[^0-9]", "", $tiempo_de_utilidad);
		$tiempo_de_utilidad_limitado_match= preg_match("/^[0-9]+$/", $tiempo_de_utilidad);

$alias= $_POST['alias'];
	$aliaslimitado= preg_replace("#[^a-zA-Z0-9_]#i", "", $alias);
		$aliaslimitadomatch= preg_match("/^[0-9a-zA-Z]+$/", $alias);

$nacionalidad= $_POST['nacionalidad'];
	$nacionalidadlimitada= preg_replace("#[^a-zA-Z_]#i", "", $alias);
		$nacionalidadlimitadamatch= preg_match("/^[a-zA-Z]+$/", $nacionalidad);

$autonomia=$_POST['autonomia'];
	$autonomialimitada= preg_replace("[^0-9]", "", $autonomia);
		$autonomialimitadamatch= preg_match("/^[0-9]+$/", $autonomia);

	if($autonomialimitadamatch and $tiempo_de_utilidad_limitado_match and $nacionalidadlimitadamatch and $aliaslimitadomatch) {

						$consulta= mysql_query("INSERT INTO aviones( modelo, tiempo_de_utilidad, alias, nacionalidad, autonomia) VALUES( '$modelolimitado', '$tiempo_de_utilidad_limitado','$aliaslimitado', '$nacionalidadlimitada', '$autonomialimitada')");

								$resultado=mysql_query($consulta);
								echo "Los datos ingresados fueron registrados correctamente, ingrese al siguiente link para ver la tabla actualizada";
							}

							else

							{echo "Los datos no parecen ser válidos o está incompletos, recuerde leer las limitaciones al lado de cada campo..";}



?><br>


<strong><br><a href="../paginas/aviones.php" >Volver</a></strong>
</body>
</html>


