<div class="our-team-2 content-area"> 
  <div class="container"> 
    <!-- Main title -->     
    <div class="main-title"> 
      <h1><?php echo get_theme_mod( 'pam_sc_team_main_title_h1', __( 'Our Agent', 'pam' ) ); ?></h1> 
      <p><?php echo get_theme_mod( 'pam_sc_team_main_title_p', __( 'Meet out small team that make those great products.', 'pam' ) ); ?></p> 
    </div>     
    <?php
      $corretor_query_args = array(
        'post_type' => 'corretor',
        'posts_per_page' => 4,
        'paged' => get_query_var( 'paged' ) ?: 1,
        'order' => 'ASC',
        'orderby' => 'date'
      )
    ?>
    <?php $corretor_query = new WP_Query( $corretor_query_args ); ?>
    <?php if ( $corretor_query->have_posts() ) : ?>
      <div class="row"> 
        <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?>
          <?php PG_Helper::rememberShownPost(); ?>
          <div <?php post_class( 'col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s' ); ?> id="post-<?php the_ID(); ?>"> 
            <div class="team-1"> 
              <div class="team-photo"> <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo PG_Image::getPostImage( null, array(0,400),true, array(
                      'class' => 'img-fluid',
                      'sizes' => '(max-width: 320px) 84vw, (max-width: 640px) 240px, (max-width: 768px) 43vw, (max-width: 1024px) 34vw, (max-width: 1280px) 255px, 255px'
                  ), null, null ) ?> </a> 
              </div>               
              <div class="team-details"> 
                <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h5> 
                <h6><?php echo get_field( 'creci_numero' ); ?></h6> 
                <ul class="social-list clearfix"> 
                  <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
                  </li>                   
                  <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
                  </li>                   
                  <li> <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> 
                  </li>                   
                  <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> 
                  </li>                   
                </ul>                 
              </div>               
            </div>             
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>                            
      </div>
    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
    <?php endif; ?> 
  </div>   
</div>