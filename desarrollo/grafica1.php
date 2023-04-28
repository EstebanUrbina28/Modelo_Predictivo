<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['año lectivo', 'Aprobados', 'Reprobados'],
          <?php
           include("conexion.php");
           $bd  = conectar(); 
           $SQL= "SELECT año_lec, 
           SUM(CASE WHEN resultado >= 3 THEN 1 ELSE 0 END) AS can_A, 
           SUM(CASE WHEN resultado < 3 THEN 1 ELSE 0 END) AS can_R 
          FROM notas_mat 
          GROUP BY año_lec;";
                  
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
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
