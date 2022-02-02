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
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, '<i class="fa  fa-home"></i> Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-home cms-breadcrumbs-home-name="<i class=&quot;fa  fa-home&quot;></i> Home" cms-breadcrumbs-separator="span" cms-breadcrumbs-first-item-name="> li:nth-of-type(2)" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)">
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
                            <li><i class="fa fa-phone"></i> 
                            </li>
                            <li>
                                <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contact us', 'pam' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ( is_post_type_archive() ) : ?>
    <div class="properties-section content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <!-- Option bar start -->
                    <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                                <div class="sorting-options"><span><?php _e( 'View as:', 'pam' ); ?></span><a href="properties-list-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a><a href="properties-grid-rightside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                                <div class="sorting-options2"><span><?php _e( 'Order by:', 'pam' ); ?></span>
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
                    <!-- Property box 2 start -->
                    <?php
                        $properties_args = array(
                          'tax_query' => array( 
                            array(
                              'taxonomy' => 'propeties_type',
                              'terms' => 'apartamento'
                            )
                          ),
                          'post_type' => 'properties',
                          'posts_per_page' => 5,
                          'orderby' => 'title'
                        )
                    ?>
                    <?php $properties = new WP_Query( $properties_args ); ?>
                    <?php if ( $properties->have_posts() ) : ?>
                        <?php while ( $properties->have_posts() ) : $properties->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="property-box-2 wow fadeInUp delay-03s">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-pad"><a href="<?php echo esc_url( get_permalink() ); ?>" class="property-img"> <?php echo PG_Image::getPostImage( null, 'imovel', array(
                                                  'class' => 'img-fluid',
                                                  'sizes' => '(max-width: 320px) 94vw, (max-width: 640px) 540px, (max-width: 768px) 74vw, (max-width: 1024px) 30vw, (max-width: 1280px) 317px, 317px'
                                            ), 'both', null ) ?> <div class="listing-badges">
                                                <?php $terms = get_the_terms( get_the_ID(), 'properties_status' ) ?>
                                                <?php if( !empty( $terms ) ) : ?>
                                                    <?php foreach( $terms as $term ) : ?>
                                                        <span class="featured"><?php echo $term->name; ?></span>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div> <div class="price-ratings-box">
                                                <?php if ( get_post_meta( get_the_ID(), 'valor', true ) ) : ?>
                                                    <p class="price"><?php echo get_post_meta( get_the_ID(), 'valor', true ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( get_field( 'rattings' ) ) : ?>
                                                    <?php echo get_field( 'rattings' ); ?>
                                                <?php endif; ?>
                                            </div> </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="detail ">
                                            <h3 class="title"> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
                                            <?php if ( get_field( 'endereco' ) ) : ?>
                                                <h5 class="location"> <a href="<?php echo esc_url( get_permalink() ); ?>"> <i class="fa fa-map-marker"></i><?php echo get_field( 'endereco' ); ?></a> </h5>
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
                                        </div><a href="<?php echo esc_url( get_permalink() ); ?>" class="btn button-theme"><?php _e( 'Detalhes', 'pam' ); ?></a>
                                        <div class="footer">
                                            <div class="pull-left days">
                                                <p><i class="flaticon-time"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' atrás';  ?></p>
                                            </div>
                                            <ul class="pull-right">
                                                <li>
                                                    <a href="#"><i class="flaticon-favorite"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="flaticon-multimedia"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                    <?php endif; ?>
                    <!-- properties 2 end -->
                    <!-- Page navigation start -->
                    <?php get_template_part( 'template-parts/navigation/pagination-box' ); ?>
                    <!-- Page navigation end-->
                </div>
                <div class="col-lg-4 col-md-12">
                    <?php get_sidebar( 'right' ); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>