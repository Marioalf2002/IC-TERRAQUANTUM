<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
        
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
            $name = $_POST['nombre'];
            $email = $_POST['correo'];
            $phone = $_POST['telefono'];
            $asunto = $_POST['asunto'];
            $msg = $_POST['mensaje'];
            
            $mail = new PHPMailer(true);
            
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'soporte@icterraquantum.com';                     //SMTP username
                $mail->Password   = 'Terra2021';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
                //Recipients
                $mail->setFrom('soporte@icterraquantum.com', 'Soporte');
                $mail->addAddress('info@icterraquantum.com');     //Add a recipient
                $mail->addAddress('infoicterraquantum@gmail.com');
                // $mail->addAddress('info@icterraquantum.com');
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
        
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $asunto;
                $mail->Body    = 'Nombre: '. $name .
                                 ', Correo: '. $email .
                                 ', Telefono: '. $phone .
                                 ', Mensaje: '. $msg
                                 ;
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
                $mail->send();

                $confirmacion = 'Mensaje enviado';
            } catch (Exception $e) {
                $confirmacion = "Error al enviar los datos"; // echo "Hubo un error: {$mail->ErrorInfo}";
            }
        }
    }
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IC Terraquantum</title>

    <!-- Tipografia -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7COswald:200,400%7COpen+Sans:300,400,600,700,800" media="all">

    <!-- CSS -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../css/Template/style-contact.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/LOGO.png" type="image/x-icon">
</head>

<body class="hidden">
    
    <!-- Preloader -->
        <div class="cont-preloader" id="onload">
            <div class="lds-ripple">
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
    <!-- End Preloader -->
    <!--NavBar-->
    <header>
        <div class="container">
            <nav class="menu">
                <div class="menu-icons">
                    <i class="icon ion-md-menu"></i>
                    <i class="icon ion-md-close"></i>
                </div>
                <a href="https://icterraquantum.com/" class="logo">
                    <img src="../img/LOGO.png" alt="icterraquantum - IC Terraquantum - lotes - parcelas - apartamentos - fincas - 
                    lotes en venta medellin - apartamentos en arriendo medellin - 
                    fincas en alquiler medellin - fincas medellin -apartamentos medellin - lotes medellin">
                </a>
                <ul class="nav-list">
                    <li>
                        <a href="About-us.html">¿Quiénes Somos?</a>
                    </li>
                    <li>
                        <a href="https://icterraquantum.com/Pages/Projects/Projects.html">Proyectos
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="menu-projects">
                            <li>
                                <a href="Projects/Lotes.html">LOTES</a>
                            </li>
                            <!--<li>
                                <a href="Projects/Fincas.html">FINCAS</a>
                            </li>-->
                            <li>
                                <a href="Projects/Apartamentos.html">APARTAMENTOS</a>
                            </li>
                            <!--<li>
                                <a href="Projects/Colaboraciones.html">COLABORACIONES</a>
                            </li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="Services/Services.html">Servicios
                            <!-- <i class="icon ion-md-arrow-dropdown"></i> -->
                        </a>
                        <!-- <ul class="menu-services">
                            <li>
                                <a href="Services/Services1.html">ARQUITECTURA Y DISEÑO</a>
                            </li>
                            <li>
                                <a href="Services/Services2.html">INGENIERÍA Y CONTRUCCIÓN</a>
                            </li>
                            <li>
                                <a href="Services/Services3.html">CONSULTORÍAS Y ASESORÍAS</a>
                            </li>
                            <li>
                                <a href="Services/Services4.html">ESTRUCTURACIÓN DE PROYECTOS</a>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="Contact.php">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--End nav-->

    <!--Welcome-->
    <section class="Welcome" style="
            width: 100%;
            height: 100vh;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.5)),
            url(../img/Contact.jpg) center no-repeat;
            background-size: cover;
            background-position: center;
        ">
        <div class="text">
            <h1>Contactanos</h1>
            <h2>"CONECTA CON LA TRANQUILIDAD QUE SIEMPRE HAS SOÑADO"</h2>
        </div>
    </section>
    <div class="wave">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 110%; width: 100%;">
            <path d="M-0.27,1.50 C153.78,51.81 325.90,49.84 500.27,2.48 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: rgb(245, 235, 216, 0.4);"></path>
        </svg>
    </div>
    <!-- End Welcome -->
    
    <!-- Contacto -->

    <div class="cont-contacto">
        <h1 class="title-contacto">Contactanos <i class="fas fa-id-card"></i></h1>

        <div class="contacto-wrapper">
            <div class="contacto-form">
                <form method="POST" action="">
                    <p>
                        <label for="Nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required pattern="[A-Za-z ]{5,}" title="El Nombre debe tener entre 5 o mas caracteres y contener solo letras.">
                    </p>

                    <p>
                        <label>Correo</label>
                        <input type="email" id="correo" name="correo" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="El correo debe cumplir la siguiente estructura: example@example.com o example@example.com.co">
                    </p>

                    <p>
                        <label>Telefono</label>
                        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10,}" title="Debe tener entre 10 o mas numero y solo se permiten Numeros sin espacios.">
                    </p>

                    <p>
                        <label>Asunto</label>
                        <input type="text" id="asunto" name="asunto" required pattern="[A-Za-z ]{5,}" title="El Asunto debe tener entre 5 o caracteres y contener solo letras.">
                    </p>

                    <p class="block">
                        <label>Mensaje</label>
                        <textarea name="mensaje" id="mensaje" rows="3" required pattern="[A-Za-z ]{10,}" title="El Mensaje debe tener entre 10 o mas caracteres y contener solo letras."></textarea>
                    </p>

                    <p class="block">
                        <button class="btn-contacto" type="submit" name="enviar">
                            Enviar
                        </button>
                    </p>
                    
                    <p class="block">
                        <label class="msg-confirmacion">
                            <?php
                                echo $confirmacion;
                            ?>
                        </label>
                    </p>
                    
                </form>
            </div>
            <div class="contacto-info">
                <h4>Mas informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i><a
                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1781787130258!2d-75.5875160852307!3d6.240232595483003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429af8e7cf699%3A0x5dd15ebd3abd0d12!2sCl.%2034B%20%23%2365D-02%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1639713042557!5m2!1ses-419!2sco"
                            target="blank">Calle 34B #65D - 02 Oficina 401, Medellín, Colombia, 050030.</a></li>
                    <li><i class="fas fa-phone"></i>+57 (604) 520 8859</li>
                    <li><i class="fab fa-whatsapp"></i>+57 317 094 9681</li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@icterraquantum.com"
                            target="blank">info@icterraquantum.com</a></li>
                </ul>
                <p>
                Empresa de construcción, diseño e interventoría de toda clase de obras civiles privadas y publicas. Bienes Raíces
                </p>
                <h4>IC Terraquantum</h4>
            </div>
        </div>
    </div>

    <!-- End Contacto -->

    <!-- Google Maps -->

    <div class="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1781787130258!2d-75.5875160852307!3d6.240232595483003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429af8e7cf699%3A0x5dd15ebd3abd0d12!2sCl.%2034B%20%23%2365D-02%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1639713042557!5m2!1ses-419!2sco"
            allowfullscreen="" loading="lazy" class="google-map">
        </iframe>
    </div>

    <!-- End Google Maps -->

    <!-- Button Up -->

    <div class="button-up" id="button-up">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- End Button Up -->
    
    <!-- Footer -->

    <div class="wave-footer">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 110%; width: 100%;">
            <path d="M0.00,49.98 C150.39,93.27 283.57,4.47 500.00,49.98 L500.00,0.00 L0.00,0.00 Z"
                style="stroke: none; fill: rgb(245, 235, 216);"></path>
        </svg>
    </div>

    <footer class="footer">
        <div class="contfooter">
            <div class="rowfooter">
                <div class="footer-col">
                    <h4>Home</h4>
                    <ul>
                        <li><a href="https://icterraquantum.com/">Inicio</a></li>
                        <li><a href="About-us.html">¿Quienes Somos?</a></li>
                        <li><a href="Projects/Projects.html">Proyectos</a></li>
                        <li><a href="Services/Services.html">Servicios</a></li>
                        <li><a href="Contact.php">Contactanos</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <ul>
                        <li><a href="mailto:info@icterraquantum.co">info@icterraquantum.com</a></li>
                        <li><a href="mailto:soporte@icterraquantum.com">soporte@icterraquantum.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Ubicación</h4>
                    <ul>
                        <li><a href="https://goo.gl/maps/4zV37nsMjCZRpzfh7" target="blank">Calle 34B #65D - 02 Oficina 401, Medellín, Colombia, 050030.</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Síguenos</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/icterraquantum" target="blank"><img src="../img/iconos/facebook.png" alt=""></a>
                        <a href="https://www.instagram.com/icterraquantum" target="blank"><img src="../img/iconos/instagram.png" alt=""></a>
                        <a href="https://api.whatsapp.com/send?phone=573170949681&text=Hola, me gustaría tener mas información de los proyectos de IC Terraquantum." target="blank"><img src="../img/iconos/whatsapp.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCJdMdzeVNSyWjm6jM5FNIuQ" target="blank"><img src="../img/iconos/youtube.png" alt=""></a>
                        <a href="https://www.tiktok.com/@icterraquantum?lang=es" target="blank"><img src="../img/iconos/tiktok.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copy">
        <small>&copy; 2021 <b>IC TERRAQUANTUM</b> - Todos Los Derechos Reservados.</small>
    </div>

    <!-- End Footer -->

    <script src="../js/jscripts.js"></script>
    <script src="https://kit.fontawesome.com/30cbde42ad.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //Preloader

        window.onload = function(){
        $('#onload').fadeOut();
        $('body').removeClass('hidden');
        }

        // End Preloader
    </script>
</body>

</html>