
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard Web</title>

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


  
  $calificacion = $_POST['calificacion'];
  $calificacion_2 = $_POST['calificacion_1'];
  $calificacion_3 = $_POST['calificacion_3'];
  $calificacion_4 = $_POST['calificacion4'];
  $calificacion_5 = $_POST['calificacion5'];  
  $calificacion_6 = $_POST['calificacion6']; 
  //var_dump($_POST);exit; 
 
  // Abrir conexión a la base de datos
  include("conexion.php");
  $bd = conectar();
  if (!$bd) return;

  // Preparar y ejecutar la consulta SQL para insertar los datos del usuario
  $sql = "INSERT INTO encuesta values('.',$calificacion,$calificacion_2,$calificacion_3,$calificacion_4,$calificacion_5,$calificacion_6)";
  $res = mysqli_query($bd, $sql);
  if ($res) {
    echo '<div class="alert alert-info">
            <strong>Informacion</strong> Gracias Por realizar la encuesta 
          </div>';
          echo '<a href="cerrar.php" class="btn btn-primary">Salir </a>';
          echo '<a href="index1.php" class="btn btn-primary">Volver </a>';
  } else {
    echo "<h3>Error: </h3>";
    echo "<p>Encuesta no se registro: "   . mysqli_error($bd) . "</p>";
  }

  // Cerrar conexión a la base de datos
  mysqli_close($bd);

  ?>
        

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>



