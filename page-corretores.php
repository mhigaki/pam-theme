<?php
/*
 The template for displaying: Page Corretores
 */
?>
<?php get_header(); ?>

<?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
<div class="sub-banner" style="background-image:url('http://pam.test/wp-content/themes/pam/img/sub-banner.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> 
    <div class="container"> 
        <div class="page-name"> 
            <h1><?php wp_title( '' ); ?></h1> 
        </div>                     
    </div>                 
    <div class="page-info"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <div class="breadcrumb-area"> 
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, '<i class="fa  fa-home"></i> Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)" cms-breadcrumbs-home-name="<i class=&quot;fa  fa-home&quot;></i> Home"> 
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
                <div class="col-md-6"> 
                    <div class="contact-info"> 
                        <ul> 
                            <li>
                                <i class="fa fa-phone"></i>
                                <?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?> 
                            </li>                                         
                            <li> <a class="btn btn-md button-theme" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'contato', 'page' ) ) ); ?>"><?php _e( 'Contate-nos', 'pam' ); ?></a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="our-team-2 content-area"> 
    <div class="container"> 
        <!-- Main title -->                     
        <div class="main-title"> 
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?> 
        </div>                     
        <?php
            $corretor_query_args = array(
              'post_type' => 'corretor',
              'posts_per_page' => 6,
              'order' => 'ASC',
              'orderby' => 'date'
            )
        ?>
        <?php $corretor_query = new WP_Query( $corretor_query_args ); ?>
        <?php if ( $corretor_query->have_posts() ) : ?>
            <div class="row"> 
                <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div <?php post_class( 'col-xl-4 col-lg-4 col-md-6 col-sm-6' ); ?> id="post-<?php the_ID(); ?>"> 
                        <div class="team-2"> 
                            <div class="team-photo"> <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo PG_Image::getPostImage( null, 'agents', array(
                                          'class' => 'img-fluid',
                                          'sizes' => '(max-width: 320px) 84vw, (max-width: 640px) 240px, (max-width: 768px) 43vw, (max-width: 1024px) 34vw, (max-width: 1280px) 350px, 350px',
                                          'loading' => 'lazy'
                                    ), null, null ) ?> </a> 
                            </div>                                         
                            <div class="team-details"> 
                                <h6><b><?php echo get_field( 'creci_numero' ); ?></b></h6> 
                                <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h5> 
                                <p><?php echo wp_trim_words( get_the_content(), 20, ' ... ' ); ?></p> 
                                <ul class="social-list clearfix"> 
                                    <?php if ( get_field( 'facebook' ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_field( 'facebook' ); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    <?php endif; ?> 
                                    <?php if ( get_field( 'twitter' ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_field( 'twitter' ); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                    <?php endif; ?> 
                                    <?php if ( get_field( 'instagram' ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_field( 'instagram' ); ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    <?php endif; ?> 
                                    <?php if ( get_field( 'linkedin' ) ) : ?>
                                        <li>
                                            <?php if ( get_field( 'linkedin' ) ) : ?>
                                                <a href="<?php echo get_field( 'field2' ); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                            <?php endif; ?>
                                        </li>
                                    <?php endif; ?> 
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

<?php get_footer(); ?>