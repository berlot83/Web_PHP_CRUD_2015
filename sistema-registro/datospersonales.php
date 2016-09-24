

<!DOCTYPE html>
<html>
<head>
	<HTML>

	<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<title>Modificar los datos de cuenta</title>
</head>
<body>

<?php
session_start();

if(isset($_SESSION["usuarios"])) {echo "Bienvenido  ". $_SESSION["usuarios"]; echo "<strong><br><a href='../sistema-registro/logout.php' >Salir</a></strong>"."<br>" ;}


include('../conexiones/conexion-vehiculos.php');



$usuario= $_SESSION['usuarios'];

if(isset($_SESSION['usuarios'])) {
								  	$consulta= "SELECT * FROM usuarios WHERE usuarios='$usuario'";
								  	$resultado=  mysqli_query($conexion, $consulta) or die ("No se pudo conectar a la DB.". mysqli_error());
								   

								    $tabla="<table>";
								    
								    while($linea= mysqli_fetch_array($resultado, MYSQLI_NUM)) {

								    $tabla.= "<tr>";
								     	foreach ($linea as $valor) 	
								    						{$tabla.="<td>$valor<td>";}
								   
								    $tabla.= "</tr>";	# code...
								    }
								    $tabla.= "</table>";

								  } 
								  else
								  {
								  	echo "para poder ver sus datos primero debe estar logueado.";
								  }

								  echo $tabla . "<br><br>";
?>
• Para modificar sus datos tiene que ingresar todos los datos nuevamente.
• Tenga en cuenta que apenas cambie sus datos se desconectará automáticamente.<br>
• Recuerde los nuevos datos que haya ingresado ya que los deberá ingresar nuevamente para iniciar sesión.<br>
• Siga el siguiente link para ir al inicio e iniciar sesión con los nuevos datos. 
<br> </br>
<strong><h2>Modificar datos personales:</h2></strong>

<td>
<input type="hidden" name="id" maxlength="2000" size="16" > 
</td>
</tr>

<form name="modificar-datos"	method="post" action="../sistema-registro/modificardatos.php">
<table>
<tr>
<td>
<label for="nombre"> Nombre nuevo: </label>
</td>

<td>
<input type="text" name="nombre" maxlength="50" size="16" > 
</td>

<td>
• Sólo letras.
</td>
</tr>

<tr>
<td>
<label for="usuario"> Usuario nuevo: </label>
</td>
<td>
<input type="text" name="usuario" maxlength="50" size="16">
</td>

<td>
• Letras y/o números.
</td>
</tr>

<tr>
<td>
<label for="password">Password nueva: </label>
</td>
<td>
<input type="password" name="password" maxlength="12" size="16">
</td>
<td>
• Letras, números y símbolos admitidos.
</td>
</tr>

<tr>
<td>
<label for="email"> Email nuevo: </label>
</td>
<td>
<input type="text" name="email" maxlength="50" size="16">
</td>
<td>

</td>
</tr>


<tr>
<td>
<input type="submit"  value="cambiar" name="cambiar">
</td>
</tr>
</table>
</form>

<form enctype="multipart/form-data" action="../funciones/subirarchivos.php" method="POST"> 
<input type="hidden" name="MAX_FILE_SIZE" value="2500000" /> 
Elige el Archivo a Subir:
<input name="archivo-a-subir" type="file" /><br />
<input type="submit" value="Subir Archivo" />
</form>

</body>
</html>

