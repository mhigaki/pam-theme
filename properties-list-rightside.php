<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/banner-sub' ); ?>
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <?php
                $properties_query_args = array(
                  'post_type' => 'properties',
                  'posts_per_page' => 6,
                  'paged' => get_query_var( 'paged' ) ?: 1,
                  'order' => 'ASC',
                  'orderby' => 'date'
                )
            ?>
            <?php $properties_query = new WP_Query( $properties_query_args ); ?>
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <div class="sorting-options">
                                <span><?php _e( 'View as:', 'pam' ); ?></span>
                                <a href="properties-list-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-rightside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                        <?php if ( $properties_query->have_posts() ) : ?>
                            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                                <div class="sorting-options2">
                                    <span><?php _e( 'Order by:', 'pam' ); ?></span>
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
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Option bar end -->
                <!-- Property box 2 start -->
                <?php while ( $properties_query->have_posts() ) : $properties_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div <?php post_class( 'property-box-2 wow fadeInUp delay-03s' ); ?> id="post-<?php the_ID(); ?>">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img"> <?php echo PG_Image::getPostImage( null, 'large', array(
                                          'class' => 'img-fluid'
                                    ), 'both', null ) ?> <div class="listing-badges">
                                        <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                                    </div> <div class="price-ratings-box">
                                        <p class="price"> <?php _e( '$178,000', 'pam' ); ?> </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div> </a>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="detail ">
                                    <h3 class="title"> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
                                    <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span><?php _e( '3 Beds', 'pam' ); ?></span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span><?php _e( '1 Baths', 'pam' ); ?></span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span><?php _e( '1 Garage', 'pam' ); ?></span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span><?php _e( '1 TV', 'pam' ); ?></span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                                <div class="footer">
                                    <div class="pull-left days">
                                        <p><i class="flaticon-time"></i> <?php _e( '5 Days ago', 'pam' ); ?></p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-favorite"></i></a>
                                        </li>
                                        <li><a href="#"><i class="flaticon-multimedia"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <!-- properties 2 end -->
                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#"><?php _e( '1', 'pam' ); ?></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"><?php _e( '2', 'pam' ); ?></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"><?php _e( '3', 'pam' ); ?></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Page navigation end-->
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_sidebar( 'right' ); ?>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>