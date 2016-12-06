<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="img/favicon.ico"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>SECORP</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-logo hidden-xs">
                            <img src="img/index/icons/logo.png" alt="logo">
                        </a>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-padd active">Nosotros</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#ofrecemos" class="smoothScroll vertical-align nav-padd">Que Ofrecemos</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#servicios" class="smoothScroll vertical-align nav-padd">Servicios</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#presencia" class="smoothScroll vertical-align nav-padd">Presencia</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#oficinas" class="smoothScroll vertical-align nav-padd">Oficinas</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#unete" class="smoothScroll vertical-align nav-padd">Únete a Nosotros</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#contacto" class="smoothScroll vertical-align nav-padd">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>