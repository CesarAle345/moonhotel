<?php
include '../layout/funciones_php/funciones.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style> 
        input[type=button], input[type=submit], input[type=reset] {
        background-color: #FF6F61;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        }
        </style>
        <style> 
        input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
        </style>
        <style> 
        input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
        </style>
        <style> 
        input[type=phone] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
        </style>
        
        <meta charset="utf-8">
        <title>Concepto - MoonHotel</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="../img/logo.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/slick/slick.css" rel="stylesheet">
        <link href="../lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>ac34375@gmail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+52 443 349 0051</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="../index.html" class="nav-item nav-link">Inicio</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown">Acerca de</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Concepto</a>
                                    <a href="avances.html" class="dropdown-item">Avances</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Prototipo</a>
                                <div class="dropdown-menu">
                                    <a href="bigelow.html" class="dropdown-item">Bigelow Aerospace</a>
                                    <a href="gateway.html" class="dropdown-item">Gateway Foundation</a>
                                    <a href="nasa.html" class="dropdown-item">La NASA</a>
                                    <a href="voyager.html" class="dropdown-item">Voyager Station</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Publico</a>
                                <div class="dropdown-menu">
                                    <a href="terminos.html" class="dropdown-item">Terminos y Condiciones</a>
                                </div>
                            </div>
                            
                            <a href="galeria.html" class="nav-item nav-link">Galeria</a>
                            <a href="videos.html" class="nav-item nav-link">Videos</a>
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <script async src="https://cse.google.com/cse.js?cx=1575a856d38159641"></script>
                            <div class="gcse-search"></div>
                           


                        </div>
                    </div>
                </nav>
            </div>
        </div>

        
        <!-- Nav Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item">Acerca de</li>
                    <li class="breadcrumb-item active">Concepto</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                

                               <!-- <div class="estilo1">
                                    <div class="container estilo1 estilo2" id="unico"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, magnam, harum molestias beatae doloribus aliquam, sed dignissimos consequatur officia molestiae voluptatibus sapiente neque! Rem nihil quos quam ipsa, sapiente et?</div>
                                    <input type="button" value="Poner Estilo" onClick="ponerEstilo()">
                                    <input type="button" value="Quitar Estilo" onClick="quitarEstilo()">
                                </div>
                                  -->

                                  <h1 class="sn-title" id="titulo">MoonHotel</h1>  
                                    <br>
                                <img src="../img/concepto/1.jpg" />
                                
                            </div>
                            <div class="sn-content">
                                <h2 class="sn-title" id="primero">Hoteles en la luna</h2>
                                <p id="segundo">
                                    ¿Estamos cerca de poder alojarnos en el primer hotel en la luna? <br> 
                                    Una compañía de contenedores espaciales con sede en Las Vegas quiere enviar <b>el primer hotel espacial</b> hinchable para orbitar alrededor del <a href="https://es.wikipedia.org/wiki/Sat%C3%A9lite_natural#:~:text=Un%20sat%C3%A9lite%20natural%20es%20un%20cuerpo%20celeste%20que,anillo%2C%20es%20el%20%C3%BAnico%20cuerpo%20en%20su%20%C3%B3rbita.">satélite</a> con alojamiento para astronautas y turistas por igual. Con ello, pretenden que otras empresas privadas les compren las estaciones para fines comerciales, como puede ser la instalación de un hotel. 
                                </p>
                                
                                <div class="sn-img">
                                    <img src="../img/concepto/2.jpeg" />
                                    
                                </div>
                                <h3 id="tercer">A por el turismo espacial</h3>
                                <p id="cuarto">
                                    El objetivo del hotelero Robert Bigelow, dueño de la compañía propietario de la cadena de hoteles <a href="http://www.budgetsuites.com/">Budget Suites of America</a>, va más allá. De hecho, lleva trabajando en el proyecto de las estaciones expandibles desde 1999.  
                                    Sus cápsulas cada vez aportan más volumen, seguridad, oportunidad y mejor precio que las alternativas de aluminio. De hecho, la NASA ya las está probando. El «Módulo de actividad expansible Bigelow» (BEAM) se adhirió a la Estación Espacial Internacional en abril de 2016 y consiguió su tamaño completo en mayo. 
                                </p>
                            </div>
                        </div>
                        <div id="comments">
                        <h2>Comentarios</h2>
                            <ul id="area_comentarios">
                            <?php echo $mostrar ?>
          
                            <li>
                                <article>
                                <header>
                            
                                    <figure class="avatar"><img src="../img/template/avatar4.png"></figure>
                                    <address>
                                    By <a href="#">Bot</a>
                                    </address>
                                    <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                                </header>
                                <div class="comcont">
                                    <p>Mensaje de prueba</p>
                                </div>
                                </article>
                            </li>
                            </ul>
                    </div>
                        <div class="sn-related">
                        <h2>!No Olvides Dejar Tu Comentario!</h2>
                        <form action="#" method="post" id="formulario">
                            <div class="one_third first">
                                <label for="name">Nombre <span>*</span></label>
                                <input type="text" name="nombre" id="name" value="" size="22" required>
                            </div>
                            <div class="one_third first">  
                                <label for="email">Correo <span>*</span></label>
                            <div class="error" id="error-email"></div>
                                <input type="email" name="email" id="email" value="" size="22" required>
                            </div>
                            <div class="one_third first">
                                <label for="phone">Teléfono</label>
                                <div class="error-tel" id="error-phone"></div>
                                <input type="phone" name="phone" id="phone" value="" size="22">
                            </div>
                            <br>
                            <div class="block clear">
                                <label for="comment">Tu Mensaje</label>
                                <br>
                                <textarea name="comment" id="comment" cols="85" rows="6"></textarea>
                            </div>
                            <div class="block clear">
                                <input type="checkbox" name="terminos" id="terminos" value="terminos"/>
                                <label for="terminos">Acepta los terminos y condiciones</label>
                            </div>
                        <div>
                            <input name="submit" type="button" id="btn_comentario" value="Enviar" onClick="validarFormulario(email.value, phone.value)">
                                &nbsp;
                            <input name="reset" type="reset" value="Borrar Todo">
                            </div>
                        </form>
                        </div>


                    </div>

                    <div class="col-lg-4" id="divisor">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Prototipos</h2>
                                <div class="news-list">
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <a href="bigelow.html"><img src="../img/bigelow/1.png" /></a>
                                        </div>
                                        <div class="nl-title">
                                            <a href="bigelow.html">Bigelow Aerospace</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <a href="gateway.html"> <img src="../img/gateway foundation/logo.jpg" /></a>
                                        </div>
                                        <div class="nl-title">
                                            <a href="gateway.html">Gateway Foundation</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <a href="nasa.html"> <img src="../img/voyager/logo2.png" /></a>
                                        </div>
                                        <div class="nl-title">
                                            <a href="voyager.html">Voyager Station</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <a href="nasa.html"> <img src="../img/nasa/logo.png" /></a>
                                        </div>
                                        <div class="nl-title">
                                            <a href="nasa.html">NASA</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Recomendado</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">YouTube</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="../img/gateway foundation/2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="gateway.html">Primer hotel en el espacio</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="../img/gateway foundation/2.png" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="bigelow.html">Increible hotel en el espacio</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <a href="terminos.html"><img src="../img/Terminos/4.jpg" /></a>
                                                </div>
                                                <div class="tn-title">
                                                    <a href="terminos.html">Esto costará primer hotel en el espacio</a>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="bloque">
                                                <input type="button" value="Dato Curioso..." id="boton"> </input>
                                                <input type="button" value="Borrar" id="buton"> </input>
                                            </div>
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <a href="https://youtu.be/prtJ2CwMuS8"><img src="../img/gateway foundation/4.jpg" /></a>
                                                </div>
                                                <div class="tn-title">
                                                    <a href="https://youtu.be/prtJ2CwMuS8">Voyager Station</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <a href="https://www.youtube.com/c/TheGatewayFoundation"><img src="../img/gateway foundation/2.png" /></a>
                                                </div>
                                                <div class="tn-title">
                                                    <a href="https://www.youtube.com/c/TheGatewayFoundation">Gateway Foundation.</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <a href="https://www.youtube.com/watch?v=5nE3UO1kqv0"><img src="../img/bigelow aerospace/3.jpg" /></a>
                                                </div>
                                                <div class="tn-title">
                                                    <a href="https://www.youtube.com/watch?v=5nE3UO1kqv0">Bigelow Aerospace</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Contacto</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Maravatio, Michoacán, México</p>
                                <p><i class="fa fa-envelope"></i>ac34375@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+52 44433490051</p>
                                <div class="social">
                                    <a href="https://twitter.com/CesarTheGamerYT"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/SoundBlaster345PO"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/cesaravilesxo/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/c/SoundBlaster345/featured"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                           
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="newsletter">
                                <h3 class="title">Links Directos</h3>
                                <ul>
                                    <li><a href="avances.html">Avances</a></li>
                                    <li><a href="bigelow.html">Bigelow Aerospace</a></li>
                                    <li><a href="gateway.html">Gateway Foundation</a></li>
                                    <li><a href="nasa.html">La NASA</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="../js/app.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
            function validarFormulario(correo, telefono){
                let re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.(^[a-z\.]{2,6})$/
                let rt = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/
                if (!re.test(correo)){
                    document.getElementById('error-email').innerHTML = "Invalido";
                    setTimeout(function(){
                    }, 2000);
                }
                if (!re.test(phone)){
                    document.getElementById('error-phone').innerHTML = "Invalido";
                    setTimeout(function(){
            }, 2000);
            let condiciones = document.getElementById("terminos");
            if (!condiciones.checked) {
                alert("Debes aceptar los terminos y condiciones");
            }
            }
        }
       </script>
        <script src="../js/funciones_comentario.js"> </script>
        <script src="../js/jquery3.js"></script>
    
    </body>
</html>
