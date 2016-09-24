
<?php

session_start();

if(isset($_SESSION["usuarios"])) {echo "Logueado como:  ". $_SESSION["usuarios"];} 
?>


<!DOCTYPE html>
<html>
<head>
		<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		
		<title>Página de prueba</title>
								
								<h2 align="center">PAGINA DE PRUEBA: Helicopteros de combate</h2>
</head>
<body>

<strong><br><a href="../index.php" >Volver</a></strong>
<?php
include('../conexiones/conexion-vehiculos.php');

$consultas='SELECT * FROM helicopteros';
$result= mysqli_query($conexion, $consultas);

$tabla= "<table>";
while($linea= mysqli_fetch_array($result, MYSQLI_NUM) ) {
	$tabla.= "<tr>";
	foreach($linea as $valor) {
		$tabla.="<td>$valor</td>";
	}
	$tabla.= "<tr>";
}
$tabla.= "</table>";

echo $tabla;

?>

<hr>



<form name="buscador-helicopteros"	align="center" method="post" action="../buscadores/buscadordehelicopteros.php" > </br></br>
<label>Buscador de helicpteros:</label>
<input type="text" name="buscadorhelic" maxlength="50" size="16" > 
<input type="submit" name="submit">
</form><br>



<br> </br>
<strong><h2>Subir un helicoptero</h2></strong>

<td>
<input type="hidden" name="id" maxlength="2000" size="16" > 
</td>
</tr>

<form name="subir-helicoptero"	method="post" action="../funciones/ingresarhelicoptero.php">
<table>

<tr>
<td>
<label for="modelo"> Modelo: </label>
</td>
<td>
<input type="text" name="modelo" maxlength="50" size="16">
</td>
<td>
• Letras, números y símbolos admitidos.
</td>
</tr>

<tr>
<td>
<label for="armamento"> Armamento: </label>
</td>
<td>
<input type="text" name="armamento" maxlength="50" size="16">
</td>
<td>
• Sólo son admitidas las letras.
</td>
</tr>

<tr>
<td>
<label for="autonomia"> Autonomía: </label>
</td>
<td>
<input type="number" name="autonomia" maxlength="50" size="16">
</td>
<td>
• Cantidad de litros de combustible expresado en números.
</td>
</tr>

<tr>
<td>
<input type="submit"  value="subir">
</td>
</tr>

</table>
</form>


</body>
</html>



