<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
        
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
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

                
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IC Terraquantum</title>

    <!-- Tipografia -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,700%7COswald:200,400%7COpen+Sans:300,400,600,700,800"
        media="all">
    
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="woocommerce-FlexSlider-690832b/flexslider.css" type="text/css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/LOGO.png" type="image/x-icon">

    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!--NavBar -->
    <header>
        <div class="container">
            <nav class="menu">
                <div class="menu-icons">
                    <i class="icon ion-md-menu"></i>
                    <i class="icon ion-md-close"></i>
                </div>
                <a href="../../index.html" class="logo">
                    <img src="../img/LOGO.png" alt="">
                </a>
                <ul class="nav-list">
                    <li>
                        <a href="About-us.html">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a href="Projects/Projects.html">Proyectos
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="menu-projects">
                            <li>
                                <a href="Projects/Lotes.html">LOTES</a>
                            </li>
                            <li>
                                <a href="Projects/Fincas.html">FINCAS</a>
                            </li>
                            <li>
                                <a href="Projects/Apartamentos.html">Apartamentos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Services/Services.html">Servicios
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="menu-services">
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
                        </ul>
                    </li>
                    <li>
                        <a href="Contact.html">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End nav-->

    <!--Welcome -->
    <section class="Welcome" style="
            width: 100%;
            height: 100vh;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url(../img/About-us.jpg) center no-repeat;
            background-size: cover;
            background-position: center;
        ">
        <div class="text">
            <h1>Tests</h1>
            <h2>Pagina exclusiva de Tests</h2>
        </div>
        <div class="wave">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-16.08,-4.44 C158.86,56.73 328.72,47.86 516.64,-2.45 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(245, 235, 216, 0.4);"></path>
            </svg>
        </div>
    </section>
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
                        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10,}" title="Debe tener entre 10 o mas numero y solo se permiten Numeros.">
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
                                        echo 'Mensaje enviado';
                                    } catch (Exception $e) {
                                        echo "Error al enviar los datos"; // echo "Hubo un error: {$mail->ErrorInfo}";
                                    }
                                }
                            }
                            ?>
                        </label>
                    </p>
                    
                </form>
            </div>
            <div class="contacto-info">
                <h4>Mas informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/place/Cra.+65+%2339-57,+Medell%C3%ADn,+Antioquia/@6.2436734,-75.5855135,17z/data=!3m1!4b1!4m5!3m4!1s0x8e4429af2eace4f3:0xda7cbb5006785ca1!8m2!3d6.243668!4d-75.583324" target="blank">CR 65 # 39-57, Medellín, Colombia, 050030.</a></li>
                    <li><i class="fas fa-phone"></i>+57 317 094 9681</li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@icterraquantum.com" target="blank">info@icterraquantum.com</a></li>
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
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C158.29,109.05 245.77,13.33 501.97,59.72 L500.00,0.00 L0.00,0.00 Z"
                style="stroke: none; fill: rgb(245, 235, 216);"></path>
        </svg>
    </div>

    <footer class="footer">
        <div class="contfooter">
            <div class="rowfooter">
                <div class="footer-col">
                    <h4>lorem</h4>
                    <ul>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>lorem</h4>
                    <ul>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>lorem</h4>
                    <ul>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Siguenos</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copy">
        <small>&copy; 2021 <b>IC TERRAQUANTUM</b> - Todos Los Derechos Reservados.</small>
    </div>

    <!-- End Footer -->

    <script src="jscripts.js"></script>
    <script src="https://kit.fontawesome.com/30cbde42ad.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

</body>

</html>