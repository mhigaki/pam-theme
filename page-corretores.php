<?php
/*
 The template for displaying: Pagina Equipe
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
                            <li><i class="fa fa-phone"></i>
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
<?php get_template_part( 'template-parts/content/content-area', 'team-3' ); ?>             

<?php get_footer(); ?>