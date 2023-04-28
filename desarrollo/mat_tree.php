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
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../build/css/estilos.css" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index1.php" class="site_title"></i> <span>Dashboard Web</span></a>
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
                <h3>Menu Principal </h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Modelo Regresion Lineal Multiple <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index1.php">Modulo Ciencias Basicas</a></li>
                      <li><a href='index2.php'>Modulo Luctura Critica</a></li>
                
                    </ul>
                  </li>                  
                  <li><a><i class="fa fa-table"></i> Modelo Clasificacion  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="mat_tree.php">Modelo de ciencias Basicas</a></li>
                      <li><a href="com_tree.php">Modelo de Lectura Critica </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Graficos Modelos <span class="fa fa-chevron-down"></span></a>
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
        <?php
        include("conexion.php");
        $bd  = conectar(); 
        $SQL= "SELECT COUNT(*) FROM usuarios;";        
                                
        //print_r($SQL);exit;
        $consulta= mysqli_query($bd,$SQL);
        while($arr = mysqli_fetch_array($consulta)){
          echo "           
        
         <div class='right_col' role='main'>
          <!-- top tiles -->
          <div class='row' style='display: inline-block;' >
          <div class='tile_count'>
            <div class='col-md-2 col-sm-4  tile_stats_count'>
              <span class='count_top'><i class='fa fa-user'></i> Total Usuarios</span>
              <div class='count'>$arr[0]</div>
              <span class='count_bottom'><i class='green'><i class='fa fa-sort-asc'></i>$arr[0] </i> Usuarios</span>
              </div>
            ";}
            $SQL1= "SELECT COUNT(*) FROM not_mat";
                                
    
            $reg= mysqli_query($bd,$SQL1);
            while($arr1 = mysqli_fetch_array($reg)){
              echo"  
            
            <div class='col-md-2 col-sm-4  tile_stats_count'>
              <span class='count_top'><i class='fa fa-user'></i> Total Registros</span>
              <div class='count'>$arr1[0]</div>
              <span class='count_bottom'><i class='green'><i class='fa fa-sort-asc'></i> $arr1[0] </i> Registros</span>
            </div>
            ";}
            $SQL2= "SELECT desercion, COUNT(desercion) FROM not_mat WHERE desercion LIKE '%SI'";                               
            // con control D selecionamos y remplazamos
            $reg1= mysqli_query($bd,$SQL2);
            while($arr2 = mysqli_fetch_array($reg1)){
            echo"
            <div class='col-md-2 col-sm-4  tile_stats_count'>
              <span class='count_top'><i class='fa fa-user'></i> Desertos  ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::</span>
              <div class='count red'>$arr2[1]</div>
              <span class='count_bottom'><i class='red'><i class='fa fa-sort-asc'></i>$arr2[0] </i> Desertaron</span>
            </div>
            ";}
            $SQL3= "SELECT desercion, COUNT(desercion) FROM not_mat WHERE desercion LIKE '%NO%'";                               
            // con control D selecionamos y remplazamos
            $reg3= mysqli_query($bd,$SQL3);
            while($arr3 = mysqli_fetch_array($reg3)){
            echo"
            <div class='col-md-2 col-sm-4  tile_stats_count'>
              <span class='count_top'><i class='fa fa-user'></i> Deserto</span>
              <div class='count green'>$arr3[1]</div>
              <span class='count_bottom'><i class='green'><i class='fa fa-sort-desc'></i>$arr3[0] </i> desertaron </span>
            </div>
            ";}
            $SQL4= "SELECT COUNT(jornada) FROM not_mat WHERE jornada LIKE 'Diu%'";                               
            // con control D selecionamos y remplazamos
            $reg4= mysqli_query($bd,$SQL4);
            while($arr4 = mysqli_fetch_array($reg4)){
            echo"            
            <div class='col-md-2 col-sm-4  tile_stats_count'>
              <span class=count_top'><i class='fa fa-user'></i> Registros Mañana  </span>
              <div class='count'> $arr4[0] </div>
              <span class='count_bottom'><i class='green'><i class='fa fa-sort-asc'></i>$arr4[0] </i> Mañana</span>
            </div>
            ";}
            $SQL5= "SELECT COUNT(jornada) FROM not_mat WHERE jornada LIKE 'Noc%'";                               
            // con control D selecionamos y remplazamos
            $reg5= mysqli_query($bd,$SQL5);
            while($arr5 = mysqli_fetch_array($reg5)){
            echo"
            <div class='col-md-2 col-sm-4   tile_stats_count'>
              <span class='count_top'><i class='fa fa-user'></i> Registro  Noche</span>
              <div class='count'>$arr5[0]</div>
              <span class='count_bottom'><i class='green'><i class='fa fa-sort-asc'></i>$arr5[0] </i> Noche </span>
            </div>            
          </div>
        </div>
              ";}
              mysqli_close($bd);
        ?>
        
        

        
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Modelo de Clasificacion  </h3>
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
                  <h2>Ingreso De datos </h2>
                  
                  <form action="cal_tree.php" method="POST"  >
                  <div class="clearfix"></div>
                  </div>
                  <div class="row ">
                  <div class="col-6 col-sm-3">
                  <label for="txtn1">Matematicas Basicas C3 </label>
                  <input value=""  step="any" type="number" class="form-control" min="0" max="5" name="n1" id="n1"  placeholder="Matematicas Basicas C3 " aria-label="nota 1" required ><br>
                
                </div>
                <div class="col-6 col-sm-3">
                <label for="txtn2">Matematicas Discretas C1</label>
                  <input value=""  step="any" type="number" class="form-control"   min="0" max="5"  name="n2" id="n2"  placeholder="Matematicas Discretas C1" aria-label="nota 2" required >
                </div>               
                <div class="col-6 col-sm-3">
                <label for="txtn2">Calculo Diferencia C2</label>
                  <input value=""  step="any" type="number" class="form-control"  min="0" max="5"  name="n3" id="n3"  placeholder="Calculo Diferencia C2" aria-label="nota 2" required >
                  
                </div>
                <div class="col-6 col-sm-3">
                <label for="txtn2">Matematicas Discretas 2 C1</label>
                <input value=""  step="any" type="number" class="form-control"   min="0" max="5" name="n4" id="n4"  placeholder="Matematicas Discretas 2 C1" aria-label="nota 2" required >
                </div> 
                <div class="col-6 col-sm-3">
                <label for="txtn2">Algebra lineal C1</label>
                <input value=""  step="any" type="number" class="form-control"   min="0" max="5" name="n5" id="n5"  placeholder="Algebra lineal C1" aria-label="nota 2" required >
                </div>
                <div class="col-6 col-sm-3">
                <label for="txtn2">Calculo integral C1</label>
                <input value=""  step="any" type="number" class="form-control"   min="0" max="5" name="n6" id="n6"  placeholder="Calculo Integral C1" aria-label="nota 2" required >
                </div> 
                <div class="col-6 col-sm-3">
                <label for="txtn5">Resultado Saber 11</label>
                <input value=""  step="any" type="number" class="form-control"   min="0" max="5" name="n7" id="n7"  placeholder="Resultados Saber 11" aria-label="nota 2" required >
                </div>               
                <div class="col-6 col-sm-3">
                <label for="txtn2">Año lectivo</label>
                <select class="form-control" aria-label="Default select example" require  name="lstaño" id="lstaño" >                
                <option value="2017-2">2017-2</option>
                <option value="2018-1">2018-1</option>
                <option value="2018-2">2018-2</option>
                <option value="2019-1">2019-1</option>
                <option value="2019-2">2019-2</option>
                <option value="2020-1">2020-1</option>
                <option value="2020-2">2020-2</option>
                <option value="2021-1">2021-1</option>
                <option value="2021-2">2021-2</option>
                <option value="2022">2022</option>
               </select>           
                </div>                        
                
                <div class="col-6 col-sm-3">
                <label for="txtn2">Jornada</label>
                <select class="form-control" aria-label="Default select example" require name="lstjd" id="lstjd" >                
                <option value="Diurna">Diurna</option>
                <option value="Nocturna">Nocturna</option> 
              
              </select>                      
                </div>
                 
              <div class="col">
              <br><button type="submit" class="btn btn-success">Calcular</button>
              <button type="reset" class="btn btn-success">Limpiar</button>             
              <!--<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                Visualizar Modelo Regresion L
                </button>-->
                
  
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                    
                      
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <CEnter> <h1>ALERTA</h1></CEnter>
                    <p>ESTÁS INGRESANDO A UN MODELO DE CLASIFICACIÓN TE RECOMENDAMOS UTILIZAR EL MODELO RECOMENDADO. EL MODELO DE CLASIFICACIÓN PUEDE OBTENER PREDICCIONES NO TAN PRECISAS

                    </p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      
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
    <script src="../vendors/DateJS/build/date.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="js/moment/calculo.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	
  </body>
</html>
