<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title> <?php bloginfo('name') ?> </title>



    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico">

    <script src="<?php bloginfo('template_url'); ?>/assets/js/modernizr.custom.js"></script>

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>

    <div class="text-center box_seleccion">
            <a href="<?php bloginfo('url') ?>/home/">
                <img class="arr_down clearfix" src="<?php bloginfo('template_url'); ?>/assets/img/down_arrow.png" alt="">
                <h2 class="center-block">amigos</h2>
            </a>
          <div class="clearfix">
            <img class="logo_seleccion" src="<?php bloginfo('template_url'); ?>/assets/img/logo_seleccion.png" alt="">
          </div>

          <a href="<?php bloginfo('url') ?>/home/">
              <img class="arr_up clearfix" src="<?php bloginfo('template_url'); ?>/assets/img/up_arrow.png" alt="">
              <h2 class="center-block">novios</h2>
          </a>
    </div>
    <div class="bg_bienvenida"></div>
