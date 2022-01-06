<?php get_header(); ?>

<?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'banner' ) : null; ?>
<div class="sub-banner" style="background-size: cover;background-image:url('https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDI3fHxyZWFsJTIwc3RhdGV8ZW58MHx8fHwxNjMzODQ4MzQ3&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=1920&h=253&fit=crop');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> 
    <div class="container"> 
        <div class="page-name"> 
            <h1><?php wp_title( '' ); ?></h1> 
        </div>                     
    </div>                 
    <div class="page-info"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-4"> 
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
                <div class="col-md-8"> 
                    <div class="contact-info"> 
                        <ul> 
                            <li> <i class="fa fa-phone"></i>
                                <?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?> 
                            </li>                                         
                            <li> <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contate-nos', 'pam' ); ?></a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="about-real-estate"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12"> 
                <div class="about-slider-box simple-slider"> 
                    <?php echo get_field( 'slide_about' ); ?>                                  
                </div>                             
            </div>                         
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12"> 
                <div class="about-text"> 
                    <h3><?php the_title( '<span>', '</span>' ); ?></h3> 
                    <?php the_content(); ?>                                                                   
                </div>                             
            </div>                         
        </div>                     
    </div>                 
</div>             
<?php get_template_part( 'template-parts/content/content-area', 'team-3' ); ?>             

<?php get_footer(); ?>