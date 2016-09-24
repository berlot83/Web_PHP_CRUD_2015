
<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<title>ingresar un helicoptero a la BD.</title>
</head>
<body>


<?php

include('../conexiones/conexion-vehiculos.php');



$modelo= $_POST['modelo'];
	$modelolimitado= preg_match("/^[a-zA-Z0-9]+$/", $modelo);

$armamento= $_POST['armamento'];
	$armamentolimitado= preg_match("/^[a-zA-Z0-9]+$/", $armamento);

$autonomia= $_POST['autonomia'];
	$autonomialimitada= preg_match("/^[0-9]+$/", $autonomia);


if($modelolimitado and $armamentolimitado and $autonomialimitada) 

						{
							$consulta= mysqli_query($conexion, "INSERT INTO helicopteros(id, modelo, armamento, autonomia) VALUES( NULL,'$modelo', '$armamento', '$autonomia')");
						 	echo "<br>"."Los datos han sido cargados con éxito a la base de datos, toque en el siguiente link para volver a la tabla. "."<br><br>"."<a href= '../paginas/helicopteros.php'>Volver</a>";
						} 

		else 			
						{ 

							echo " No se han podido ingresar los datos de registro del helicoptero, tenga en cuenta que sólo se aceptan números y letras, nó  símbolos, toque en el siguiente link para volver a intentarlo."."<br><br>";
	 						echo "<a href= '../paginas/helicopteros.php'>Volver</a>";
		
						}	

?>

</body>
</html>