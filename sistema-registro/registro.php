

<!DOCTYPE html>
<html>
<head>
		<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
							<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<title>Estado de registro</title>
</head>
<body>
<h1 align="center">Estado de registro</h1>

<strong><br><a href="../index.php" >Volver</a></strong><br><br>

<?php

$conexion= mysql_connect("localhost","root","") or die("Error en la conexion".mysql_error());
mysql_select_db('vehiculos') or die("error".mysql_error());



$todook="Los datos fueron ingresados correctamente y quedo registrado en nuestra DB."; 

								$respuesta=$_POST['nombre'];
									$respuestanombrelimitada=preg_replace("#[^a-zA-Z]#i","", $respuesta);
										$respuestanombrelimitadamatch= preg_match("/^[a-zA-Z]+$/", $respuesta);

								$respuestausuarios=$_POST['usuario'];
									$respuestausuarioslimitada= preg_replace("#[^0-9a-zA-Z]#i","", $respuestausuarios);
										$respuestausuarioslimitadamatch= preg_match("/^[0-9a-zA-Z]+$/", $respuestausuarios);

								$respuestapassword=$_POST['password'];
									$respuestapasswordcorta= substr($respuestapassword,0,12);

								$respuestaemail=$_POST['email'];
									$respuestaemaillimitada=filter_var($respuestaemail, FILTER_VALIDATE_EMAIL);
 
 								$chekusuario= mysql_query("SELECT * FROM usuarios WHERE usuarios= '$respuestausuarioslimitada'");
 									$chekusuariorows= mysql_num_rows($chekusuario);

 								$chekemail= mysql_query("SELECT * FROM usuarios WHERE email= '$respuestaemail'");
 									$chekemailrows= mysql_num_rows($chekemail);
								
if($respuestanombrelimitadamatch and $respuestausuarioslimitadamatch and $respuestaemaillimitada and $chekusuariorows==0 and $chekemailrows==0){
										
if($respuestanombrelimitada == "NULL" or $respuestausuarios == "NULL" or $respuestapasswordcorta == "NULL" or $respuestaemail == "NULL"){ 
echo "Debes completar todos los campos"."<br>"; echo "<script>  alert('Alguno de los campos que ingresaste quedaron sin completar.') </script>"; } else { echo "• Los datos fueron enviados correctamente y el registro se realizó con éxito"."<br>"; 

$consulta=mysql_query("INSERT INTO usuarios(id, Nombre, usuarios, password, email) VALUES(NULL, '$respuestanombrelimitada', '$respuestausuarioslimitada', '$respuestapasswordcorta' , '$respuestaemail');") or die("no se pudo realizar la operacion...".mysql_error())."<br>";  }//La $consulta aca limita a que si no ponen nada en alguno de los input, no se envia nada

if($respuestaemaillimitada== true) {echo "Tu email es valido"."<br>";} else {echo "El email ingresado no aparenta ser es valido"."<br>"; echo "<script> alert('El mail ingresado no parece ser válido')</script>";} } else {echo "Controla los datos ingresados, no se realizó el registro.". "<br>". "Es posible que hayas ingresado caracteres inválidos o el mail y tu usuario elegido ya esté en uso." . "<br>";

	


	if(strlen($respuestapassword)<6)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass debe tener al menos 6 caracteres..."; 
										return false; 
									}
						
	if(strlen($respuestapassword)==6)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}

	if(strlen($respuestapassword)==7)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}

	if(strlen($respuestapassword)==8)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}

	if(strlen($respuestapassword)==9)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}

	if(strlen($respuestapassword)==10)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}

	if(strlen($respuestapassword)==11)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}

	if(strlen($respuestapassword)==12)	{echo "Usted ingreso estos caracteres '" .$respuestapassword. "' la pass esta bien..."; 
										return false;}
	if(strlen($respuestapassword)>12)	{echo "Usted ingreso los siguientes caracteres '" .$respuestapassword. "' la pass debe tener como maximo 12 caracteres, solo se ingresaron los primeros doce  que son: "; echo $respuestapasswordcorta; return false;}

}

//hasta acá va bien.							
												

							
?>





</body>
</html>




	



