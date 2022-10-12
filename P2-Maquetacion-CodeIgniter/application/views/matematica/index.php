<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCPN</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imagenes/EscudoFCPN.png">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="Mycontainer">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="imagenes/EscudoFCPN.png" alt="Logo" class="img-responsive">
                </a>
            </div>
    
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?=base_url()?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>informatica">Informatica</a>
                    </li>
                    <li>
                        <a href="#">Matematica</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>fisica">Fisica</a>
                    </li>
                </ul>
            </div>
    
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->



     <!-- Quienes Somos Section Starts Here-->
    <section class="who">
            <div class="Mycontainer">
                
                <div class="slider-frame">
                    <ul>
                        <li><img class="img-responsive img-curve" src="imagenes/frame1.jpg" alt=""></li>
                        <li><img class="img-responsive img-curve" src="imagenes/frame2.jpg" alt=""></li>
                        <li><img class="img-responsive img-curve" src="imagenes/frame3.jpg" alt=""></li>
                        <li><img class="img-responsive img-curve" src="imagenes/frame4.jpg" alt=""></li>

                    </ul>
                </div>
                <div class="concept">
                    <h2 class="text-center">Matematica</h2><br>
                <p>Facultad de Ciencias Puras y Naturales</p><br>
                    <p>Nuestra misión es crear conocimiento y compartirlo entre académicos, investigadores, 
                        estudiantes y profesionales, para luego transferirlo a la sociedad a través de proyectos
                        que atiendan las 
                        necesidades prioritarias del país en los ámbitos social, económico, político y cultural</p><br>
                        <p>La Facultad de Ciencias Puras Naturales tiene las siguientes modalidades de ingreso de 
                            acuerdo a las normativas universitarias: Prueba de suficiencia académica (PSA), 
                            Curso preuniversitario (CPU), Modalidad especial: olimpiadas (local, departamental, 
                            nacional e internacional), mejores estudiantes de municipios, personas con capacidades 
                            especiales. En sus 6 carreras: Biología, Estadística, Física, Informática, Matemática y 
                            Cs. Químicas.</p><br>
                        <p>Actualmente la Facultad de Ciencias Puras y Naturales ofrece 6 
                            programas de Licenciatura: Matemática, Física, Cs. Químicas, 
                            Informática, Estadística y Biología, que promueven la formación 
                            de profesionales de alta calidad, con conocimientos, destrezas y 
                            habilidades que hacen posible su inserción creativa en la sociedad,
                             preparados para impulsar y promover la innovación científica y 
                             tecnológica en el campo de la ciencia y tecnología.</p>
                </div>
                <div class="clearfix"></div>
            </div>
    </section>
    <!--Quienes Somos  Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="Mycontainer text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/tiktok--v1.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="Mycontainer text-center">
            <p>Todos los derechos reservados por <a href="#">FCPN</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>