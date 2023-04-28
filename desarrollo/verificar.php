
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style> 
 body{
    background-color:#0C3D50
    }
</style>    
</head>
<body>

    
<?php
    
    include("conexion.php");
    $bd  = conectar();  

    $email = $_POST["correo"];
    $clave = $_POST["clave"];
    //var_dump($_POST);
    
    $sql2 = "select * from usuarios where correo='$email'  and   contraseña='$clave'";
    //print_r($sql2);exit;
    $res2 = mysqli_query($bd,$sql2);//almacena conexion y la busqueda  
    //print_r($sql2);exit; //Prueba variable  
    $arr = mysqli_fetch_array($res2); 
    //print_r($arr[0]);exit;

    $num_col=mysqli_num_rows($res2);
    //print_r($num_col);

        if($num_col>0){
            
            header("Location: index1.php"); 
            session_start();
            $_SESSION["usuario"] = $arr[1];   

        }else{            
            echo " '<div class='alert alert-success' role='alert'>
            <h4 class='alert-headin'>Ups Ups!</h4>
            <p>Haz ingresado Mal tus Correro electronico y contraseña Por favor vuelve ingresar </p>
            <hr>
            <p class='mb-0'>Asegurate de tener una buea conexion</p>
          </div>";
            //header("Location: index.php");
            echo '<a href="index.php" class="btn btn-primary">Iniciar Sesion</a>';
        }  

    /*if ($res2){     
        
        header("Location: administracion.php"); 
        $_SESSION["usuario"] = $arr[0];   
        
         
    }
    else{
        header("Location: index.php");
        echo "error";
    }*/
    mysqli_close($bd);
    




    

?>

</body>
</html>