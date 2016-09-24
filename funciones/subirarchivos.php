
<!DOCTYPE html>
<html>
<head>
		<LINK REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	
	<title>Subiendo el avatar</title>
</head>
<body>

<?php

// hasta ahora no pude implementar el recorte de la imagen y el posteo cuando está logueado.
$dir_subida = '../avatares/';
$fichero_subido = $dir_subida . basename($_FILES['archivo-a-subir']['name']);


if (move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}


?>
</body>
</html>

