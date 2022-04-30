<?php 
  if(empty($_GET['token'])){
    header("Location: login.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>New Password</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<link href="../css/style2.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form>
    <?php
        include("../layout/funciones_php/database.php");
        $token = $_GET['token'];
        $server = new ConnectionServer();
        $conexion = $server->getConnection();
        $sql = "SELECT * FROM usuarios WHERE token='$token'";
        $result = mysqli_query($conexion, $sql);
        $contar = mysqli_num_rows($result);
      
        if ($contar == 1){
            $datos = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $udi = $datos["udi"];

            echo ' 
            <form class="formulario">
            <img class="mb-4" src="img/microchip2.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Coloca tu nueva contraseña</h1>
            <h3>Bienvenido '.$datos['nombre'].'</h3>
            
            <input type="hidden" name="id" value="'.$udi.'" id="udi">
            <div class="col">
      
              <input type="password" placeholder="Contraseña" class="col" id="new_password">
    
              
            </div>
        
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            
            <input type="button" value="Nueva contraseña" id="new_pass">
        
        
        
            <div class="form-floating">
              
            </div>
        
        
            <p class="mt-5 mb-3 text-muted" id="respuesta"></p>
          </form>';    

    }else{
        echo '<h3>Ocurrio un error, vuelve a intenatarlo despues</h3>';
      }
      mysqli_close($conexion);
      ?>
</main>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../js/jquery3.js"></script>
<script src="../js/admin_login.js"></script> 
</body>
</html>
