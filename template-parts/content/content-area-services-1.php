<div class="content-area services-3"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-lg-4"> 
        <div class="service-text"> 
          <h2><?php the_title(); ?></h2> 
          <?php the_content(); ?>                       
        </div>         
      </div>       
      <div class="col-lg-8"> 
        <?php
          $servicos_query_args = array(
            'post_type' => 'servicos',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'order' => 'ASC',
            'orderby' => 'rand',
            'cache_results' => false
          )
        ?>
        <?php $servicos_query = new WP_Query( $servicos_query_args ); ?>
        <?php if ( $servicos_query->have_posts() ) : ?>
          <div class="row"> 
            <?php while ( $servicos_query->have_posts() ) : $servicos_query->the_post(); ?>
              <div <?php post_class( 'col-md-4 col-sm-6 col-6' ); ?> id="post-<?php the_ID(); ?>"> 
                <div class="service-info-2"> <i class="<?php echo get_field( 'icon_services' ); ?>"></i> 
                  <h3><?php the_title(); ?></h3> 
                  <?php the_content(); ?> 
                </div>                 
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>                                                                  
          </div>
        <?php endif; ?> 
      </div>       
    </div>     
  </div>   
</div>