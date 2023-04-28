<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Matematicas Basicas','Matematicas Discretas','Calculo Diferencia', 'Matematicas Discretas 2','Algebra Lineal', 'Calculo Integral'],
      <?php		  
		 	 include("conexion.php");
		  	$bd  = conectar();         
        $SQL= "SELECT 
        SUM(CASE WHEN mat_basc3 < 3 THEN 1 ELSE 0 END) AS Mat_Bas, 
			  SUM(CASE WHEN mat_disc1 < 3 THEN 1 ELSE 0 END) AS Mat_Dis, 
			  SUM(CASE WHEN cal_difc2 < 3 THEN 1 ELSE 0 END) AS Cal_Dif, 
			  SUM(CASE WHEN mat_dis2c1 < 3 THEN 1 ELSE 0 END) AS Mat_Dis2, 
			  SUM(CASE WHEN algc1 < 3 THEN 1 ELSE 0 END) AS Alg_lin, 
			  SUM(CASE WHEN cinc1 < 3 THEN 1 ELSE 0 END) AS Cal_In 
			  FROM notas_mat";   
               
      //print_r($SQL);exit;
      $consulta= mysqli_query($bd,$SQL);
      while($res = mysqli_fetch_assoc($consulta)){
        echo "[".$res['Mat_Bas'].",".$res['Mat_Dis'].", ".$res['Cal_Dif'].",".$res['Mat_Dis2'].",".$res['Alg_lin'].",".$res['Cal_In']."],";
      }
					
			?> 
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 600,
          legend: { position: '' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'matematicas'} // Top x-axis.
            }
          },
          bar: { groupWidth: "10%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
