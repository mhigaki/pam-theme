<?php get_header(); ?>

<?php get_template_part( 'template-parts/header/banner', 'sub' ); ?> 
<?php if ( is_tax() ) : ?>
    <div class="properties-section content-area"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-lg-8 col-md-12"> 
                    <!-- Option bar start -->                                 
                    <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block"> 
                        <div class="row"> 
                            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2"> 
                                <div class="sorting-options"> <span><?php _e( 'View as:', 'pam' ); ?></span> <a href="properties-list-rightside.html" class="change-view-btn"><i class="fa fa-th-list"></i></a> <a href="properties-grid-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a> 
                                </div>                                             
                            </div>                                         
                            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad"> 
                                <div class="sorting-options2"> <span><?php _e( 'Order by:', 'pam' ); ?></span> 
                                    <select class="sorting"> 
                                        <option>
                                            <?php _e( 'Price High to Low', 'pam' ); ?>
                                        </option>                                                     
                                        <option>
                                            <?php _e( 'Price: Low to High', 'pam' ); ?>
                                        </option>                                                     
                                        <option>
                                            <?php _e( 'Newest Properties', 'pam' ); ?>
                                        </option>                                                     
                                        <option>
                                            <?php _e( 'Oldest Properties', 'pam' ); ?>
                                        </option>                                                     
                                    </select>                                                 
                                </div>                                             
                            </div>                                         
                        </div>                                     
                    </div>                                 
                    <!-- Option bar end -->                                 
                    <?php
                        $properties_query_args = array(
                          'post_type' => 'properties',
                          'posts_per_page' => 5,
                          'order' => 'ASC',
                          'orderby' => 'date'
                        )
                    ?>
                    <?php $properties_query = new WP_Query( $properties_query_args ); ?>
                    <?php if ( $properties_query->have_posts() ) : ?>
                        <div class="row"> 
                            <?php while ( $properties_query->have_posts() ) : $properties_query->the_post(); ?>
                                <?php PG_Helper::rememberShownPost(); ?>
                                <div <?php post_class( 'col-lg-6 col-md-6 col-sm-12 wow fadeInUp delay-03s' ); ?> id="post-<?php the_ID(); ?>"> 
                                    <div class="property-box"> 
                                        <div class="property-thumbnail"> <a href="properties-details.html" class="property-img"> <div class="listing-badges"> <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span> 
                                                </div> <div class="price-ratings-box"> 
                                                    <p class="price">  <?php _e( '$178,000', 'pam' ); ?> </p> 
                                                    <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> 
                                                    </div>                                                                 
                                                </div> <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel"> 
                                                    <ol class="carousel-indicators"> 
                                                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>                                                                     
                                                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>                                                                     
                                                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>                                                                     
                                                    </ol>                                                                 
                                                    <div class="carousel-inner"> 
                                                        <div class="carousel-item active"> 
                                                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/properties/properties-1.jpg" alt="properties"/> 
                                                        </div>                                                                     
                                                        <div class="carousel-item"> 
                                                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/properties/properties-1.jpg" alt="properties"/> 
                                                        </div>                                                                     
                                                        <div class="carousel-item"> 
                                                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/properties/properties-1.jpg" alt="properties"/> 
                                                        </div>                                                                     
                                                    </div>                                                                 
                                                </div> </a> 
                                        </div>                                                     
                                        <div class="detail"> 
                                            <h1 class="title"> <a href="properties-details.html"><?php the_title(); ?></a> </h1> 
                                            <div class="location"> <a href="properties-details.html"> <i class="fa fa-map-marker"></i><?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?> </a> 
                                            </div>                                                         
                                            <ul class="facilities-list clearfix"> 
                                                <li> <i class="flaticon-furniture"></i> 
                                                    <?php _e( '3 Bedrooms', 'pam' ); ?> 
                                                </li>                                                             
                                                <li> <i class="flaticon-holidays"></i> 
                                                    <?php _e( '2 Bathrooms', 'pam' ); ?> 
                                                </li>                                                             
                                                <li> <i class="flaticon-square"></i> 
                                                    <?php _e( 'Sq Ft:3400', 'pam' ); ?> 
                                                </li>                                                             
                                                <li> <i class="flaticon-vehicle"></i> 
                                                    <?php _e( '1 Garage', 'pam' ); ?> 
                                                </li>                                                             
                                            </ul>                                                         
                                        </div>                                                     
                                        <div class="footer clearfix"> 
                                            <div class="pull-left days"> 
                                                <p><i class="flaticon-time"></i> <?php _e( '5 Days ago', 'pam' ); ?></p> 
                                            </div>                                                         
                                            <ul class="pull-right"> 
                                                <li> <a href="#"><i class="flaticon-favorite"></i></a> 
                                                </li>                                                             
                                                <li> <a href="#"><i class="flaticon-multimedia"></i></a> 
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
                    <!-- Page navigation start -->                                 
                    <?php get_template_part( 'template-parts/navigation/pagination-box' ); ?> 
                    <!-- Page navigation end-->                                 
                </div>                             
                <div class="col-lg-4 col-md-12"> 
                    <?php get_sidebar( 'properties' ); ?> 
                </div>                             
            </div>                         
        </div>                     
    </div>
<?php endif; ?>             

<?php get_footer(); ?>