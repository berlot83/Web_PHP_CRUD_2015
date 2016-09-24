
<?php

session_start();

if(isset($_SESSION["usuarios"])) {echo "Bienvenido  ". $_SESSION["usuarios"]; echo "<strong><br><a href='../vehiculos/sistema-registro/logout.php' >Salir</a></strong>"."<br>" ;

echo "<a href='../vehiculos/sistema-registro/datospersonales.php' >Mis datos</a>";}


?>


<? include('session.php'); 
echo "Bienvenido a la página demostrativa de Axel A. Berlot, referida principalmente a Bases de datos MySQL, PHP, Javascript, y Java." 

?>

<HTML>
<HEAD>
	<LINK REL=StyleSheet HREF="css/stylesheet.css" TYPE="text/css" MEDIA=screen>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

<hr>

<h1 align="center">"Página de prueba con datos SQL, Javascript y PHP" </h1><br>

</HEAD>

<BODY>
<div id="fotos">
	<div id="izquierda">
		<IMG SRC="../vehiculos/images/rafale.jpeg"></IMG>
			<strong><br><a href="../vehiculos/paginas/aviones.php" >Tabla de aviones de combate.</a></strong>
	</div>

	<div id="centro">
		<IMG SRC="../vehiculos/images/helicoptero.jpeg"></IMG>
			<strong><br><a href="../vehiculos/paginas/helicopteros.php" >Tabla de helicopteros de combate.</a></strong>
	</div>

	<div id="derecha">
		<IMG SRC="../vehiculos/images/ship.jpeg"></IMG>
			<strong><br><a href="../vehiculos/paginas/barchos.php" >Tabla de barcos de combate.</a></strong>
	</div>
</div>	<br><br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br>


<h2>Esta es una página de prueba, con tablas MySql</h2>
<p>Los vehículos de combate fueron evolucionando con los años, desde máquinas impulsadas a pistones hasta jets supersonicos, hoy en día sólo se mantienen activos los aviones a turbo-hélice y los jets, los cuales algunos son modificados para cubrir las necesidades de fuerza aérea.</p>





						<Formulario de contacto basico>
<br> </br>
<strong><p><h2 align="center">Formulario de contacto</h2></p></strong>

<form name="contacto"	align="center" method="post" action="funciones/enviar1.php" >
<table>
<tr>
<td>
<label for="primer_nombre"> Nombre: </label>
</td>

<td>
<input type="text" name="primer_nombre" maxlength="50" size="16" > 
</td>
</tr>

<tr>
<td>
<label for="apellido"> Apellido: </label>
</td>
<td>
<input type="text" name="apellido" maxlength="50" size="16">
</td>
</tr>

<tr>
<td>
<label for="email"> Email: </label>
</td>
<td>
<input type="text" name="email" maxlength="50" size="16">
</td>
</tr>

<tr>
<td>
<label for="telefono"> Teléfono: </label>
</td>
<td>
<input type="text" name="telefono" maxlength="10" size="16">
</td>
</tr>

<tr>
<td>
<label for="comentarios"> Comentarios: </label>
</td>
<td>
<textarea type="texto" name="comentarios" maxlength="1500" size="16" cols="40"> </textarea>
</td>
</tr>

<tr>
<td>
<input type="submit"  value="Enviar">
</td>
</tr>
</table>
</form>


<hr></br>

<?php
if(isset($_SESSION["usuarios"])){} else {echo "<STRONG><h2><p align='center'>Registrase en esta página.</p></h2></STRONG>
<form align='center' action='sistema-registro/registro.php' method='post'>
<table>
<tr>
<td>
<label for='nombre'> Nombre:</label>
</td>


<td>
<input name='nombre' type='text'><br/>
</td>

<td>
• Se admiten sólo letras minúsculas o mayúsculas, 'si ingresa números o símbolos no quedarán registrados'.
</td>
</tr>

<tr>
<td>
<label for='usuario'>Usuario:</label>
</td>

<td>
<input type='text' name='usuario'><br/>
</td>

<td>
• Se admiten letras minusculas, mayúsculas y números 'si ingresa símbolos de cualquier tipo no quedarán registrados'.
</td>
</tr>

<tr>
<td>
<label for='password'>Password:</label>
</td>

<td>
<input type='password' name='password' maxlength='12'><br/>
</td>

<td> • Cualquier caractér es admisible en este campo, mínimo 6 y máximo 12, si ingresa más, 'sólo se registrarán los primeros 12'</td>
</tr>

<tr>
<td>
<label for='email'>E-mail:</label>
</td>

<td>
<input type='text' name='email'><br/>
</td>
</tr>

<tr>
<td>
<input type='submit' name='submit' value='Registrarse'><br/>
</td>
</tr>

</table>
</form>";};
?><br><br>

<hr><br>

<?php
if(isset($_SESSION["usuarios"])){} else {echo

"<STRONG><h2><p align='center'>Loguearse.</p></h2></STRONG>

<form action='sistema-registro/session.php' method='post' name='login'><br/>
<table>

<tr>
<td>
<label for='usuario'>Usuario:</label>
</td>

<td>
<input name='usuario' type='text'><br/>
</td>
</tr>

<tr>
<td>
<label for='password'>Password:</label>
</td>

<td>
<input type='password' name='password'><br/>
</td>
</tr>

<tr>
<td>
<input type='submit' name='submit' value='Login'>
</td>

</tr></table>";	} 
?>


</BODY>

</HTML>
