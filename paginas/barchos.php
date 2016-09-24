<?php

session_start();

if(isset($_SESSION["usuarios"])) {echo "Logueado como:  ". $_SESSION["usuarios"];} 
?>
<hr>

<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		
		<title>Página de prueba</title>
								
								<h2 align="center">Tabla con los buques más imponentes del mundo</h2>
</head>
<body>

<strong><br><a href="../index.php" >Volver</a></strong>

<?php

include('../conexiones/conexion-vehiculos.php');

//Consultas
$sql='SELECT * FROM navios';
$resultado= mysqli_query($conexion, $sql) or die ('no hay resultados'. mysqli_error());

//Ímprimir los resultados.
      $tabla = "<table>";
    while ($linea = mysqli_fetch_array($resultado, MYSQLI_NUM)) {
         $tabla .= "<tr>";
        foreach ($linea as $valor) {
            $tabla .= "<td>$valor</td>";
        }
        $tabla .= "</tr>";
    }
    $tabla .= "</table>";
  
  echo $tabla;
  ?>


<hr></br>

<br/>
<form action="../buscadores/buscadornavios.php" name="buscador" method="post" align= "center">
<input type="text" name="buscador" placeholder="Busqueda de navios...">

<input type="submit" value="Go">
</form>
<br/>

<br> </br>
<strong><h2>Subir un barco</h2></strong>

<td>
<input type="hidden" name="id" maxlength="2000" size="16" > 
</td>
</tr>

<form name="envio"	method="post" action="../funciones/ingresarnavio.php">
<table>
<tr>
<td>
<label for="primer_nombre"> Nombre: </label>
</td>

<td>
<input type="text" name="Nombre" maxlength="50" size="16" > 
</td>
</tr>

<tr>
<td>
<label for="Tipo"> Tipo: </label>
</td>
<td>
<input type="text" name="Tipo" maxlength="50" size="16">
</td>
</tr>

<tr>
<td>
<label for="Tipo"> Antiguedad: </label>
</td>
<td>
<input type="text" name="Antiguedad" maxlength="50" size="16">
</td>
</tr>

<tr>
<td>
<label for="Tipo"> Nacionalidad: </label>
</td>
<td>
<input type="text" name="Nacionalidad" maxlength="50" size="16">
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

