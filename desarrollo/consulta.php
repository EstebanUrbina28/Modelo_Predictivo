<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>    
  </head>  
 <table class="table table-striped" style="width: 400px; height: 500px;">
    <thead>
        <tr>      
        <th>Año lectivo </th>
        <th>Promedio</th>
        <th>Año lectivo </th>
        <th>Promedio</th>
        <th>Año lectivo </th>
        <th>Promedio</th>
        <th>Año lectivo </th>
        <th>Promedio</th>
        <th>Año lectivo </th>
        <th>Promedio</th>
    
                                 
        </tr>
      </thead>
  <tbody>
                <?php 
                    //abrir conexión 
                    include("conexion.php");
                    $bd  = conectar();
                    if (!$bd) return;
                    //prepara y ejecuta consulta en BD 
                    $sql = "SELECT *  from notas_mat";
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
                        echo "<td>" . $arr[8] . "</td>";
                        echo "<td>" . $arr[9] . "</td>";        
                           
                       
                        echo "</tr>";
                    }
                    //cerrar conexion
                    
                ?>
            </tbody>
        </table>
        <html>
  <head>