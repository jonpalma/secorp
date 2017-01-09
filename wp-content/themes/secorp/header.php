<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <?php wp_head(); ?>
        <title>Secorp Seguridad Corporativa</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/logo-og.png" alt="logo">
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-padd active">Nosotros</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#ofrecemos" class="smoothScroll vertical-align nav-padd">Que Ofrecemos</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#certificaciones" class="smoothScroll vertical-align nav-padd">Certificados</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#servicios" class="smoothScroll vertical-align nav-padd">Servicios</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#presencia" class="smoothScroll vertical-align nav-padd">Presencia</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#oficinas" class="smoothScroll vertical-align nav-padd">Oficinas</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#unete" class="smoothScroll vertical-align nav-padd">Únete a Secorp</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#contacto" class="smoothScroll vertical-align nav-padd">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>