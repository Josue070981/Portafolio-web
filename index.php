<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
    <!-- cdn font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- estilos -->
    <link rel="stylesheet" href="css/style.css">
    <!-- titulo -->
    <title>alejanpublic - Portafolio</title>
    <!-- icono favicon -->
    <link rel="icon" type="image/x-icon" href="icon/code-solid.svg">
    <!-- Open Graph data -->
    <meta property="og:title" content="alejanpublic-dev" />
    <meta property="og:type" content="Portafolio" />
    <meta property="og:url" content="https://alejanpublic.github.io/Portafolio-Beta/" />
    <meta property="og:image" content="img/img-graph.jpg" />
    <meta property="og:description" content="Portafolio - alejanpublic" />
</head>
<body>
    <!-- SECCION INICIO -->
    <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <h1>JA</h1>
                    <nav id="nav" class="">
                        <ul id="links">
                            <li><a href="#inicio" class="seleccionando" onclick="seleccionar(this)">INICIO</a></li>
                            <li><a href="#sobremi">SOBRE MI</a></li>
                            <li><a href="#servicios">SERVICIOS</a></li>
                            <li><a href="#portafolio">PORTAFOLIO</a></li>
                            <li><a href="#contacto">CONTACTO</a></li>
                        </ul>
                    </nav>

                    <!-- Iconos del menu responsive -->
                    <div id="icon-nav" onclick="responsiveMenu()" class="blanco">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <!-- Iconos de las redes sociales -->
                    <div class="redes">
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://web.facebook.com/josue.ccoscco?locale=es_LA"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/josue070971/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </header>
            <div class="presentacion">
                <p class="bienvenida">Bienvenidos</p>
                <h2>Soy <span>Josue Alexander Quispe</span>, futuro Desarrollador Front-end</h2>
                <p class="descripcion">Reconozco que el desarrollo de páginas web es una disciplina en constante evolución, 
                    donde la habilidad para combinar diseño visual y funcionalidad es clave. Estoy comprometido a adquirir las habilidades necesarias para construir sitios web intuitivos, 
                    atractivos y funcionales que proporcionen experiencias excepcionales a los usuarios.</p>
                    <a href="#portafolio">Ir a Portafolio</a>
            </div>
        </div>
    </section>

    
    <!-- Seccion Sobre MI  -->
    <section id="sobremi">
        <div class="contenedor-foto">
            <img src="img/img-6.jpeg" alt="">
        </div>
        <div class="sobremi">
            <p class="titulo-seccion">Sobre Mi</p>
            <h2>Hola, soy <span>Josue Alexander Quispe Ccoscco</span></h2>
            <h3>Futuro Desarrollador Front-End</h3>
            <p>Mi nombre es Josué Alexander y estoy decidido a forjar mi camino como desarrollador de páginas web de primera categoría. 
                Desde que descubrí el potencial creativo y técnico de la creación web, 
                me he sentido inspirado a sumergirme en este emocionante campo.</p>

    
            <a href="#">Descargar CV</a>
            
        </div>

        
    </section>

    <!-- SECCION SERVICIOS -->
    <section id="servicios">
        <h3 class="titulo-seccion">Mis Servicios</h3>
        <!-- comienza fila -->
        <div class="fila">
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Diseño de Sitio Web</h4>
                <hr>
                <ul class="servicios-tag">
                </ul>
                <p>Creación de sitios web a medida según las necesidades específicas del cliente, utilizando tecnologías como HTML, CSS, JavaScript</p>
            </div>
            <!-- aca divide servicios -->
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Optimizacion de experiencia de usuario</h4>
                <hr>
                <ul class="servicios-tag">
                </ul>
                <p>Mejora de la experiencia del usuario en el sitio web, asegurando que la navegación sea intuitiva,
                     los tiempos de carga sean rápidos y el diseño sea atractivo y funcional.</p>
            </div>
            <!-- aca divide servicios -->
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Mantenimiento y soporte tecnico</h4>
                <hr>
                <ul class="servicios-tag">
                </ul>
                <p>Ofrecer servicios de mantenimiento regular para asegurar que el sitio web esté actualizado, seguro y funcione sin problemas.
                     Esto puede incluir actualizaciones de software.</p>
            </div>
        </div>
        <!-- aca divide la fila -->
        <div class="fila">
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Optimizacion para motores de busqueda</h4>
                <hr>
                <ul class="servicios-tag">
                </ul>
                <p>Implementación de técnicas de SEO para mejorar el ranking del sitio web en los motores de búsqueda, lo que aumenta la visibilidad y el tráfico orgánico.</p>
            </div>
            <!-- aca divide servicios -->
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Consultoria y Asesoramiento</h4>
                <hr>
                <ul class="servicios-tag">
                </ul>
                <p>Brindar orientación y asesoramiento técnico a empresas o individuos que buscan desarrollar una presencia en línea, 
                    desde la planificación inicial hasta la implementación y más allá.</p>
            </div>
            <!-- aca divide servicios  -->
            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-code"></i></span>
                <h4>Seguridad Web</h4>
                <hr>
                <ul class="servicios-tag">
                </ul>
                <p>Implementación de medidas de seguridad para proteger el sitio web contra vulnerabilidades y ataques cibernéticos.</p>
            </div>
        </div>
        <!-- termina fila  -->
    </section>

    <!-- SECCION SKILL HABILIDADES -->
    <div class="contenedor-skills" id="skills">
        <h3>Habilidades</h3>
        <!-- html -->
        <div class="skill">
            <div class="info">
                <p><span class="Lista"></span>Html & Css</p>
                <span class="porcentaje">45%</span>
            </div>
            <div class="barra">
                <div id="html" class="barra-progreso1"></div>
            </div>
        </div>

        <!-- javascript -->

        <div class="skill">
            <div class="info">
                <p><span class="Lista"></span>JavaScript</p>
                <span class="porcentaje">20%</span>
            </div>
            <div class="barra">
                <div id="js" class=""></div>
            </div>
        </div>

        <!-- base de dato  -->

        <div class="skill">
            <div class="info">
                <p><span class="Lista"></span>Base de Datos</p>
                <span class="porcentaje">18%</span>
            </div>
            <div class="barra">
                <div id="bd" class=""></div>
            </div>
        </div>

        <!-- photoshop -->

        <div class="skill">
            <div class="info">
                <p><span class="Lista"></span>Diseño</p>
                <span class="porcentaje">22%</span>
            </div>
            <div class="barra">
                <div id="ps" class=""></div>
            </div>
        </div>


    </div>

    <!-- SECCION PROTAFOLIO -->
    <section id="portafolio">
        <h3 class="titulo-seccion">Mis proyectos personales</h3>
        <div class="fila">
            <!-- proyecto 1 -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto1.jpg" alt="">
                <div class="info">
                    <p>Diseño Web</p>
                </div>
            </div>

            <!-- proyecto 2 -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto2.jpg" alt="">
                <div class="info">
                    <p>Diseño personalizado</p>
                </div>
            </div>

            <!-- proyecto 3 -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto3.jpg" alt="">
                <div class="info">
                    <p>Creacion de pagina web para analisis estadisticos</p>
                </div>
            </div>
        </div>
            <!-- proyecto 4 -->
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto4.jpg" alt="">
                <div class="info">
                    <p>Creacion de pagina web para informacion de etiquetas en html y CSS</p>
                </div>
            </div>

            <!-- proyecto 5 -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto5.jpg" alt="">
                <div class="info">
                    <p>Diseño Web para empresas</p>
                </div>
            </div>

            <!-- proyecto 6 -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto6.jpg" alt="">
                <div class="info">
                    <p>Diseño Web para dispositivos moviles</p>
                </div>
            </div>
        </div>
            <!-- proyecto 7 -->
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto7.jpg" alt="">
                <div class="info">
                    <p>Desarrollo de pagina web con transiciones</p>
                </div>
            </div>

            <!-- proyecto 8 -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto8.jpg" alt="">
                <div class="info">
                    <p>Desarrollo de paginaw web con base de datos</p>
                </div>
            </div>

            <!-- proyecto 9  -->
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto9.jpg" alt="">
                <div class="info">
                    <p>Desarrollo de pagina usando plantillas de html</p>
                </div>
            </div>
        </div>
            <!-- termina proyectos  -->
        
    </section>

    <!-- SECCION CONTACTO -->
    <section id="contacto">
        <h3 class="titulo-seccion">Contactanos ahora</h3>
        <div class="contenedor-form">
            <form action="process_form.php" method="post">
                <div class="fila mitad">
                    <input type="text" name="nombre_completo" placeholder="Nombre Completo *" class="input-mitad" required>
                    <input type="email" name="gmail" placeholder="Dirección de Email" class="input-mitad" required>
                </div>
                <div class="fila">
                    <input type="text" name="tema" placeholder="Tema..." class="input-full" required>
                </div>
                <div class="fila">
                    <textarea name="mensaje" cols="30" rows="10" placeholder="Tu Mensaje..." class="input-full" required></textarea>
                </div>

                <input type="submit" value="Enviar Mensaje" class="btn-enviar">
            </form>
        </div>
    </section>

    <!-- SECCION FOOTER -->
    <footer>

        <div class="redes">
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://web.facebook.com/josue.ccoscco?locale=es_LA"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/josue070971/"><i class="fa-brands fa-instagram-square"></i></a>
        </div>
    </footer>

    <!-- js -->
    <script src="javscript/main.js"></script>
</body>
</html>
