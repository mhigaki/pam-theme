<?php get_header(); ?>

<div class="sub-banner"> 
    <div class="container"> 
        <div class="page-name"> 
            <h1><?php single_term_title(); ?></h1> 
        </div>                     
    </div>                 
    <div class="page-info"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-4"> 
                    <div class="breadcrumb-area"> 
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, 'Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)"> 
                                <li>
                                    <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
                                        <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                        <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                        <?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
                                            <span>/</span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </li>                                             
                                <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
                                <li>
                                    <?php echo $breadcrumb[ 'name' ]; ?>
                                </li>                                             
                            </ul>
                        <?php endif; ?> 
                    </div>                                 
                </div>                             
                <div class="col-md-8"> 
                    <div class="contact-info"> 
                        <ul> 
                            <li> <i class="fa fa-phone"></i> 
                                <?php _e( '+1-8X0-666-8X88', 'pam' ); ?> 
                            </li>                                         
                            <li> <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contact us', 'pam' ); ?></a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
</div>             
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
                <?php if ( have_posts() ) : ?>
                    <div class="row"> 
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-lg-6 col-md-6 col-sm-12 wow fadeInUp delay-03s' ); ?> id="post-<?php the_ID(); ?>"> 
                                <div class="property-box"> 
                                    <div class="property-thumbnail"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="property-img"> <div class="listing-badges"> 
                                                <?php $terms = get_the_terms( get_the_ID(), 'properties_status' ) ?>
                                                <?php if( !empty( $terms ) ) : ?>
                                                    <?php foreach( $terms as $term ) : ?>
                                                        <span class="featured"><?php echo $term->name; ?></span>
                                                    <?php endforeach; ?>
                                                <?php endif; ?> 
                                            </div> <div class="price-ratings-box"> 
                                                <?php if ( get_field( 'field_5faf728e8aa5e' ) ) : ?>
                                                    <p class="price"><?php echo get_field( 'field_5faf728e8aa5e' ); ?></p>
                                                <?php endif; ?> 
                                                <?php echo get_field( 'field_606939e7915cd' ); ?> 
                                            </div><?php echo PG_Image::getPostImage( null, 'imovel', array(
                                                  'class' => 'd-block img-fluid w-100',
                                                  'sizes' => '(max-width: 320px) 100vw, (max-width: 640px) 510px, (max-width: 768px) 70vw, (max-width: 1024px) 44vw, (max-width: 1280px) 350px, 350px'
                                            ), null, null ) ?> </a> 
                                    </div>                                                 
                                    <div class="detail"> 
                                        <h1 class="title"> <?php $terms = get_the_terms( get_the_ID(), 'properties_types' ) ?><?php if( !empty( $terms ) ) : ?><?php foreach( $terms as $term ) : ?><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $term->name; ?></a><?php endforeach; ?><?php endif; ?> </h1> 
                                        <?php if ( get_field( 'endereco' ) ) : ?>
                                            <div class="location"> <a href="<?php echo esc_url( get_permalink() ); ?>"> <i class="fa fa-map-marker"></i><?php echo get_field( 'endereco' ); ?></a> 
                                            </div>
                                        <?php endif; ?> 
                                        <ul class="facilities-list clearfix"> 
                                            <li> <i class="flaticon-furniture"></i>
                                                <?php echo get_post_meta( get_the_ID(), 'informacoes_planta_quartos', true ); ?> 
                                            </li>                                                         
                                            <li> <i class="flaticon-holidays"></i>
                                                <?php echo get_field( 'informacoes_planta_banheiros' ); ?> 
                                            </li>                                                         
                                            <li> <i class="flaticon-square"></i>
                                                <?php echo get_field( 'informacoes_planta_area' ); ?> 
                                            </li>                                                         
                                            <li> <i class="flaticon-vehicle"></i>
                                                <?php echo get_field( 'informacoes_planta_garagem' ); ?> 
                                            </li>                                                         
                                        </ul>                                                     
                                    </div>                                                 
                                    <div class="footer clearfix"> 
                                        <div class="pull-left days"> 
                                            <p><i class="flaticon-time"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' atrás'; ?></p>
                                        </div>                                                                                                          
                                    </div>                                                 
                                </div>                                             
                            </div>
                        <?php endwhile; ?>                                                                                                                                                                                                                                                                                                                                                                                                                        
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

<?php get_footer(); ?>