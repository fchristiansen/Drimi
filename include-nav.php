  <nav id="container_nav" class="navbar navbar-default navbar-static-top"">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php">
                  <img class="hidden-xs hidden-sm" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="" width="190" height="86">
            </a>

              <a class="navbar-brand" href="index.php">
                  <img class="visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="" width="170" height="77">
            </a>


        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- caja login-->
          <?php include('include-form-login.php') ?>
          <!--  form login xs -->
          <?php include('include-form-login-xs.php') ?>

          <div class="box_menu">
            <ul class="nav navbar-nav">
              <li><a href="que-es-drimi.php">¿Qué es Drimi?</a></li>
              <li><a href="como-funciona.php">¿Cómo funciona?</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="testimonios.php">Testimonios</a></li>
              <li>
                  <div class="visible-xs visible-sm search_xs">
                      <form action="" method="get" accept-charset="utf-8">
                        <div class="box_search_xs clearfix">
                          <input type="text" name="s" placeholder="Buscar..." class="">
                          <button type="submit" class="">
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle-thin fa-stack-2x"></i>
                              <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                          </button>
                        </div>
                      </form>
                  </div><!-- search mobile -->
                </li>
            </ul>

              <div id="sb-search" class="hidden-xs hidden-sm search_lg sb-search">
                   <form action="" method="get" accept-charset="utf-8">
                          <input id="search" type="text" name="s" placeholder="Buscar..." class="sb-search-input">
                          <!-- <input class="sb-search-submit" type="submit" value=""> -->
                          <button type="submit">
                              <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                              </span>
                          </button>
                  </form>
            </div><!-- search desktop -->

       <!--    <div id="sb-search" class="sb-search">
            <form>
              <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
              <input class="sb-search-submit" type="submit" value="">
              <span class="sb-icon-search"></span>
            </form>
          </div> -->

          </div>
            <div class="hidden-xs hidden-sm login">
                <a class="btn btn-default bt_rounded" href="javascript:void(0);" role="button">Ingresar</a>
           </div>
           <div class="social">
              <a class="" href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
              </a>
                <a class="" href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
          </div><!-- end redes sociales -->
        </div>
      </div>
    </nav>
