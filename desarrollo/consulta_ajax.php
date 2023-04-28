<?php 
    //abrir conexión 
    include("conexion.php");
    $bd  = conectar();
    if (!$bd) return;
    echo "<h4>Resultados de consulta</h4>";
    echo "<hr>";
    //prepara y ejecuta consulta en BD 
    //$sql = "SELECT año_lec,jornada, COUNT(resultado) from notas_mat WHERE resultado >3  GROUP by jornada";
    $res = mysqli_query($bd,$sql);
    while ($arr = mysqli_fetch_array($res)){
       if ($arr[0]=="Diurna") { 
           echo "<h4>Cantidad de Aprobados: </h4>";
           echo "<p>$arr[1] $arr[2]</p>";
        }
        else{
           echo "<h4>Cantidad de Aprobados: </h4>";
           echo "<p>$arr[1] $arr[2]</p>";
        }
    }
    //cerrar conexion
    mysqli_close($bd);
    
?>
