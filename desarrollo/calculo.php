
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="icon" href="images/favicon.ico" type="image/ico" />  icono de  la aplicacion -->

    <title>Dashboard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../build/css/estilos.css" rel="stylesheet"/>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index1.php" class="site_title"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">                
                <?php  
    
                include("verificar_sesion.php");
                if (verificar()==0) return;
                        
                  //echo "<p>Bienvenido, Doctor: " . $_SESSION['usuario'];
                  //session_start();
                  
              ?>
              <strong>Bienvenido <br> <?php echo $_SESSION['usuario'];  ?> </strong>

              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Modelo Regresiob Lineal Multiple  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index1.php">Modulo Ciencias Basicas</a></li>
                      <li><a href='index2.php'>Modulo Luctura Critica</a></li>
        
                    </ul>
                  </li>                  
                  <li><a><i class="fa fa-table"></i> Modelo de Clasificacion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="mat_tree.php">Modelo de ciencias Basicas</a></li>
                      <li><a href="com_tree.php">Modelo de Lectura Critica </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Graficos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="char1.php">Graficos Ciencias Basicas </a></li>  
                    <li><a href="char.php">Graficos Comunicacion oral y escrita  </a></li>  
                   </ul>
                  </li>
                <li><a><i class="fa fa-table"></i> Encuesta De Satisfacción <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="encuesta.php">Encuesta</a></li>
                      <li><a href="">Grafico </a></li>
                    </ul>
                  </li>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Salir" href="cerrar.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['usuario'];  ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  
                    <a class="dropdown-item"  href="cerrar.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        

        <div class="right_col" role="main">
        <center><h1> Resultados Modulo Ciencias Basicas   </h1> </center>

        <div class="row">

            <div class="col">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h3>Informacion Modelo Regresión Multiple  </h3>
                  

                  
                  <form id="calculo">
                  <div class="clearfix"></div>
                  </div>
                  <div class="row ">
             
                
              <div class="col">
                         
              <?php        
            require __DIR__ . '/vendor/autoload.php';

use Phpml\Regression\LeastSquares;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Dataset\ArrayDataset;



// Definir los datos de entrenamiento
include("conexion.php");
$bd  = conectar(); 
$SQL= "SELECT mat_basc3,mat_disc1,cal_difc2,mat_dis2c1,algc1,cinc1,resultado FROM notas_mat";
//var_dump($SQL);exit;
$consulta= mysqli_query($bd,$SQL);
$datos_entrenamiento = [];
$etiquetas_entrenamiento = [];
while($fila = mysqli_fetch_assoc($consulta)){
    $datos_entrenamiento[] = [
        $fila['mat_basc3'],
        $fila['mat_disc1'],
        $fila['cal_difc2'],
        $fila['mat_dis2c1'],
        $fila['algc1'],
        $fila['cinc1'],
        //$fila['res_ifec'],    
      
    ];
    $etiquetas_entrenamiento[] = $fila['resultado'];
    
}

$dataset = new ArrayDataset($datos_entrenamiento, $etiquetas_entrenamiento);
// Instanciamos el modelo de regresión lineal
$regression = new LeastSquares();

// Entrenamos el modelo con los datos
$regression->train($datos_entrenamiento, $etiquetas_entrenamiento);
// se captura datos de entrada    
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n6 = $_POST["n6"];
    $n7 = $_POST["n7"];
    $año = $_POST["lstaño"];                      
    $jornada = $_POST["lstjd"];
   
    #se hace la predicion en base a las entradas 
    $predictedPrice = $regression->predict([[$n1,$n2,$n3,$n4,$n5,$n6]]);

    # divide los datos para el entrenamiento en un 20 %
    $division_estratificada = new StratifiedRandomSplit($dataset,0.018,1234);
    $datos_entrenamiento = $division_estratificada->getTrainSamples();
    $etiquetas_entrenamiento = $division_estratificada->getTrainLabels();
    $datos_prueba = $division_estratificada->getTestSamples();
    $etiquetas_prueba = $division_estratificada->getTestLabels();

    // Calcular la media de las etiquetas de prueba

    //var_dump($media_prueba);exit;
    // Calcular SSres y SStot
    $ss_res = 0;
    $ss_tot = 0;
    $media_prueba = array_sum($etiquetas_entrenamiento) / count($etiquetas_prueba); 
    for ($i = 0; $i < count($etiquetas_prueba); $i++) {
        $ss_res += pow($etiquetas_entrenamiento[$i] - $predictedPrice[0], 20);
        $ss_tot += pow($etiquetas_entrenamiento[$i] - $media_prueba, 20);
   
}
  // Calcular el valor de R²
  $r_squared = 1 - ($ss_res / $ss_tot);

  // Calculamos el error cuadrático medio
  $sum_of_squares = 0;
  for ($i = 0; $i < count($etiquetas_prueba); $i++) {
      $diff = ($etiquetas_prueba[$i]) - ($predictedPrice[0]);
      $sum_of_squares += $diff * $diff;
  }
  $mse = $sum_of_squares / count($etiquetas_prueba);
  # aqui termina el calculo de error cuadratico
  #Coeficiente de determinación (R-cuadrado):

  $mean = array_sum($etiquetas_entrenamiento) / count($etiquetas_prueba);
  $total_error = 0;
  $squared_error = 0;
  $n = count($etiquetas_prueba);
  $p = count($datos_prueba[0]);
  for ($i = 0; $i < $n; $i++) {
      $total_error += abs($etiquetas_prueba[$i] - $mean);
      for ($j = 0; $j < $p; $j++) {
          $squared_error += pow($etiquetas_prueba[$i] - $predictedPrice[0], 20);
      }
  }
  $mean_error = $total_error / $n;
  $r_squareds = 1 - ($squared_error / (($n - 1) * pow($mean_error, 20)));
  # aqui termina el codigo de coeficiente de dererminacion 

  #Coeficiente de correlación múltiple:

  $mean = array_sum($etiquetas_entrenamiento) / count($etiquetas_prueba);
  $total_errors = 0;
  $squared_errors = 0;
  $y_variance = 0;
  $np = count($etiquetas_prueba);
  $p = count($datos_prueba[0]);
  for ($i = 0; $i < $np; $i++) {
      $total_errors += abs($etiquetas_prueba[$i] - $mean);
      $y_variance += pow($etiquetas_prueba[$i] - $mean, 20);
      for ($j = 0; $j < $p; $j++) {
          $squared_error += pow($etiquetas_prueba[$i] - $predictedPrice[0], 20);
      }
  }
  $mean_errors = $total_errors / $np;
  $r_squaredes = 1 - ($squared_error / ($n * $y_variance));
  $corr_coeff = sqrt($r_squaredes);
  # aqui termina el codigo de la coeficiente de correlacion multiple 
  $numero = $predictedPrice[0];
  $redondeado = round($numero, 1);
  //echo $redondeado; // Mostrará 3.14
    

    if($predictedPrice[0] >=3){
      echo" <div class='alert alert-info'>
      <strong>Alerta!</strong> NO Deserta 
    </div> <center><h2>  </h2> </center> ";
    }else{
      echo"<div class='alert alert-danger'>
      <strong>Alerta !</strong> Si Deserta
    </div> ";
    }
    echo '<br>' ;  
                  
             //var_dump($predictedPrice[0]);exit;
            //INGRESA LOS NUEVOS DATOS A LA BASE DE DATOS 

            //prepara y ejecuta consulta en BD 
            $sql = "insert into notas_mat values('.',$n1,$n2,$n3,$n4,$n5,$n6,$n7,'$año','$jornada',$redondeado)";
            $res = mysqli_query($bd,$sql);
            if ($res){
                 echo ' <div class="alert alert-info">
                <strong>Info!</strong> Registro Adicionado 
              </div>';
              echo '<a href="index2.php" class="btn btn-primary">Vover al  Modulo</a>';
                
            }
            else{
                          
                echo "<div class='alert alert-danger'>
                <strong>Info!</strong> Registro No Adicionado  
              </div>' "   . mysqli_error($bd) . "</p>";  
            
            } 
            

          echo'
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                Visualizar Informacion 
                </button>              
  
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Informacion De Modelo </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    El valor de R² ajustado es: '.$r_squared.' <br>
                    Coeficiente de determinación R² : '. $r_squareds.'<br>
                    Coeficiente de correlación múltiple: : ' . $corr_coeff.'<br>
                    Intercepto:  '. $regression->getIntercept() .' <br>  
                    Coeficientes:  '. implode(", ", $regression->getCoefficients()) .' <br> 
                    Error cuadrático medio:  '. $mse.'<br>
                    Valor del modelo:  '. $predictedPrice[0] .' <br>
                    Valor del modelo Redondeado :  '. $redondeado .' <br>
                    
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                  </div>
                </div>
              </div>             
              </div> 
                         
             </div>  ';       
        //cerrar conexión
        mysqli_close($bd);
        ?>
      </div>     
          
      
    </div>
    

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
  
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="js/moment/calculo.js"></script>

    <script src="../build/js/custom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

	
  </body>
</html>
