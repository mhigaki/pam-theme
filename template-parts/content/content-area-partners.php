<div class="partners"> 
  <div class="container"> 
    <h4><?php echo get_theme_mod( 'pam_sc_partners_title_h4', __( 'Brands Partners', 'pam' ) ); ?></h4>
    <p><?php echo get_theme_mod( 'pam_sc_partners_main_title_p', __( 'Check out some recent news posts.', 'pam' ) ); ?></p> 
    <div class="slick-slider-area"> 
      <?php
        $partners_query_args = array(
          'post_type' => 'partners',
          'post_status' => 'publish',
          'posts_per_page' => 12,
          'order' => 'ASC',
          'orderby' => 'date'
        )
      ?>
      <?php $partners_query = new WP_Query( $partners_query_args ); ?>
      <?php if ( $partners_query->have_posts() ) : ?>
        <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'> 
          <?php while ( $partners_query->have_posts() ) : $partners_query->the_post(); ?>
            <div <?php post_class( 'slick-slide-item' ); ?> title="<?php the_title_attribute(array(
  'echo' => true
)); ?>" id="post-<?php the_ID(); ?>"> 
              <?php echo PG_Image::getPostImage( null, 'large', array(
                  'class' => 'img-fluid',
                  'sizes' => 'max-width(768px) 155px, max-width(1280px) 160px, 160px'
              ), null, null ) ?> 
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>                                                                              
        </div>
      <?php endif; ?> 
      <div class="slick-prev slick-arrow-buton"> <i class="fa fa-angle-left"></i> 
      </div>       
      <div class="slick-next slick-arrow-buton"> <i class="fa fa-angle-right"></i> 
      </div>       
    </div>     
  </div>   
</div>