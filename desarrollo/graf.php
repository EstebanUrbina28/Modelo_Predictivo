<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Año Lectivo', 'Jornada', 'SI', 'NO'],
          <?php
           include("conexion.php");
           $bd  = conectar(); 
           $SQL= "SELECT ano_lec, jornada, SUM(CASE WHEN desercion = 'SI' THEN 1 ELSE 0 END) AS SI,
           SUM(CASE WHEN desercion = 'NO' THEN 1 ELSE 0 END) AS NO FROM not_mat GROUP BY ano_lec, jornada";
            
            //print_r($SQL);exit;
            $consulta= mysqli_query($bd,$SQL);
            while($res = mysqli_fetch_assoc($consulta)){

              echo "['".$res['ano_lec']."','".$res['jornada']."', ".$res['SI'].",".$res['NO'].",],";
            }   
        ?>
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
