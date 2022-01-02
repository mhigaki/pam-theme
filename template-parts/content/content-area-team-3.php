<div class="our-team-3 content-area"> 
  <div class="container"> 
    <div class="main-title"> 
      <?php echo get_theme_mod( 'pam_sc_team_main_title_h1' ); ?> 
      <p><?php echo get_theme_mod( 'pam_sc_team_main_title_p', __( 'Meet out small team that make those great products.', 'pam' ) ); ?></p> 
    </div>     
    <?php
      $corretor_query_args = array(
        'category_name' => 'ceo,ceos, socios',
        'post__in' => get_option( 'sticky_posts' ),
        'post_type' => 'post',
        'post_type' => 'corretor',
        'post_status' => 'publish',
        'nopaging' => true,
        'orderby' => 'rand'
      )
    ?>
    <?php $corretor_query = new WP_Query( $corretor_query_args ); ?>
    <?php if ( $corretor_query->have_posts() ) : ?>
      <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>"> 
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="row team-3"> 
              <div class="col-xl-4 col-lg-5 col-md-12 col-pad "> 
                <div class="photo"> 
                  <?php echo PG_Image::getPostImage( null, 'thumbnail', array(
                      'class' => 'img-fluid',
                      'sizes' => '(max-width: 320px) 84vw, (max-width: 768px) 90vw, (max-width: 1024px) 70vw, (max-width: 1600px) 369px, 369px'
                  ), 'height', null ) ?>                    
                </div>                 
              </div>               
              <div class="col-xl-8 col-lg-7 col-md-12 col-pad align-self-center"> 
                <div class="detail">                    
                  <h4> <a href="agent-detail.html"><?php the_title(); ?></a> </h4> 
                  <?php the_content(); ?> 
                </div>                 
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