<div class="testimonial-3"> 
  <div class="container"> 
    <div class="main-title"> 
      <h1><?php echo get_theme_mod( 'pam_sc_testemonial_main_title_h1', __( 'Our Testimonial', 'pam' ) ); ?></h1> 
    </div>     
    <div class="slick-slider-area"> 
      <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'> 
        <?php
          $testemonials_query_args = array(
            'post_type' => 'testemonials',
            'nopaging' => true,
            'order' => 'ASC',
            'orderby' => 'date'
          )
        ?>
        <?php $testemonials_query = new WP_Query( $testemonials_query_args ); ?>
        <?php if ( $testemonials_query->have_posts() ) : ?>
          <?php while ( $testemonials_query->have_posts() ) : $testemonials_query->the_post(); ?>
            <?php PG_Helper::rememberShownPost(); ?>
            <div <?php post_class( 'slick-slide-item' ); ?> id="post-<?php the_ID(); ?>"> 
              <div class="testimonial-inner"> 
                <div class="content-box"> 
                  <div class="rating">
                    <?php echo get_field( 'rattings' ); ?>
                  </div><br/> 
                  <p><?php the_content(); ?></p> 
                </div>                 
                <div class="media"> <a href="#"> <?php echo PG_Image::getPostImage( null, 'thumbnail', array(
                        'class' => 'img-fluid'
                    ), 'both', null ) ?> </a> 
                  <div class="media-body align-self-center"> 
                    <h5><?php the_title(); ?></h5>                      
                  </div>                   
                </div>                 
              </div>               
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
        <?php endif; ?>                            
      </div>       
    </div>     
  </div>   
</div>