<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <img src="img/index/banner/banner1.jpg" alt="" class="img-bg">
        <div class="container spacing">
            <h1>
                Seguridad, en un sólo concepto
            </h1>
            <p>
                Nuestra gente es lo mas valioso en nuestra empresa, mas que un equipo,
                somos una familia que trabaja con el compromiso de la calidad.
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <img src="img/index/nosotros/img1.png" alt="" class="img-left vertical-align hidden-xs">
        <div class="container spacing">
            <div id="carousel-nosotros" class="carousel slide vertical-align" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-sm-4 vertical-align">
                            <h3>
                                Visión
                            </h3>
                        </div>
                        <div class="col-sm-8 vertical-align">
                            <p>
                                Ser la empresa lider en seguridad privada, con mayor
                                trayectoria y reconocimiento de nuestros clientes,
                                destacando por la calidad y servicio.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-nosotros" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-nosotros" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* OFRECEMOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="ofrecemos" id="ofrecemos">
        <div class="container spacing">
            <h1>
                Que Ofrecemos
            </h1>
            <div class="col-sm-6">
                <ul type="square">
                    <li><span>Servicio de seguridad integral</span></li>
                    <li><span>Calidad</span></li>
                    <li><span>Conocimiento Técnico</span></li>
                    <li><span>Responsabilidad</span></li>
                    <li><span>Mejores Prácticas</span></li>
                    <li><span>Atención Personalizada</span></li>
                    <li><span>Planes de acción enfocadas en las necesidades del cliente</span></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul type="square">
                    <li><span>Manejo de Información cliente</span></li>
                    <li><span>Linea confidencial</span></li>
                    <li><span>Investigación Privada</span></li>
                    <li><span>Alertas de Seguridad</span></li>
                    <li><span>Expedientes Oficiales</span></li>
                    <li><span>Evaluación de Riesgos</span></li>
                    <li><span>Reportes de incidentes</span></li>
                    <li><span>Reportes de Auditorias</span></li>
                    <li><span>Kardex de Capacitación</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SERVICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicios" id="servicios">
        <img src="img/index/icons/auto.png" alt="" class="img-right hidden-xs">
        <div class="container spacing">
            <div class="col-sm-6">
                <h1>
                    Nuestros<br>
                    Servicios
                </h1>
            </div>
            <div class="col-sm-6">
                <ul type="square">
                    <li><span>Seguridad Patrimonial</span></li>
                    <li><span>Seguridad Industrial</span></li>
                    <li><span>Seguridad Armada</span></li>
                    <li><span>Protección Canina</span></li>
                    <li><span>Custodia Vehicular y Personal</span></li>
                    <li><span>Alarmas</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRESENCIA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="presencia" id="presencia">
        <div class="container spacing">
            <div class="col-sm-6">
                <h1>
                    Presencia
                </h1>
                <p class="title-bottom">
                    Tenemos presencia en gran parte de la República Mexicana.
                </p>
                <p class="text">
                    Baja California Norte • <span>Baja California Sur</span> • Chihuahua • <span>Sonora</span>
                    • Sinaloa • <span>Coahuila</span> • Nuevo León • <span>Tamaulipas</span> • Veracruz •
                    <span>Jalisco</span> • Nayarit • <span>Michoacán</span> • Guanajuato • <span>San Luis Potosí</span>
                    • Tabasco • <span>Chiapas</span> • Quintana Roo • <span>Yucatan</span> • Campeche • <span>El Paso Tx</span>
                </p>
            </div>
            <div class="col-sm-6">
                <div class="img-container vertical-align">
                    <img src="img/index/icons/mapa.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* OFICINAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="oficinas" id="oficinas">
        <div class="container spacing">
            <div class="col-sm-6">
                <h1>
                    Nuestras Oficinas
                </h1>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                            Chihuahua (Matriz)
                        </a>
                    </li>
                    <li role="presentation">
                        <a onclick="displayMap()" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                            Cd. Juárez
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                            Monterrey, NL.
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">
                            México DF.
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">
                            Guadalajara, Jal.
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab-6" aria-controls="tab-6" role="tab" data-toggle="tab">
                            Tijuana, BC.
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab-7" aria-controls="tab-7" role="tab" data-toggle="tab">
                            Cancún
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="vertical-align tab-pane fade in active" id="tab-1">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_1" data-position="1" data-lat="28.648508" data-long="-106.086394" data-title="Secorp Chihuahua"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="vertical-align tab-pane fade" id="tab-2">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_2" data-position="2" data-lat="30.615076" data-long="-106.514620" data-title="Secorp Juárez"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="vertical-align tab-pane fade" id="tab-3">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_3" data-position="3" data-lat="25.691315" data-long="-100.250177" data-title="Secorp Monterrey"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="vertical-align tab-pane fade" id="tab-4">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_4" data-position="4" data-lat="28.648508" data-long="-106.086394" data-title="Secorp México"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="vertical-align tab-pane fade" id="tab-5">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_5" data-position="5" data-lat="20.632840" data-long="-103.383846" data-title="Secorp Guadalajara"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="vertical-align tab-pane fade" id="tab-6">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_6" data-position="6" data-lat="28.648508" data-long="-106.086394" data-title="Secorp Tijuana"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="vertical-align tab-pane fade" id="tab-7">
                        <div class="map-container">
                            <div class="googleMap" id="googleMap_7" data-position="7" data-lat="28.648508" data-long="-106.086394" data-title="Secorp Cancún"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* UNETE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="unete" id="unete">
        <div class="container light-spacing">
            <h1>
                Vacantes
            </h1>
            <p class="title-bottom">
                Únete a nuestro equipo de trabajo,<br>
                hablanos un poco de ti
            </p>
            <div class="form-container">
                <form action="" method="POST" id="contact-form">
                    <div class="row no-margin">
                        <div class="col-sm-4">
                            <input type="text" name="name" id="name" placeholder="Nombre">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="age" id="age" placeholder="Edad">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="city" id="city" placeholder="Ciudad">
                        </div>
                        <div class="col-sm-4">
                            <input type="email" name="email" id="email" placeholder="Correo electrónico">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="phone" id="phone" placeholder="Teléfono">
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" value="ENVIAR" id="form-submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto" id="contacto">
        <div class="container spacing">
            <h1>
                Contacto
            </h1>
            <p class="tel">
                01 800 8301.083 Y (614)415.0252
            </p>
            <a href="mailto:recepción_chihuahua@secorp.mx">
                recepcion_chihuahua@secorp.mx
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>