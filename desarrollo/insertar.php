<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body>
 
  <?php

  // Capturar los datos de entrada del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
//print_r($_POST);exit;

// Validar si el dominio del correo electrónico es válido
$dominios_permitidos = array("hotmail.com", "gmail.com", "unicesmag.edu.co","hotmail.es","outlook.com");// dominios permitidos 
$dominio_valido = false;
$dominio = explode('@', $correo)[1];
/*if (checkdnsrr($dominio, 'MX')) {
  $dominio_valido = true;
  la funcion chekdns valida los dominios del servidor, utilizar cuando sea el servidor en lineal
}*/
foreach ($dominios_permitidos as $dominio_perm) {
  if (strcasecmp($dominio_perm, $dominio) === 0) {
    $dominio_valido = true;
    break;
  }
}
// Si el dominio es válido, agregar los datos del usuario a la base de datos
if ($dominio_valido) {
  // Abrir conexión a la base de datos
  include("conexion.php");
  $bd = conectar();
  if (!$bd) return;

  // Preparar y ejecutar la consulta SQL para insertar los datos del usuario
  $sql = "INSERT INTO usuarios values('.','$nombre','$correo','$clave')";
  $res = mysqli_query($bd, $sql);
  if ($res) {
    echo '<div class="alert alert-info">
            <strong>Info!</strong> Registro Adicionado 
          </div>';
          echo '<a href="index.php" class="btn btn-primary">Iniciar Sesion </a>';
  } else {
    echo "<h3>Error: </h3>";
    echo "<p>Registro no adicionado: "   . mysqli_error($bd) . "</p>";
  }

  // Cerrar conexión a la base de datos
  mysqli_close($bd);
} else {
  // Si el dominio no es válido, mostrar un mensaje de error al usuario
  echo '<div class="alert alert-danger">
          <strong>Error!</strong> El dominio del correo electrónico no es válido.          
        </div>';
        echo '<a href="index.php#signup" class="btn btn-primary">Vover al registro</a>';
}

  ?>
        

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
