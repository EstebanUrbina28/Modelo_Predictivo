
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
              <a href="index1.php" class="site_title"></i> <span>Dashboard WEB</span></a>
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
                  <h3>Informacion Modelo de clasificacion  </h3>                

                  
                  <form id="calculo">
                  <div class="clearfix"></div>
                  </div>
                  <div class="row ">
             
                
              <div class="col">
                         
              <?php


  require __DIR__ . '/vendor/autoload.php';

  use Phpml\Classification\DecisionTree;
  use Phpml\Dataset\ArrayDataset;
  use Phpml\CrossValidation\RandomSplit;
  use Phpml\Metric\Accuracy;




// Definir los datos de entrenamiento
include("conexion.php");
$bd  = conectar(); 
$SQL= "SELECT nota1,nota2,nota3,nota4,nota5,nota6,saber11,ano_lec,jornada,desercion from not_mat";
//var_dump($SQL);exit;
$consulta= mysqli_query($bd,$SQL);
$datos_entrenamiento = [];
$etiquetas_entrenamiento = [];
while($fila = mysqli_fetch_assoc($consulta)){
    $datos_entrenamiento[] = [
        $fila['nota1'],
        $fila['nota2'],
        $fila['nota3'],
        $fila['nota4'],
        $fila['nota5'],
        $fila['nota6'],
        $fila['saber11'],
        $fila['ano_lec'],
        $fila['jornada'],
      
    ];
    $etiquetas_entrenamiento[] = $fila['desercion'];
    
}
$dataset = new ArrayDataset($datos_entrenamiento, $etiquetas_entrenamiento);

// Crear el modelo de árbol de decisión con hiperparametros de 6 variables 
$tree = new DecisionTree(5);


//print_r($tree);exit;
//se utiliza para entrenar el modelo de árbol de decisión con los datos de entrenamiento que se encuentran en el objeto
$tree->train($dataset->getSamples(), $dataset->getTargets());




// Obtener las notas y puntaje de la Prueba Saber 11 del estudiante a predecir
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];
  $n4 = $_POST['n4'];
  $n5 = $_POST['n5'];
  $n6 = $_POST['n6'];
  $n7 = $_POST['n7'];
  $ano = $_POST['lstaño'];
  $jornada = $_POST['lstjd'];

    /* Dividir los datos en entrenamiento en 70% para entrenamiento y prueba
    y 30% para prueba*/
    $split = new RandomSplit($dataset, 0.7,1234);
    $trainingSamples = $split->getTrainSamples();
    $trainingLabels = $split->getTrainLabels();
    $testingSamples = $split->getTestSamples();
    $testingLabels = $split->getTestLabels();
    // Obtener los índices de los datos de prueba
    //$testIndices = $split->getTestIndices();    

/*Calcular la precisión del modelo
 dividen aleatoriamente en un 80% para entrenamiento
 y un 20% para prueba utilizando la clase RandomSplit.
 Luego se entrena el modelo y se hace la predicción en los 
 datos de prueba. Se calcula la precisión del modelo utilizando
 la métrica de Accuracy*/
    // Hacer la predicción
    $predictedLabels = $tree->predict($testingSamples);
    $accuracy = Accuracy::score($testingLabels, $predictedLabels);
 
 // Inicializar la matriz de confusión
 $confusionMatrix="";
 $confusionMatrix = array(
    'SI' => array('SI' => 0, 'NO' => 0),
    'NO' => array('SI' => 0, 'NO' => 0)
);
// Recorre los datos de prueba y comparar con las predicciones del modelo
foreach ($testingLabels as $i => $label) {
    $predictedLabel = $predictedLabels[$i];
    $confusionMatrix[$predictedLabel][$label]++;

    //Recorrer los datos de prueba y comparar las etiquetas verdaderas con las predicciones del modelo. 
    //Para cada ejemplo, incrementar el valor correspondiente en la matriz de confusión en función de 
    //si la predicción es verdadera o falsa:    
}
  // Hacer la predicción
  $prediction = $tree->predict([[$n1,$n2,$n3,$n4, $n5, $n6, $n7, $ano,$jornada]]);
    /*$tp = $confusionMatrix['SI']['SI'];
    $fn = $confusionMatrix['SI']['NO'];
    $fp = $confusionMatrix['NO']['SI'];
    $tn = $confusionMatrix['NO']['NO'];

  $precision = $tp / ($tp + $fp);
  $recall = $tp / ($tp + $fn);
  $error_rate = ($fp + $fn) / ($tp + $tn + $fp + $fn);
  Precisión: mide la proporción de las predicciones positivas que son verdaderas positivas : ' .$precision . ' <br>
                    Recall: mide la proporción de verdaderos positivos que el modelo identificó correctamente. : ' . $recall. '  <br>
                    Tasa de error: mide la proporción de predicciones incorrectas del modelo.
                     : ' . $error_rate . '  <br>*/
   
                
  //var_dump($promedio_matematicas);exit;


            //INGRESA LOS NUEVOS DATOS A LA BASE DE DATOS 

            //prepara y ejecuta consulta en BD 
            $sql = "insert into not_mat values('.',$n1,$n2,$n3,$n4,$n5,$n6,$n7,'$ano','$jornada','$prediction[0]')";
            $res = mysqli_query($bd,$sql);
            if ($res){
                 echo ' <div class="alert alert-info">
                <strong>Info!</strong> Registro Adicionado 
              </div>';
             
               echo '<a href="mat_tree.php" class="btn btn-primary">Vover al Modulo</a>';
                
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
                    <table>
                    <h6> MATRIZ DE CONFUSION </h6>
                    <tr><td></td><td>PREDICCION POSITIVA</td><td>PREDICCION NEGATIVA</td></tr>
                    <tr><td>ACTUAL POSITIVO </td><td> '. $confusionMatrix['SI']['SI'] .' </td><td> '. $confusionMatrix['SI']['NO'] .' </td></tr>
                    <tr><td>ACTUAL NEGATIVO </td><td>' . $confusionMatrix['NO']['SI'] .' </td><td> '. $confusionMatrix['NO']['NO'] .'</td></tr>
                    </table>
                    <br>
                    Precision del modelo:'. $accuracy.'<br>                   
                    Predicion : ' . $prediction[0] . ' DESERTA <br>
                    
                    
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
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="js/moment/calculo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

	
  </body>
</html>
