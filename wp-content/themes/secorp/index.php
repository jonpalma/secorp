<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-banner" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $arrayBanner = CFS()->get('banner_img_array');
                $arraySize = count($arrayBanner);
                $arrayEnd = end($arrayBanner);
                $counter = 0;
                foreach($arrayBanner as $item)
                {
                ?>
                <?php
                    if($counter == 0)
                    {
                        echo '<div class="item active">';
                    }
                    else
                    {
                        echo '</div>';
                        echo '<div class="item">';
                    }
                ?>
                <div class="img-container">
                    <img class="img-bg" src="<?php echo $item['banner_img'];?>" alt="">
                </div>
                <?php
                    $counter++;
                }
                echo '</div>';
                ?>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $arrayBanner = CFS()->get('banner_img_array');
                $arraySize = count($arrayBanner);
                $arrayEnd = end($arrayBanner);
                $counter = 0;
                foreach($arrayBanner as $item)
                {
                ?>
                <?php
                    if($counter == 0)
                    {
                        echo '<li data-target="#carousel-banner" data-slide-to="'.$counter.'" class="active"></li>';
                    }
                    else
                    {
                        echo '<li data-target="#carousel-banner" data-slide-to="'.$counter.'"></li>';
                    }
                ?>
                <?php
                    $counter++;
                }
                ?>
            </ol>
        </div>
        <div class="container spacing">
            <h1>
                <?php echo CFS()->get('banner_title');?>
            </h1>
            <p>
                <?php echo CFS()->get('banner_text');?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/nosotros/img1.png" alt="" class="img-left vertical-align hidden-xs">
        <div class="container spacing">
            <div id="carousel-nosotros" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayNosotros = CFS()->get('nosotros_array');
                    $arraySize = count($arrayNosotros);
                    $arrayEnd = end($arrayNosotros);
                    $counter = 0;
                    foreach($arrayNosotros as $item)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                        }
                        else
                        {
                            echo '</div>';
                            echo '<div class="item">';
                        }
                    ?>
                    <div class="row no-margin">
                        <div class="vertical-align">
                            <div class="col-sm-4 vertical-align">
                                <h3>
                                    <?php echo $item['nosotros_title'];?>
                                </h3>
                            </div>
                            <div class="col-sm-8 vertical-align">
                                <p>
                                    <?php echo $item['nosotros_text'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    ?>
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
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()->get('ofrecemos_title');?>
            </h1>
            <div class="col-sm-6">
                <ul type="square">
                    <?php echo CFS()->get('ofrecemos_text_left');?>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul type="square">
                    <?php echo CFS()->get('ofrecemos_text_right');?>
                </ul>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DIVISION */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    <div class="division" id="division">
    </div>
    -->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CERTIFICACIONES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="certificaciones" id="certificaciones">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()->get('certificaciones_title');?>
            </h1>
            <?php
            $arrayLogos = CFS()->get('certificaciones_logos_array');
            $arraySize = count($arrayLogos);
            $arrayEnd = end($arrayLogos);
            $counter = 0;
            foreach($arrayLogos as $item)
            {
            ?>
            <?php
                if(($arraySize%3 == 1) && (($arraySize - $counter) == 1))
                {
                    echo '<div class="col-sm-4"></div>';
                }

                if(($arraySize%3 == 2) && (($arraySize - $counter) == 2))
                {
                    echo '<div class="col-sm-2"></div>';
                }
            ?>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="<?php echo $item['certificacion_logo'];?>" alt="" class="vertical-align">
                </div>
            </div>
            <?php
                if(($arraySize%3 == 1) && (($arraySize - $counter) == 1))
                {
                    echo '<div class="col-sm-4"></div>';
                }

                if(($arraySize%3 == 2) && (($arraySize - $counter) == 1))
                {
                    echo '<div class="col-sm-2"></div>';
                }

                $counter++;
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SERVICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicios" id="servicios">
        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/auto.png" alt="" class="img-right hidden-xs">
        <div class="container spacing">
            <div class="col-sm-6">
                <h1>
                    <?php echo CFS()->get('servicios_title');?>
                </h1>
            </div>
            <div class="col-sm-6">
                <ul type="square">
                    <?php echo CFS()->get('servicios_text');?>
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
                    <?php echo CFS()->get('presencia_title');?>
                </h1>
                <p class="title-bottom">
                    <?php echo CFS()->get('presencia_sub_title');?>
                </p>
                <p class="text">
                    <?php echo CFS()->get('presencia_text');?>
                </p>
            </div>
            <div class="col-sm-6">
                <div class="img-container vertical-align">
                    <img src="<?php echo CFS()->get('presencia_map');?>" alt="">
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
                    <?php echo CFS()->get('oficinas_title');?>
                </h1>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php
                    $arrayOficinas = CFS()->get('oficinas_array');
                    $arraySize = count($arrayOficinas);
                    $arrayEnd = end($arrayOficinas);
                    $counter = 0;
                    foreach($arrayOficinas as $item)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<li role="presentation" class="active">';
                            echo '<a href="#tab-'.$counter.'" aria-controls="tab-'.$counter.'" role="tab" data-toggle="tab">';
                        }
                        else
                        {
                            echo '</a>';
                            echo '</li>';
                            echo '<li role="presentation">';
                            echo '<a href="#tab-'.$counter.'" aria-controls="tab-'.$counter.'" role="tab" data-toggle="tab">';
                        }
                    ?>
                    <?php echo $item['oficina_title'];?>
                    <?php
                        $counter++;
                    }
                    echo '</a>';
                    echo '</li>';
                    ?>
                </ul>
            </div>
            <div class="col-sm-6">
                <!-- Tab panes -->
                <div class="tab-content">
                    <?php
                    $arrayOficinas = CFS()->get('oficinas_array');
                    $arraySize = count($arrayOficinas);
                    $arrayEnd = end($arrayOficinas);
                    $counter = 0;
                    foreach($arrayOficinas as $item)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<div role="tabpanel" class="vertical-align tab-pane fade in active" id="tab-'.$counter.'">';
                        }
                        else
                        {
                            echo '</div>';
                            echo '<div role="tabpanel" class="vertical-align tab-pane fade" id="tab-'.$counter.'">';
                        }
                    ?>
                    <div class="map-container">
                        <?php echo $item['oficina_map'];?>
                    </div>
                    <div class="content">
                        <p class="telefono">
                            <?php echo $item['oficina_phone'];?>
                        </p>
                        <p class="direccion">
                            <?php echo $item['oficina_address'];?>
                        </p>
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    ?>
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
                <?php echo CFS()->get('vacantes_title');?>
            </h1>
            <p class="title-bottom">
                <?php echo CFS()->get('vacantes_sub_title');?>
            </p>
            <div class="form-container">
                <div class="row no-margin">
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario de Contacto"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto" id="contacto">
        <div class="container spacing">
            <h1>
                <?php echo CFS()->get('contacto_title');?>
            </h1>
            <p class="tel">
                <?php echo CFS()->get('contacto_phone');?>
            </p>
            <a href="mailto:<?php echo CFS()->get('contacto_e_mail');?>">
                <?php echo CFS()->get('contacto_e_mail');?>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>