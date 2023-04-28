
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Web</title>

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../desarrollo/css/estilos.css" rel="stylesheet">
     <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login" style="background-color:#0C3D50">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action=verificar.php method=POST>
              <h1>Ingreso al Sistema  Web </h1>
              <div>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="correo" required />
              </div>
              <div>
                <input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña" required/>
              </div>
              <div>
                <button type="submit" class= "btn btn-primary">ingresar</button>
                <button type="reset" class="btn btn-primary">Limiar</button>
                <!--<a class="reset_pass" href="index1.php">ingresar</a>--> 
              </div>

              <div class="clearfix"></div>

              <div class="separator">
              <a href="#signup" class="btn btn-primary"> Registrate </a>
                <div class="clearfix"></div>
                <div>
                  
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">

            <form action=insertar.php method=POST>
              <h1>Usuario nuevo</h1>
              <div>
                <input type="text" class="form-control" id ="nombre" name ="nombre" placeholder="Nombre" required  >
              </div>
              <div>
                <input type="email" class="form-control" id="correo" onkeyup="checkDomain()" name="correo" placeholder="Correo electronico" required  >
              </div>
              <div>
              <input type="password" class="form-control"  name="clave" id="clave"  required required pattern="^(?=.*[A-Z])(?=.*[0-9]).{8,}$" placeholder=" Combina numeros y mayusculas"  >
              </div>
              <p id="domain-status"></p>
              <script>
                function checkDomain() {
                  let email = document.getElementById('email').value;
                  let domain = email.split('@')[1];

                  let xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                      if (xhr.status === 200) {
                        document.getElementById('domain-status').innerHTML = xhr.responseText;
                      } else {
                        document.getElementById('domain-status').innerHTML = 'Ha ocurrido un error.';
                      }
                    }
                  };
                  xhr.open('GET', 'insertar.php' + domain, true);
                  xhr.send();
                }
              </script>
              <div>                
                <button class="btn btn-dark">Registrar</button><br>           
                <a class="btn btn-dark" href="index.php">Volver</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
