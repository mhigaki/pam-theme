<div class="services-2 content-area-5 bg-grea-3"> 
  <div class="container"> 
    <!-- Main title -->     
    <div class="main-title"> 
      <h1><?php echo get_theme_mod( 'pam_sc_services_main_title_h1', __( 'What are you looking for?', 'pam' ) ); ?></h1> 
      <p><?php echo get_theme_mod( 'pam_sc_services_main_title_p', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ) ); ?></p> 
    </div>     
    <?php
      $servicos_query_args = array(
        'post_type' => 'servicos',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'ignore_sticky_posts' => true,
        'order' => 'ASC',
        'orderby' => 'menu_order'
      )
    ?>
    <?php $servicos_query = new WP_Query( $servicos_query_args ); ?>
    <?php if ( $servicos_query->have_posts() ) : ?>
      <div class="row wow"> 
        <?php $servicos_query_item_number = 0; ?>
        <?php while ( $servicos_query->have_posts() && $servicos_query_item_number++ < 4 ) : $servicos_query->the_post(); ?>
          <?php PG_Helper::rememberShownPost(); ?>
          <div <?php post_class( 'col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft delay-04s' ); ?> id="post-<?php the_ID(); ?>"> 
            <div class="service-info-5"> <i class="flaticon-apartment"></i> 
              <h4><?php the_title(); ?></h4> 
              <?php the_content(); ?> 
            </div>             
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>                            
      </div>
    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
    <?php endif; ?> 
    <div class="text-center read-more-2"> 
      <?php if ( get_theme_mod( 'btn_link' ) ) : ?>
        <a href="<?php echo get_theme_mod( 'btn_link', 'services-1.html' ); ?>" class="btn-white"><?php echo get_theme_mod( 'btn_label', __( 'Read More', 'pam' ) ); ?></a>
      <?php endif; ?> 
    </div>     
  </div>   
</div>