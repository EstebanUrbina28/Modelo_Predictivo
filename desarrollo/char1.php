
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	

    <title> Dashboard Web </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">	
    <link href="../build/css/estilos.css" rel="stylesheet"/>
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index1.php" class="site_title"></i> <span>Dashboard Web </span></a>
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
            <!-- sidebar menu -->

            <!-- menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Salir" href="cerrar.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
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
        <!-- top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Reportes de Graficos  </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <!--<div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar </button>-->
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">                    
                    <h2>Grafico lineal</h2>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script src="https://www.gstatic.com/charts/loader.js"> </script>
                        <script type="text/javascript">
                          google.charts.load('current',{'packages':['corechart']});
                          google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {     
                          var data = google.visualization.arrayToDataTable([
                            ['', ''],
                            <?php
                            include("conexion.php");
                              $bd  = conectar(); 
                              $SQL= "SELECT año_lec, COUNT(resultado) from notas_mat WHERE resultado >=3 GROUP by año_lec";
                                
                                //print_r($SQL);exit;
                                $consulta= mysqli_query($bd,$SQL);
                                while($resultado = mysqli_fetch_assoc($consulta)){

                                    echo "['".$resultado['año_lec']."', ".$resultado['COUNT(resultado)'].",],";
                                }
                              
                            ?>
                            
                          ]);
                          // Set Options
                          var options = {
                            title: 'Grafico Estudiantes Aprobados por años ',
                            hAxis: {title: ''},
                            vAxis: {title: 'Grafico lineal'},
                            legend: 'none'
                          };
                          // Draw Chart
                          var chart = new google.visualization.LineChart(document.getElementById('myChart'));
                          chart.draw(data, options);
                          }
                          </script>                                
                      
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">                          
                        </div>               
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="myChart" style=" height: 300px;"></div>       
                  </div>

                 
                </div>
              </div>

              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafico Dispercion  <small></small></h2>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                            ['Age', 'Weight'],
                            <?php
                          
                          $SQL= "SELECT año_lec, resultado from notas_mat order by año_lec";
            
                          //print_r($SQL);exit;
                          $consulta= mysqli_query($bd,$SQL);
                          while($res = mysqli_fetch_assoc($consulta)){
              
                              echo "['".$res['año_lec']."',".$res['resultado'].",],";
                              }
                         
                          ?>
                          ]);

                          var options = {
                            title: 'Grafico Estudiantes Dispercion por años',
                            hAxis: {title: 'AÑO LECTIVO'},
                            vAxis: {title: 'NOTAS'},
                            legend: 'none'
                          };

                          var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

                          chart.draw(data, options);
                        }
                      </script>
                      <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                          </div>
                      </li>
                     
                      </li>
                    </ul>
                    

                    <div class="modal fade" id="modal-resultado" tabindex="-1" role="dialog" aria-labelledby="modal-resultado-label" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modal-resultado-label">Resultado de la consulta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body" id="resultado"></div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                    $(document).ready(function(){
                      $("#ejecutar-consulta").click(function(){
                        $.ajax({
                          url: "consulta.php",
                          type: "post",
                          
                          success: function(resultado){
                            $("#resultado").html(JSON.stringify(resultado));
                          }
                        });
                      });
                    });
                    </script>

                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                  <div id="chart_div" style=" height: 300px;"></div>
                  </div>
                  <!--<button  type="button" class="btn btn-primary" data-bs-toggle="modal" id="ejecutar-consulta" data-toggle="modal" data-target="#modal-resultado">Ver datos</button>-->
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafico circular<small></small></h2>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                          ['Task', 'Hours per Day'],
                          <?php                          
                          $SQL= "SELECT año_lec,resultado,COUNT(resultado) from notas_mat WHERE resultado >=3 GROUP by año_lec";
                            
                            //print_r($SQL);exit;
                            $consulta= mysqli_query($bd,$SQL);
                            while($res = mysqli_fetch_assoc($consulta)){

                                echo "['".$res['año_lec']."', ".$res['COUNT(resultado)'].",],";
                            }
                            
                        ?>
                        ]);

                        var options = {
                          title: 'Grafico Circular Estudiantes Aprobados'  
                                     
                          
                          
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                      }
                    </script>         
                       <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                          </div>
                      </li>
                  
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="piechart" style=" height: 300px;"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafio Circular <small></small></h2>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load("current", {packages:["corechart"]});
                      google.charts.setOnLoadCallback(drawChart);
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Task', 'Hours per Day'],
                          <?php
                          
                          $SQL1= "SELECT año_lec,resultado,COUNT(resultado) from notas_mat WHERE resultado <3 GROUP by año_lec";
                            
                            //print_r($SQL);exit;
                            $consulta1= mysqli_query($bd,$SQL1);
                            while($res1 = mysqli_fetch_assoc($consulta1)){

                                echo "['".$res1['año_lec']."', ".$res1['COUNT(resultado)'].",],";
                            }                            
                        ?>
                        ]);

                        var options = {
                          title: 'Estudiantes Reporbados',
                          is3D: true,
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                      }
                    </script>
    
 
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                       
                          </div>
                      </li>
                     
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="piechart_3d" style=" height: 300px;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Grafico lineal  <small>Comparativo</small></h2>  
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['año lectivo', 'Aprobados', 'Reprobados'],
              <?php
            
              $SQL= "SELECT año_lec, 
              SUM(CASE WHEN resultado >= 3 THEN 1 ELSE 0 END) AS can_A, 
              SUM(CASE WHEN resultado < 3 THEN 1 ELSE 0 END) AS can_R 
             FROM notas_mat 
             GROUP BY año_lec";
                
                //print_r($SQL);exit;
                $consulta= mysqli_query($bd,$SQL);
                while($res = mysqli_fetch_assoc($consulta)){

                    echo "['".$res['año_lec']."', ".$res['can_A'].",".$res['can_R'].",],";
                }            
            ?>
          
            ]);

            var options = {
              title: 'Grafico Comparacion Aprobados y Reprobados',
              curveType: 'function',
              legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
          }
        </script>   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      
                          </div>
                      </li>
            
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="curve_chart" style="height: 370px"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h6>Grafico en  barras</h6>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          
                          </div>
                      </li>
                    
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  <script type="text/javascript">
                      // Cargar la biblioteca de gráficos y establecer el callback
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);
                  <?php
// Establecer conexión a la base de datos


            // Ejecutar la consulta SQL
            $sql = "SELECT ano_lec, jornada, SUM(CASE WHEN desercion = 'SI' THEN 1 ELSE 0 END) AS SI, SUM(CASE WHEN desercion = 'NO' THEN 1 ELSE 0 END) AS NO FROM not_mat GROUP BY ano_lec, jornada";
            $result = $bd->query($sql);

            // Guardar los resultados en un arreglo
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            ?>
        function drawChart() {
            // Crear el arreglo de datos
            var data = google.visualization.arrayToDataTable([
                ['Año y Jornada', ' SI', 'NO'],
                <?php foreach ($data as $row): ?>
                    ['<?php echo $row['ano_lec'] . ' ' . $row['jornada']; ?>', <?php echo $row['SI']; ?>, <?php echo $row['NO']; ?>],
                <?php endforeach; ?>
            ]);

            // Establecer las opciones del gráfico combinado
            var options = {
                title: 'Deserciones por año y jornada',
                width: 500,
                hAxis: {title: 'Año y Jornada'},
                vAxes: {
                    0: {title: 'Deserciones SI'},
                    1: {title: 'Deserciones NO'}
                },
                seriesType: 'bars',
                series: {
                    0: {targetAxisIndex: 0},
                    1: {targetAxisIndex: 1}
                }
            };

            // Crear el gráfico combinado
            var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }
    </script>
                  <div class="x_content">
                  <div id="chart_div1" style="height: 370px; "></div>

                  </div>                  
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h6>Grafico  en barras </h6>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 
                          </div>
                      </li>
                  
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  <script type="text/javascript">
                      // Cargar la biblioteca de gráficos y establecer el callback
                      google.charts.load('current', {'packages':['bar']});
                       google.charts.setOnLoadCallback(drawStuff);

                      function drawStuff() {
                        var data = new google.visualization.arrayToDataTable([
                          ['Materia', 'Total Perdidos'],
                          <?php
                           
                            $SQL = "SELECT 
                            'MB' AS Materia, SUM(CASE WHEN mat_basc3 < 3 THEN 1 ELSE 0 END) AS Perdidas FROM notas_mat
                            UNION
                            SELECT 'MD', SUM(CASE WHEN mat_disc1 < 3 THEN 1 ELSE 0 END) FROM notas_mat
                            UNION
                            SELECT 'CD', SUM(CASE WHEN cal_difc2 < 3 THEN 1 ELSE 0 END) FROM notas_mat
                            UNION
                            SELECT 'MD2', SUM(CASE WHEN mat_dis2c1 < 3 THEN 1 ELSE 0 END) FROM notas_mat
                            UNION
                            SELECT 'AL', SUM(CASE WHEN algc1 < 3 THEN 1 ELSE 0 END) FROM notas_mat
                            UNION
                            SELECT 'CI', SUM(CASE WHEN cinc1 < 3 THEN 1 ELSE 0 END) FROM notas_mat";
                            $consulta = mysqli_query($bd, $SQL);
                            while($res = mysqli_fetch_assoc($consulta)){
                              echo "['".$res['Materia']."',".$res['Perdidas']."],";
                            }
                          ?>
                            ]);

                            var options = {
                              title: 'Porcentaje de materias perdidas',
                              width: 500,
                              legend: { position: 'none' },
                              chart: { title: 'Porcentaje de materias perdidas',
                                      subtitle: 'en función de la materia' },
                              bars: 'vertical', // Required for Material Bar Charts.
                              axes: {
                                x: {
                                  0: { side: 'top', label: 'Materias' } // Top x-axis.
                                }
                              },
                              bar: { groupWidth: "10%" }
                            };

                            var chart = new google.charts.Bar(document.getElementById('chart_div28'));
                            chart.draw(data, options);
                          };
                            
                            </script>
                            <div class="x_content">
                            <div id="chart_div28" style="height: 370px; "></div>

                            </div>
            </div>
            
          </div>
          
        </div>
        
        <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                   
                     
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <CEnter> <h1>INFORMACION</h1></CEnter>
                    <p>ESTÁ INGRESANDO AL MÓDULO DE REPORTE DE GRAFICAS EN ESTE MÓDULO ENCONTRARA REPORTES GENERALES DE DESERCIÓN ESTUDIANTIL DURANTE EL PERIODO DE INVESTIGACIÓN                    </p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      
                    </div>

                  </div>
                </div>
              </div>             
              </div> 
              
        <!-- page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
                Realizado por Esteban Urbina - Programa de Ingeneria de sistemas
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- footer content -->
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="js/moment/calculo.js"></script>
    <script type="text/javascript">
    // puede servir 
    </script>
	
  </body>
</html>