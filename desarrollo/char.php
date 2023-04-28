<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">  
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                  <li><a><i class="fa fa-table"></i>  Modelo de Clasificacion <span class="fa fa-chevron-down"></span></a>
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
                  <div class="input-group">
                    <!--  aqui va el buscador-->                    
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
                            ['Price', 'Size'],
                            <?php
                            include("conexion.php");
                              $bd  = conectar(); 
                              $SQL= "SELECT año_lec, COUNT(resultado) from notas_lec WHERE resultado >=3 GROUP by año_lec;";
                                
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
                      </li>
               
                      </li>
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
                          
                            $SQL= "SELECT año_lec, resultado from notas_lec order by año_lec;";
                              
                              //print_r($SQL);exit;
                              $consulta= mysqli_query($bd,$SQL);
                              while($resultado = mysqli_fetch_assoc($consulta)){

                                  echo "['".$resultado['año_lec']."', ".$resultado['resultado'].",],";
                              }
                         
                          ?>
                          ]);

                          var options = {
                            title: 'Grafico Dispercion por año',
                            hAxis: {title: 'Año'},
                            vAxis: {title: 'Desercion'},
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
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="chart_div" style=" height: 300px;"></div>
                  </div>
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
                          ['Hola', 'mundo'],
                          <?php                          
                          $SQL= "SELECT año_lec,resultado,COUNT(resultado) from notas_lec WHERE resultado >=3 GROUP by año_lec";
                            
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
                          
                          $SQL1= "SELECT año_lec,resultado,COUNT(resultado) from notas_lec WHERE resultado <3 GROUP by año_lec";
                            
                            //print_r($SQL);exit;
                            $consulta1= mysqli_query($bd,$SQL1);
                            while($res1 = mysqli_fetch_assoc($consulta1)){

                                echo "['".$res1['año_lec']."', ".$res1['COUNT(resultado)'].",],";
                            }                            
                        ?>
                        ]);

                        var options = {
                          title: 'Grafico Estudiantes Reprobados por años',
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
             FROM notas_lec 
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
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="curve_chart" style="height: 350px"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafico de Barras <small>Desertados </small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                          </div>
                     
                    </ul>
                    <div class="clearfix"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  <script type="text/javascript">
                      // Cargar la biblioteca de gráficos y establecer el callback
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);
                  <?php
// Establecer conexión a la base de datos


            // Ejecutar la consulta SQL
            $sql = "SELECT ano_lec, jornada, SUM(CASE WHEN resultado = 'SI' THEN 1 ELSE 0 END) AS SI, SUM(CASE WHEN resultado = 'NO' THEN 1 ELSE 0 END) AS NO FROM not_lec GROUP BY ano_lec, jornada";
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
                  <div id="chart_div1" style="height: 370px"></div>

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
	
  </body>
</html>