<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta con Estrellas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
     .label{
      
     }
      .rating {
      display: inline-block;
      position: relative;
      height: 32px;
      margin-bottom: 10px;
      
    }

    .rating input {
      position: absolute;
      left: -9999px;
    }

    .rating label {
      cursor: pointer;
      font-size: 24px;
      color: #ccc;
      margin-right: 5px;
      border-radius: 40px;
      
    }

    .rating label i {
      margin-top: 1px;
      border-radius: 40px;
    }

    .rating input:checked ~ label,
    .rating label:hover ~ label {
      color: #f5b301;
      border-radius: 40px;
    }

    .rating input:checked ~ label i,
    .rating label:hover ~ label i {
      color: #f5b301;
      
    }
    .radio{
       border-radius: 40px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2>Encuesta con Estrellas</h2>
    <p>Para calificar la encuesta asigne un valor en estrellas a la respuesta
      donde 5 estrellas es lo positivo y 1 estrella es no negativo
    </p>
    <form action="encu.php" method="POST">      
      <div class="form-group">
        <label for="calificacion">Calificación:</label>
        <div class="rating">
        <h5>¿Fue facil Ingresar al plataforma?</h5>
          <input type="radio" name="calificacion" id="estrella_5" value="5" required >          
          <label for="estrella_5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion" id="estrella_4" value="4" required>
          <label for="estrella_4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion" id="estrella_3" value="3" required>
          <label for="estrella_3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion" id="estrella_2" value="2" required>
          <label for="estrella_2"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion" id="estrella_1" value="1" required>
          <label for="estrella_1"><i class="fa fa-star"></i></label>
        </div>
      </div>

      <div class="form-group">
        <label for="calificacion_1">Calificación:</label>
        <div class="rating">
        <h5>¿Tuvo dificulta en manejar la aplicacion? </h5>
          <input type="radio" name="calificacion_1" id="estrella5" value="5" required>          
          <label for="estrella5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_1" id="estrella4" value="4" required>
          <label for="estrella4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_1" id="estrella3" value="3" required>
          <label for="estrella3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_1" id="estrella2" value="2" required>
          <label for="estrella2"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_1" id="estrella1" value="1" required>
          <label for="estrella1"><i class="fa fa-star"></i></label>
        </div>
      </div>

      <div class="form-group">
        <label for="calificacion_3">Calificación:</label>
        <div class="rating">
        <h5>¿Recomendaria el Software ? </h5>
          <input type="radio" name="calificacion_3" id="est5" value="5" required>          
          <label for="est5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_3" id="est4" value="4" required>
          <label for="est4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_3" id="est3" value="3" required>
          <label for="est3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_3" id="est2" value="2" required>
          <label for="est2"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion_3" id="est1" value="1" required>
          <label for="est1"><i class="fa fa-star"></i></label>
        </div>
      </div>

      <div class="form-group">
        <label for="calificacion4">Calificación:</label>
        <div class="rating">
        <h5>¿Las Funciones de la aplicacion Fueron Claras y facil de entender? </h5>
          <input type="radio" name="calificacion4" id="e5" value="5" required>          
          <label for="e5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion4" id="e4" value="4" required>
          <label for="e4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion4" id="e3" value="3" required>
          <label for="e3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion4" id="e2" value="2" required>
          <label for="e2"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion4" id="e1" value="1" required>
          <label for="e1"><i class="fa fa-star"></i></label>
        </div>
      </div>
      <div class="form-group">
        <label for="calificacion5">Calificación:</label>
        <div class="rating">
        <h5>¿Cree usted que la aplicacion cumple con los objetivos? </h5>
          <input type="radio" name="calificacion5" id="es5" value="5" required>          
          <label for="es5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion5" id="es4" value="4" required>
          <label for="es4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion5" id="es3" value="3" required>
          <label for="es3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion5" id="es2" value="2" required>
          <label for="es2"><i class="fa fa-star"></i></label>
          <label for="es1"><i class="fa fa-star"></i></label>
        </div>
      </div>
     <div class="form-group">
        <label for="calificacion6">Calificación:</label>
        <div class="rating">
        <h5> ¿Esta satisfecho con el rendimiento de nuestro software?</h5>
          <input type="radio" name="calificacion6" id="estr5" value="5">          
          <label for="estr5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion6" id="estr4" value="4">
          <label for="estr4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion6" id="estr3" value="3">
          <label for="estr3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion6" id="estr2" value="2">
          <label for="estr2"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion6" id="estr1" value="1">
          <label for="estr1"><i class="fa fa-star"></i></label>
        </div>
      </div>
       <!--<div class="form-group">
        <label for="calificacion7">Calificación:</label>
        <div class="rating">
        <h5>PREGUNTA 7 </h5>
          <input type="radio" name="calificacion7" id="estre5" value="5">          
          <label for="estre5"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion7" id="estre4" value="4">
          <label for="estre4"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion7" id="estre3" value="3">
          <label for="estre3"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion7" id="estre2" value="2">
          <label for="estre2"><i class="fa fa-star"></i></label>
          <input type="radio" name="calificacion7" id="estre1" value="1">
          <label for="estre1"><i class="fa fa-star"></i></label>
        </div>
      </div>
  -->         
      <a href="index1.php" class="btn btn-primary">Regresar</a>
      <button type="submit" class="btn btn-primary" >Enviar</button>
      
    </form>    
  </div>
 
  <script src="https://code.jquery.com/jquery-3.5.
