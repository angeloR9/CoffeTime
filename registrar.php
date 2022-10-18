<?php 

	$conexion = mysqli_connect("localhost","id18976886_angelo","V&\=bIlEOpmfhMC2","id18976886_registro") or die (mysql_error($mysqli));

	insertar($conexion);

	function insertar($conexion){
		$nombre = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
	    $correo = $_POST['correo'];
        $comentarios = $_POST['comentarios'];

		$consulta = "INSERT INTO usuarios(Nombres, Apellidos, Telefono, Correo, Comentarios) VALUES ('$nombre','$apellidos','$telefono','$correo','$comentarios')";
		mysqli_query($conexion,$consulta);
		mysqli_close($conexion);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro...</title>
</head>
<style>
	.ultimo + div{
		visibility: hidden;
	}
</style>
<body>

<h1><i>¡Registro Completado!</i></h1>
	<a href="index.php">Regresar al inicio</a>


	<div class="ultimo"></div>
</body>
</html>
