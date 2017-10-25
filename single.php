<?php get_header(); ?>

 <h2 class="title-blog">blog</h2>
   <section class="bg-blog">

       <div class="container">
        <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
          <div class="post-content">

              <?php the_title( '<h3 class="post-title">', '</h3>'); ?>
              <p class="post-date"> <?php echo get_the_date(); ?></p>
              <img class="img-responsive center-block post-img" src="<?php the_post_thumbnail_url( ) ?>">

              <div class="post-text">
                <?php the_content(); ?>
              </div>

              <div class="row">
                <div class="col-sm-6">
                 <div class="share-box">
                    share-box

                 </div>
                </div>
                <div class="col-sm-6">

                </div>
              </div>

          </div> <!-- post-content -->
          <?php
            endwhile;
          endif;
        ?>
      <div class="row">
        <div class="col-xs-6">
          <div class="pull-left text-left">
             <a href="javascript:void(0);" class="btn btn-default btn_md hidden-xs">anterior</a>
             <a href="javascript:void(0);" class="btn btn-default btn_sm visible-xs">anterior</a>
            <p class="prev-next-post ">TITulo del post anterior</p>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="pull-right text-right">
             <a href="javascript:void(0);" class="btn btn-default btn_md hidden-xs">siguente</a>
             <a href="javascript:void(0);" class="btn btn-default btn_sm visible-xs">siguente</a>
             <p class="prev-next-post ">TITulo del post siguiente</p>
          </div>
        </div>

      </div>

      </div> <!-- contenedor -->
  </section> <!-- end blog -->



<?php get_footer(); ?>


