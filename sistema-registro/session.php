<?php
include ('../conexiones/conexion-vehiculos.php');

if(!empty($_POST)){
	if(isset($_POST["usuario"]) &&isset($_POST["password"])){
		if($_POST["usuario"]!=""&&$_POST["password"]!=""){
			
			$usu= $_POST['usuario'];
			$pass= $_POST['password'];
			$user_id= NULL;
			$usuarioregistrado= NULL;
			$sql1= "SELECT id,usuarios,password FROM usuarios WHERE usuarios = '$usu' AND password='$pass'";
					$resultado= mysqli_query($conexion, $sql1) or die ('Consulta denegada' .mysqli_error());
														
														while ($linea = mysqli_fetch_array($resultado)) {
																						  $user_id=$linea["id"];
																						  $usuarioregistrado=$linea["usuarios"];

																												break;
			}
			if($user_id==NULL){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
				echo "acceso invalido";
			}else{
				session_start();
				$_SESSION["id"]=$user_id;
				$_SESSION["usuarios"]=$usuarioregistrado;
				print "<script>window.location='login_ok.php';</script>";
				print "<script>alert('Has ingresado correctamente...');</script>";	
				echo "hola";
			}
		}
	}
}


?>