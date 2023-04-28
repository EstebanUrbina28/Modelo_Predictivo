
<?php
 
    session_start();
    function verificar(){
        if (!isset($_SESSION["usuario"])){
          echo ' <div class="alert alert-info">
          <strong>Info!</strong> Su Sesion se a cerrado 
        </div>';
          echo '<a href="index.php" class="btn btn-primary">Iniciar Sesion</a>';
            return 0;
        }
        if ($_SESSION["usuario"]==""){
            echo "<h3>Sesion fue finalizada</h3>";
            return 0;
        }
        return 1;
        if((time() - $_SESSION['time'])>1800){
          header('location:index.php');
        }
    }
    

?>
