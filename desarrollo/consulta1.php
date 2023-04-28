
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
                  <li><a><i class="fa fa-home"></i> Modelo de Refresion Lineal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index1.php">Modulo Ciencias Basicas</a></li>
                      <li><a href='index2.php'>Modulo Luctura Critica</a></li>
                
                    </ul>
                  </li>                  
                  <li><a><i class="fa fa-table"></i> Modelo De Clasificacion  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index1.php">Modulo Ciencias Basicas</a></li>
                      <li><a href='index2.php'>Modulo Luctura Critica</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Graficos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="char1.php">Graficos Ciencias Basicas </a></li>  
                    <li><a href="char.php">Graficos Comunicacion oral y escrita  </a></li>  
                     
                      
                    </ul>
                  </li>
                 
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="cerrar.php">
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
                    <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                      
                  <a class="dropdown-item"  href="javascript:;">Ayuda</a>
                    <a class="dropdown-item"  href="cerrar.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>

        <div class="right_col" role="main">
  
          
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            
            <div class="col-md-2 col-sm-4  tile_stats_count">
                     
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              
            </div>
            
            <div class="col-md-2 col-sm-4  tile_stats_count">
                                      
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              
            </div>
          </div>
        </div> 
        

        
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Sistema Web Desercion estudiantil </h3>
                  </div>
                  <div class="col-md-6">
                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                       <?php 
                      date_default_timezone_set('America/Mexico_City');

                      echo" Fecha y Hora : ";
                      $d =date("Y-m-d H:i:s");
                      echo "$d"  
                     ?>
                    </div>
                  </div>
                </div>

                
                <div class="clearfix"></div>
                <!--<h1>ETIQUETA QUE SIRVE </h1> !-->
              </div>
            </div>

          </div>          
          <br/>
                    

          <div class="row">

            <div class="col">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h3>Ingreso de Datos  </h3>
                  
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                        <tr>
                          <th>#</th>
                          <th>Comunicacion Oral 1</th>
                          <th>Comunicacion Oral 2</th>
                          <th>Prueba saber 11</th>
                          <th>Simulacion Modelo</th>
                          <th>Año   Lectivo </th>
                          <th>Semestre </th>
                          <th>Jornada </th>
                          <th>Año Prueba Saber 11</th>           
                        </tr>
                      </thead>
                      <tbody>
                <?php 
                    //abrir conexión 
                    include("conexion.php");
                    $bd  = conectar();
                    if (!$bd) return;

                    //prepara y ejecuta consulta en BD 
                    $sql = "select * from notas_lec order by id";
                    $res = mysqli_query($bd,$sql);
                    while ($arr = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>" . $arr[0] . "</td>";
                        echo "<td>" . $arr[1] . "</td>";
                        echo "<td>" . $arr[2] . "</td>";
                        echo "<td>" . $arr[3] . "</td>";
                        echo "<td>" . $arr[4] . "</td>";
                        echo "<td>" . $arr[5] . "</td>";
                        echo "<td>" . $arr[6] . "</td>";
                        echo "<td>" . $arr[7] . "</td>";
                                   
                        echo "</tr>";
                    }
                    //cerrar conexion
                    mysqli_close($bd);
                ?>
            </tbody>
        </table>
                      
                
  
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modelo Regresion Lineal</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <img src="images/modelol.jpg" width="450" height="450">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                  </div>
                </div>
              </div>             
              </div> 
                         
             </div>      
             </div>
            </form>
      
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
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
   
  </script>
  </body>
</html>
