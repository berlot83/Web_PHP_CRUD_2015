<?php

session_start();

if(isset($_SESSION["usuarios"])) {echo "Logueado como:  ". $_SESSION["usuarios"]; } 
?>

<!DOCTYPE html>
<html>
<head>
		<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		
		<title>Página de prueba</title>
								
								<h2 align="center">Aviones de combate</h2>
</head>
<body>

<strong><br><a href="../index.php" >Volver</a></strong>

<?php include('../conexiones/conexion-vehiculos.php');?>

<?php

// Conectar a la DB.
$conexion= mysqli_connect('localhost', 'root', '', 'vehiculos') or die('Imposible conectar'. mysql_error() );

//Consultas

$consultas= 'SELECT * FROM aviones';
$resultado= mysqli_query($conexion, $consultas) or die ('Consulta denegada' .mysql_error());

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


<hr>

<Strong><p align="center">Ingrese el modelo de avion que desea buscar:</p></Strong>
</form>
</table>
<form action="../buscadores/buscadoraviones.php" name="buscador" method="post" align= "center">
<input type="text" name="buscador" placeholder="Busqueda de aviones...">

<input type="submit" value="Go">
</form>
<br/>

<hr>

<strong><h3 align="center">Presione para ver el dia de su próximo vuelo:</h3></strong><br>
<form action="aviones.php" name="horarioaviones" method="post" align="center">
<input type="submit" name="boton">
</form>

<?php




if(isset($_POST['boton'])) {$horario=$_POST['boton'];
								$horario== 1; echo "<script> 	var mifecha = new Date();
																var diames = mifecha.getDate();
																mifecha.setDate(diames + 1);
																
																alert('su proximo vuelo será.....' + mifecha); 

																confirm('¿estás listo para arrancar las turbinas? o necesitas ayuda?');</script>";
															}

?>

<br> </br>
<strong><h2>Subir un avión</h2></strong>

<td>
<input type="hidden" name="id" maxlength="2000" size="16" > 
</td>
</tr>

<form name="envio"	method="post" action="../funciones/ingresaravion.php">
<table>
<tr>
<td>
<label for="modelo"> Modelo: </label>
</td>

<td>
<input type="text" name="modelo" maxlength="50" size="16" > 
</td>

<td>
• Letras, números y símbolos admitidos.
</td>
</tr>

<tr>
<td>
<label for="tiempo_de_utilidad"> Tiempo de utilidad: </label>
</td>
<td>
<input type="number" name="tiempo_de_utilidad" maxlength="50" size="16">
</td>

<td>
• Cantidad de años, expresado en números.
</td>
</tr>

<tr>
<td>
<label for="alias"> Alias: </label>
</td>
<td>
<input type="text" name="alias" maxlength="50" size="16">
</td>
<td>
• Letras, números y símbolos admitidos.
</td>
</tr>

<tr>
<td>
<label for="nacionalidad"> Nacionalidad: </label>
</td>
<td>
<input type="text" name="nacionalidad" maxlength="50" size="16">
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