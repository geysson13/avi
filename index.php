<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAGA GO</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  </head>
  <body id="login">
    <div class="container">

    <form method="post" action="validar.php">

<h1 class="animate__animated animate__backInLeft"> Login </h1>

<p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario"></p>


<p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>

<input type="submit" value="Ingresar">

</form> 

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>