<div class="banner" id="banner"> 
  <?php
    $sliders_query_args = array(
      'post_type' => 'sliders',
      'posts_per_page' => 3,
      'order' => 'ASC',
      'orderby' => 'rand'
    )
  ?>
  <?php $sliders_query = new WP_Query( $sliders_query_args ); ?>
  <div id="bannerCarousole" class="carousel slide" data-ride="carousel"> 
    <?php if ( $sliders_query->have_posts() ) : ?>
      <div class="carousel-inner"> 
        <?php $sliders_query_item_number = 0; ?>
        <?php while ( $sliders_query->have_posts() ) : $sliders_query->the_post(); ?>
          <div class="carousel-item banner-max-height<?php if( $sliders_query_item_number == 0) echo ' active'; ?>"> 
            <?php echo PG_Image::getPostImage( null, 'large', array(
                'class' => 'd-block w-100',
                'alt' => __( 'Banner', 'pam' )
            ), null, null ) ?> 
            <div class="carousel-caption banner-slider-inner d-flex h-100 text-center"> 
              <div class="carousel-content container"> 
                <div class="text-center"> 
                  <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s"><?php the_title(); ?></h3> 
                  <p data-animation="animated fadeInUp delay-10s"><?php the_content(); ?></p> 
                  <?php if ( get_field( 'url_da_pagina' ) ) : ?>
                    <a class="btn btn-white" href="<?php echo get_field( 'url_da_pagina' ); ?>" rel="nofollow noreferrer noopener"><?php _e( 'Saiba Mais', 'pam' ); ?></a>
                  <?php endif; ?> 
                </div>                 
              </div>               
            </div>             
          </div>
          <?php $sliders_query_item_number++; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>                   
      </div>
    <?php endif; ?> <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev"> <span class="slider-mover-left" aria-hidden="true"> <i class="fa fa-angle-left"></i> </span> </a><a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next"> <span class="slider-mover-right" aria-hidden="true"> <i class="fa fa-angle-right"></i> </span> </a> 
  </div>   
  <!-- Search Section start -->   
  <div class="search-section search-area-3 d-none d-xl-block d-lg-block" id="search-area-3"> 
    <div class="container"> 
      <?php get_template_part( 'template-parts/section/section', 'search' ); ?> 
    </div>     
  </div>   
  <!-- Search Section end -->   
</div>