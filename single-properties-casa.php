<?php
/*
 Template Name: casa
 Template Post Type: properties
*/
?>
<?php get_header(); ?>

<div class="sub-banner" src="<?php echo esc_url( get_header_image() ); ?>"> 
    <div class="container"> 
        <div class="page-name"> 
            <h1><?php the_title(); ?></h1> 
        </div>                     
    </div>                 
    <div class="page-info"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <div class="breadcrumb-area"> 
                        <ul> 
                            <li> <a href="index-2.html"><?php _e( 'Index', 'pam' ); ?></a> 
                            </li>                                         
                            <li>
                                <span>/</span>
                                <span><?php the_terms( '0', 'properties_types' ); ?></span>
                            </li>                                         
                        </ul>                                     
                    </div>
                    <!-- Breadcrumbs -->                                 
                    <!-- Breadcrumbs -->                                 
                </div>                             
                <div class="col-md-6"> 
                    <div class="contact-info"> 
                        <ul> 
                            <li>
                                <i class="fa fa-phone"></i> <span></span>
                                <?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?>
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
<div class="properties-details-page content-area-7"> 
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php get_template_part( 'template-parts/content/content', 'detail-slider-full mb-40' ); ?>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-8 col-md-12 col-xs-12">                              
                <?php get_template_part( 'template-parts/content/content-area', 'properties-casa' ); ?>
            </div>                         
            <div class="col-lg-4 col-md-12"> 
                <?php get_sidebar( 'right' ); ?> 
            </div>                         
        </div>                     
    </div>                 
</div>                         

<?php get_footer(); ?>