<?php
    $conexion = mysqli_connect('localhost', 'dlujhujc_cesar', 'tI0sFc]*uX]!', 'dlujhujc_moonhotel');
    if(!$conexion){
        die('Conexion Failed'.mysqli_error($conexion));
    }
    if(isset($_POST['save'])){
        $nom = $_POST['name'];
        $correo = $_POST['email'];
        $tel = $_POST['phone'];
        $comen = $_POST['comment'];
        $fecha = $_POST['date'];

        $insertar = "INSERT INTO comentarios (nombre, fecha, comentario, correo, telefono)
            VALUES ('{$nom}','{$fecha}', '{$comen}', '{$correo}', '{$tel}')";
        if(mysqli_query($conexion, $insertar)){
            $id = mysqli_insert_id($conexion);
            $guardado = '
            <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#"> "'. $nom .'" </a>
                </address>
                <time datetime="">"'. $fecha .'"</time>
              </header>
              <div class="comcont">
                <p> "'. $comen .'" </p>
              </div>
            </article>
          </li>
            ';
            echo $guardado;
        }else{
            echo "Error: ".mysqli_error($conexion);
        }
        exit();
    }

    $consulta = "SELECT * FROM comentarios";
    $resultado = mysqli_query($conexion, $consulta);
    $mostrar = "";
    while ($fila = mysqli_fetch_array($resultado)){
        $mostrar .= '
        <li>
        <article>
          <header>
            <figure class="avatar"><img src="../img/avatar4.png" alt=""></figure>
            <address>
            By <a href="#"> "'. $fila['nombre'] .'" </a>
            </address>
            <time datetime="">"'. $fila['fecha'] .'"</time>
          </header>
          <div class="comcont">
            <p> "'. $fila['comentario'] .'" </p>
          </div>
        </article>
      </li>
        ';
    }
?>