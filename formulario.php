<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="registro.css">
  <title>Formulario Registro</title>
</head>
<body>
  <form action="con_db.php" method="POST" class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="text" name="telefono" placeholder="Ingrese su Telefono">
    <input class="controls" type="email" name="correo" placeholder="Ingrese su Correo">
    <textarea class="controls" name="comentarios" cols="30" rows="4" placeholder="Ingresa algun comentario"></textarea>
    <p>Asegurate de rellenar todos los campos</p>
    <button class="botons" name="enviar">Registrar</button>
  </form>

  <?php 
  include(con_db.php); 
  ?>

</body>
</html>