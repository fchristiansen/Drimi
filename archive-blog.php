<?php
/*

Template name: Blog

*/
?>
<?php get_header(); ?>

 <h2 class="title-blog">blog</h2>

   <section class="grid-blog">

       <div class="container">
          <div class="row">
           <?php

                 $args = array (
                     'post_type' => 'post',
                     'category_name' => 'blog',
                     'posts_per_page' => 8
                   );
                   $the_query = new WP_Query ($args);

               ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <div class="col-sm-4">
                    <div class="blog_post">
                      <?php the_post_thumbnail( 'imagen-destacada', ['class' => 'img-responsive center-block'] ); ?>
                      <h3><?php the_title(); ?></h3>
                        <p><?php echo get_excerpt(100); ?> </p>


                    </div> <!-- blog post -->
                  </div>
              <?php endwhile; else: ?>
              <?php endif; ?>
              <?php wp_reset_postdata()  ?>
            </div>
              <div class="center-block">
                 <a href="javascript:void(0);" class="btn btn-default btn_lg">ver más</a>
              </div>


            </div> <!-- contenedor -->
  </section> <!-- end blog -->



<?php get_footer(); ?>



