<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
           include("conexion.php");
           $bd  = conectar(); 
           $SQL= "SELECT año_lec,resultado,COUNT(resultado) from notas_lec WHERE resultado >3 GROUP by año_lec";
            
            //print_r($SQL);exit;
            $consulta= mysqli_query($bd,$SQL);
            while($res = mysqli_fetch_assoc($consulta)){

                echo "['".$res['año_lec']."', ".$res['COUNT(resultado)'].",],";
            }
            
        ?>
        ]);

        var options = {
          title: 'Grafico Circular Estudiantes Aprovados'
          
          
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
  
 <table class="table table-striped" style="width: 400px; height: 500px;">>
    <thead>
        <tr>      
        <th>Año lectivo </th>
        <th>Promedio</th>
        <th>Toltal</th>
                                 
        </tr>
      </thead>
  <tbody>
                <?php 
                    //abrir conexión 

                    //prepara y ejecuta consulta en BD 
                    $sql = "SELECT año_lec,resultado,COUNT(resultado) from notas_lec WHERE resultado >3 GROUP by año_lec";
                    $res = mysqli_query($bd,$sql);
                    while ($arr = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>" . $arr[0] . "</td>";
                        echo "<td>" . $arr[1] . "</td>";
                        echo "<td>" . $arr[2] . "</td>";     
                       
                        echo "</tr>";
                    }
                    //cerrar conexion
                    
                ?>
            </tbody>
        </table>
        <html>
  <head>
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
          title: 'Estudiantes Reporvados',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
  <table class="table table-striped" style="width: 400px; height: 500px;">
    <thead>
        <tr>      
        <th>Año lectivo </th>
        <th>Promedio</th>
        <th>Toltal</th>
                                 
        </tr>
      </thead>
  <tbody>
                <?php 
                    //abrir conexión 

                    //prepara y ejecuta consulta en BD 
                    $sql = "SELECT año_lec,resultado,COUNT(resultado) from notas_lec WHERE resultado <3 GROUP by año_lec";
                    $res = mysqli_query($bd,$sql);
                    while ($arr = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>" . $arr[0] . "</td>";
                        echo "<td>" . $arr[1] . "</td>";
                        echo "<td>" . $arr[2] . "</td>";     
                       
                        echo "</tr>";
                    }
                    //cerrar conexion
                    mysqli_close($bd);
                ?>
            </tbody>
        </table>        
</html>
