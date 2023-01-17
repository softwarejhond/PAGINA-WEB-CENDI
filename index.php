<!DOCTYPE html>
<html lang="es">

<?php include 'head.php'; ?>

<body>

    <!-- Pagina de logeo -->

    <!-- Seccion de encabezado inicia-->
    <?php include 'header.php';?>
    <!-- Seccion de encabezado finaliza-->
    <br><br>

    <!-- Menu encabezado inicia -->
    <?php include 'navbar.php';?>
    <!-- Menu encabezado finaliza-->


    <!-- Inicio del carrusel de imagenes-->
    <section class="hero-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/carrusel/2023Web.gif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/5.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/6.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/7.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/8.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/9.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/10.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/11.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/12.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- finaliza el carrusel de imagenes -->

    <div class="icon-bar">
        <a href="https://es-la.facebook.com/InstitutoCENDI/" target="_blank" class="facebook"><i
                class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/cendi.medellin/?hl=es-la" target="_blank" class="instagram"><i
                class="fa fa-instagram"></i></a>
        <a href="https://wa.me/573128785556?text=Me%20gustaría%20saber%20sobre%20algún%20programa" target="_blank"
            class="whhatsapp"><i class="fa fa-whatsapp"></i></a>


    </div>

    <!-- Counter section  -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="big-icon">
                        <i class="fa fa-graduation-cap" style="color: red;"></i>
                    </div>
                    <div class="counter-content">
                        <h2>MATRICÚLATE AHORA Y ENTRA AL MUNDO LABORAL</h2>
                        <p><i class="fa fa-star" style="color: red;"></i>Cendi te prepara para la cuarta revolución
                            industrial</p>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/InstitutoCENDI/" data-width="380"
                        data-hide-cover="false" data-show-facepile="false"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->


    <!-- Seccion de servicio -->
    <section class="service-section spad" id="programas">
        <div class="container services">
            <div class="section-title text-center">
                <h3>NUESTROS PROGRAMAS</h3>
                <br>
            </div>
            <div class="row">

                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/contable.svg" alt="Contador">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Auxiliar contable</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarContable.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/administrador.svg" alt="administración">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Auxiliar Administrativo</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarAdm.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/secretario.svg" alt="Salud">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral en Secretaria(o) Médica (o)</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarMedico.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/secretaria.svg" alt="Salud">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Secretaria General</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarSecretariado.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/Rhumanos.svg" alt="Salud">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Auxiliar en Recursos Humanos</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarRecursoHumanos.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/farmaceutico.svg" alt="Salud">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral Auxiliar en Servicios Farmacéuticos</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarFarmaceutico.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/salud.svg" alt="Salud">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral Auxiliar Administrativo en Salud</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarSalud.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/cliente.svg" alt="Salud">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo</h4>
                        <p style="text-align: justify;"> ¡Consulta por más información ahora!</p>
                        <a href="auxiliarServicioCliente.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/computer.svg" alt="sistemas">
                    </div>
                    <div class="service-content">
                        <h4>Técnico laboral como auxiliar de sistemas informáticos </h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="auxiliarSistemas.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/recepcionista.svg" alt="receocionista">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Empleado de Recepción Hotelera</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="recepcionhotelera.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/desarrollador-de-software.svg" alt="Software">
                    </div>
                    <div class="service-content">
                        <h4>Técnico Laboral como Asistente en Desarrollo de Software</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="desarrolloSoftware.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/icons/ingles.svg" alt="ingles">
                    </div>
                    <div class="service-content">
                        <h4>Conocimientos Académicos en inglés</h4>
                        <p style="text-align: justify;">¡Consulta por más información ahora!</p>
                        <a href="ingles.php" class="event-readmore" title="Dar click">VER MÁS <i
                                class="fa fa-angle-double-right" style="color: red;"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services section end -->


    <!-- seccion de plataformas incia  -->
    <section class="enroll-section spad set-bg" data-setbg="img/sliders/bannerBachillerato.png">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="section-title text-white">
                        <br>
                        <h3 style="text-align: center;">PLATAFORMA Q10 PARA BACHILLERATO</h3>
                        <p style="text-align: center;">Entérate de todo lo que te puede ofrecer</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span style="color: red;">1</span>
                            <h5>Acceso plataforma Q10</h5>
                            <a href="http://corporacioncendi.q10academico.com/" style="cursor: pointer;"><button
                                    type="button" class="btn btn-danger">Ingresar ahora</button></a>
                        </div>
                        <div class="enroll-list-item">
                            <span style="color: red;">2</span>
                            <h5>Pre_inscripciones - Colegio</h5>
                            <a href="https://site2.q10.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9"
                                style="cursor: pointer;"><button type="button" class="btn btn-danger">Ingresar
                                    ahora</button></a>
                        </div>
                        <div class="enroll-list-item">
                            <span style="color: red;">3</span>
                            <h5>Ofertas Laborales - Colegio</h5>
                            <a href="https://site2.q10.com/Ofertalaboral/Crear?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9"
                                style="cursor: pointer;"><button type="button" class="btn btn-danger">Ingresar
                                    ahora</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title text-white">
                        <br>
                        <h3 style="text-align: center;">PLATAFORMA Q10 PARA <br>TÉCNICOS</h3>
                        <p style="text-align: center;">Entérate de todo lo que te puede ofrecer</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span style="color: red;">1</span>
                            <h5>Acceso plataforma Q10 técnicos</h5>
                            <a href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
                                style="cursor: pointer;"><button type="button" class="btn btn-info">Ingresar
                                    ahora</button></a>
                        </div>
                        <div class="enroll-list-item">
                            <span style="color: red;">2</span>
                            <h5>Pre_inscripciones - técnicos</h5>
                            <a href="https://site3.q10.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
                                style="cursor: pointer;"><button type="button" class="btn btn-info">Ingresar
                                    ahora</button></a>
                        </div>
                        <div class="enroll-list-item">
                            <span style="color: red;">3</span>
                            <h5>Ofertas Laborales - técnicos</h5>
                            <a href="https://site3.q10.com/Ofertalaboral/Crear?aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
                                style="cursor: pointer;"><button type="button" class="btn btn-info">Ingresar
                                    ahora</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- seccion de plataformas termina  -->


    <!-- seccion de material de apoyo inicia -->
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>FORMATOS VIRTUALES DE APOYO PARA NUESTROS ESTUDIANTES</h3>
                <p>Podrás descargar ahora los formatos y trabajarlos desde tu casa</p>
                <br>
                <br>
                <div class="row" style="text-align: center;">
                    <div class="col-lg-3" style="padding:0.5%;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/sliders/practicas.jpg" alt="Practicas">
                            <div class="card-body">
                                <h5 class="card-title">CONTROL DE HORAS DE PRÁCTICA EMPRESARIAL</h5>
                                <p class="card-text">Formato para técnicos</p>
                                <BR>
                                <a href="DOCS/formatos/FO73 CONTROL DE HORAS DE PRACTICAS EMPRESARIAL.pdf"
                                    class="btn btn-primary"><i class="fa fa-download"></i> DESCARGAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:0.5%;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/sliders/alfabetizacion.jpg" alt="alfabetización">
                            <div class="card-body">
                                <h5 class="card-title">FORMATO DE ALFABETIZACIÓN </h5>
                                <p class="card-text">Formato para bachillerato</p>
                                <br>
                                <a href="DOCS/formatos/alfabetizacion 2020.docx" class="btn btn-primary"><i
                                        class="fa fa-download"></i> DESCARGAR</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:0.5%;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/sliders/ley.png" alt="ley">
                            <div class="card-body">
                                <h5 class="card-title">FORMATO PARA CUMPLIR LAS 50 HORAS CONSTITUCIONALES</h5>
                                <p class="card-text">Formato para bachillerato</p>
                                <a href="DOCS/formatos/constitucion politica de colombia 2020.docx"
                                    class="btn btn-primary"><i class="fa fa-download"></i> DESCARGAR</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:0.5%;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/sliders/notas.png" alt="Notas">
                            <div class="card-body">
                                <h5 class="card-title">FORMATO DE NIVELACIÓN DE NOTAS</h5>
                                <p class="card-text">Formato para bachillerato</p>
                                <br>
                                <a href="DOCS/formatos/NIVELACIÓN NOTAS.pdf" class="btn btn-primary"><i
                                        class="fa fa-download"></i> DESCARGAR</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:0.5%;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/sliders/excusa.jpg" alt="excusa">
                            <div class="card-body">
                                <h5 class="card-title">FORMATO DE EXCUSA POR NO ASISTIR A CLASE</h5>
                                <p class="card-text">Formato para bachillerato</p>
                                <br>
                                <a href="DOCS/formatos/EXCUSA.pdf" class="btn btn-primary"><i
                                        class="fa fa-download"></i> DESCARGAR</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion de material de apoyo termina -->
    <!-- Seccion de contadores inicias -->
    <section class="fact-section spad set-bg" data-setbg="img/sliders/bachilleres.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 fact">

                    <div class="fact-text" style="text-align: center;">
                        <img src="img/icons/peatonal.svg" width="50%">
                        <h1 style="color: white;">Bachillerato Privado</h1>
                        <p style="text-align: center;">y</p>
                        <h3 style="text-align: center;color: white;">Matrícula totalmente gratis</h3>>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Seccion de contadores finalizan-->
    <br>

    <!-- Seccion de contadores inicias -->
    <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-2 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>34</h2>
                        <p>AÑOS</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>25+</h2>
                        <p>DOCENTES</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>10.000+</h2>
                        <p>BACHILLERES</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>4.146</h2>
                        <p>TÉCNICOS</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>12+</h2>
                        <p>PROGRAMAS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seccion de contadores finalizan-->


    <!-- seccion de pre inscripciones inicia -->
    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>PRE-INSCRIPCIONES</h3>
                <p>CENDI te da una calurosa bienvenida, gracias por contar con nosotros</p>
            </div>
            <div class="row">
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/sliders/tecnicos.jpg" alt="tecnicos" t>
                        <div class="event-date">
                            <span>PRE-INSCRIPCIONES TÉCNICOS</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>Preparate que grandes retos vendrán ahora que elegiste tu ocupación</h4>

                        <a href="" class="event-readmore" data-toggle="modal" data-target="#preTec"
                            title="Dar click">PREINSCRIBIR AHORA<i class="fa fa-angle-double-right"
                                style="color: red;"></i></a>
                    </div>
                </div>
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/sliders/bachilleres.jpg" alt="bachilleres">
                        <div class="event-date">
                            <span>PRE-INSCRIPCIONES BACHILLERATO</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>Disfruta de una educación integral, esta te llevará
                            al éxito con la profesión que elijas
                        </h4>

                        <a href="" class="event-readmore" data-toggle="modal" data-target="#preBach"
                            title="Dar click">PREINSCRIBIR AHORA<i class="fa fa-angle-double-right"
                                style="color: red;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion de preinscrepciones termina-->
    <!-- Seccion de mapa inicias -->
    <section class="fact-section spad set-bg" data-setbg="img/sliders/mapa.png">
        <div class="container" style="text-align: center;">
            <h2 style="text-align: center;color: white;">NUESTROS CENTROS EDUCATIVOS EN TIEMPO REAL</h2>
            <br><br>
            <div class="row">

                <iframe src="https://www.google.com/maps/d/u/2/embed?mid=1w1eUxDI3FXVEiw1C8KL22zzbn4Y0GQ8V" width="100%"
                    height="480"></iframe>

            </div>
        </div>
    </section>
    <!-- Seccion de mapa finalizan-->

    <!-- Seccion de convenios inicia-->
    <section class="team-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>NUESTROS CONVENIOS</h3>

            </div>
            <div class="row" style="text-align: center;">
                <div class="col-md-6 col-lg-3">
                    <div class="member"><img src="img/icons/celac-adm.png" alt="celac" width="150">

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/logo-sena.png" alt="sena" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/Min.png" alt="min" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/Secedu.png" alt="secedu" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/Q10.png" alt="q10" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/Mega.png" alt="mega" width="100%" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/mejores.png" alt="mejores" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/lineaVital.png" alt="Droguería Linea Vital" width="150">

                        </div>
                    </div>
                </div>
				<div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/domina.png" alt="Domina" width="150">

                        </div>
                    </div>
                </div>
				<div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/clinica.png" alt="Fundación Clinica del Norte" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/dropopular.png" alt="DROPOPULAR" width="200">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/coe.png" alt="Coe" width="150">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="member">
                        <div class="member"><img src="img/icons/belleza.png" alt="Has Belleza" width="150px">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Seccion de convenios finaliza-->

    <!-- Footer section -->
    <?php include 'footer.php'; ?>
    <!-- Footer section end-->



    <!-- inicia front end del login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión administrativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form style="text-align: center;">
                        <div class="form-group" style="text-align: left;">
                            <label for="exampleInputEmail1">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Ingresar correo">
                            <small id="emailHelp" class="form-text text-muted">Ingresa el correo electrónico asignado
                                por la administración del sistema.</small>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Contraseña">
                        </div>

                        <button class="btn btn-success">Ingresar</button>
                        <button class="btn btn-danger">Cancelar</button>
                        <br>
                        <br>
                        <li class="fa fa-lock"></li><a href="#"
                            title="Ingresa el correo electrónicos y luego haz click aquí"> Olvide mi contraseña</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="pieLogin">Si presenta problemas para iniciar o restablecer
                        contraseña, comunicate con JD Developer.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- termina front end del login -->
    <div class="botones-flotantes">
        <a href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
            target="_blank"><i class="fas fa-tachometer-alt"
                style="font-size: 30px; float: left; padding-right: 10px;"></i> Q10 PARA TÉCNICOS</a>
        <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9"
            target="_blank"><i class="fas fa-tachometer-alt"
                style="font-size: 30px; float: left; padding-right: 10px;"></i> Q10 PARA BACHILLERATO</a>
        <a href="https://cendi.kurve.digital/" target="_blank"><i class="fas fa-rocket"
                style="font-size: 30px; float: left; padding-right: 10px;"></i> CAMPUS VIRTUAL</a>
        <a href="https://moodle.cendi.fundacionview.org/" target="_blank"><i class="fa fa-android"
                style="font-size: 30px; float: left; padding-right: 10px;"></i> APLICACIONES WEB Y ANDROID</a>

        <a href="#" data-toggle="modal" data-target="#pqrsModal"><i class="fa fa-question-circle"
                style="font-size: 30px; float: left; padding-right: 10px;"></i> PQRS</a>


    </div>
    <!-- inicia preinscripcion tecnicos -->
    <div class="modal fade bd-example-modal-lg" id="preTec" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de inscripción para técnicos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <iframe
                            src="http://www.q10academico.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
                            class="preInscripcioes" frameborder="0" marginwidth="0" marginheight="0" data-width="100%"
                            data-height="auto" unselectable="on"></iframe>

                    </div>
                </div>
                <div class="modal-footer">
                    <p class="pieInscipciones">
                        <a
                            href="http://www.q10academico.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936">
                            <li class="fa fa-search-plus" style="color: white;">
                            </li>
                            Ampliar pantalla de inscripción
                        </a>
                    </p>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- termina preinscripcion tecnicos -->

    <!-- inicia preinscripcion bachiller -->
    <div class="modal fade bd-example-modal-lg" id="preBach" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de inscripción para bachillerato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <iframe
                            src="https://www.q10academico.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9"
                            class="preInscripcioes" frameborder="0" marginwidth="0" marginheight="0" data-width="100%"
                            data-height="1080" unselectable="on"></iframe>
                    </div>
                </div>
                <div class="modal-footer">

                    <div class="pieInscipciones"><a
                            href="https://www.q10academico.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9">
                            <li class="fa fa-search-plus" style="color: white;"></li> Ampliar pantalla de inscripción
                        </a>
                    </div>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- termina preinscripcion bachiller -->

    <!-- inicia ventana emergente -->

    <div class="text-center">
        <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="text-align: center;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-exclamation"></i> LEER CON
                            ATENCIÓN<i class="fa fa-exclamation"></i> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            title="Cerrar"></button>
                        <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="https://moodle.cendi.fundacionview.org" target="_blank"><img
                                            src="img/icons/webAndroid.png" alt="Botón Q10 para bachillerato"
                                            width="100%" title="Ingresar al Q10 para estudiantes de bachillerato"></a>
                                    <br>
                                    <br>

                                </div>

                                <div class="col-lg-12">

                                    <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9"
                                        target="_blank"><img src="img/icons/bachillerQ10.png"
                                            alt="Botón Q10 para bachillerato" width="25%"
                                            title="Ingresar al Q10 para estudiantes de bachillerato"></a>
                                    <a href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936"
                                        target="_blank"><img src="img/icons/tecnicosQ10.png"
                                            alt="Botón Q10 para bachillerato" width="25%;"
                                            title="Ingresar al Q10 para estudiantes de programas técnicos"></a>
                                    <a href="https://cendi.kurve.digital/" target="_blank"><img
                                            src="img/icons/campus.png" alt="Ingreso Kurve" width="25%;"
                                            title="Ingresar al Moodle programa talento especializado"></a>

                                </div>

                            </div>
                        </div>
                        <div class="container">

                            <div class="modal-footer">
                                <h5 style="color: white;text-align: center;">INFORMACIÓN IMPORTANTE</h5>
                            </div>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <div class="modal fade bd-example-modal-lg" id="info" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="text-align: center; max-width: 1140px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-exclamation"></i> Matrículas
                            abiertas
                            <i class="fa fa-exclamation"></i>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            title="Cerrar"></button>
                        <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="img/modals/cursos.jpg" alt="cursos" width="50%" class="miniature">

                                    <br>
                                    <br>
                                    <a href="https://inscripciones.medellindigital.gov.co/convocatorias/formulario.php?token=01YpblQcTS.OQ"
                                        class="btn btn-success" target="_blank">REGÍSTRATE AHORA</a>
                                    <br>
                                    <br>
                                </div>


                            </div>
                        </div>
                        <div class="container">

                            <div class="modal-footer">
                                <h5 style="color: white;text-align: center;">Matrículas abiertas</h5>
                            </div>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="pqrsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sistema de PQRS de Cendi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        <div class="form-group">
                            <label for="codigo">Radicado de la PQRS</label>
                            <input type="text" class="form-control" name="codigo" id="codigo">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de solicitud</label>
                            <select class="custom-select" id="inputGroupSelect01" name="tipo">
                                <option selected>Seleccionar...</option>
                                <option value="Pregunta">Pregunta</option>
                                <option value="Queja">Queja</option>
                                <option value="Reclamo">Reclamo</option>
                                <option value="Solicitud">Solicitud</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="tipoId">Tipo de identificación</label>
                            <select class="custom-select" name="tipoId" id="inputGroupSelect01" name="tipo">
                                <option selected>Seleccionar...</option>
                                <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="numId">Número de identificación</label>
                            <input type="number" class="form-control" name="numId" id="numId">
                        </div>
                        <div class="form-group">
                            <label for="clasification">Clasificación del solicitante:</label>
                            <select class="custom-select" id="inputGroupSelect01" name="clasification">
                                <option selected>Seleccionar...</option>
                                <option value="Estudiante activo">Estudiante activo</option>
                                <option value="Estudiante retirado">Estudiante retirado</option>
                                <option value="Egresado">Egresado</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="medio">Medio donde quiero que me respondan: </label>
                            <select class="custom-select" id="inputGroupSelect01" name="medio">
                                <option selected>Seleccionar...</option>
                                <option value="Estudiante activo">Correo electrónico</option>
                                <option value="Estudiante retirado">Teléfono</option>
                                <option value="Egresado">WhatsApp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tecnology">Dirección de respuesta: </label>
                            <input type="text" class="form-control" name="tecnology" id="tecnology">
                        </div>
                        <div class="form-group">
                            <label for="phone">Número de teléfono:</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción de la solicitud: </label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>

                        <input type="submit" id="pqrs" class="btn btn-success" value="Enviar PQRS">
                    </form>
                    <script type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                    <script type="text/javascript">
                    emailjs.init('Z907Sa54JE3JSg7Ek')
                    </script>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- termina ventana emergente  -->
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function() {
        $("#").modal();
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#info").modal();
    });
    </script>

    <!--SCRIPT PARA ENVIAR PQRS-->


    <script>
    const btn = document.getElementById('pqrs');

    document.getElementById('form')
        .addEventListener('submit', function(event) {
            event.preventDefault();

            btn.value = 'Enviando...';

            const serviceID = 'default_service';
            const templateID = 'template_jtarnyl';

            emailjs.sendForm(serviceID, templateID, this)
                .then(() => {
                    btn.value = 'Enviar PQRS';
                    alert('PQRS REGISTRADA CORRECTAMENTE GRACIAS!');
                }, (err) => {
                    btn.value = 'Enviar PQRS';
                    alert(JSON.stringify(err));
                });
        });
    </script>
<!--GENERADOR DE CODIGO PARA EL RADICADO-->
<script>   
function rand_code(chars, lon) {
                            code = "";
                            for (x = 0; x < lon; x++) {
                                rand = Math.floor(Math.random() * chars.length);
                                code += chars.substr(rand, 1);
                            }
                            return code;
                        }
                        caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.";
                        longitud = 8;
document.getElementById('codigo').value = rand_code(caracteres, longitud);
                       
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>