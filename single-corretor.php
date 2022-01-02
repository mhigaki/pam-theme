<?php get_header(); ?>

<div class="sub-banner"> 
    <div class="container"> 
        <div class="page-name"> 
            <?php if ( single_post_title( '', false )  ) : ?>
                <h1><?php wp_title( '' ); ?></h1>
            <?php endif; ?> 
        </div>                     
    </div>                 
    <div class="page-info"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <div class="breadcrumb-area"> 
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, '<i class="fa  fa-home"></i> Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-separator="span" cms-breadcrumbs-home cms-breadcrumbs-home-name="<i class=&quot;fa  fa-home&quot;></i> Home" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)"> 
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
                                <?php echo get_field( 'telefone_celular' ); ?>
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
<div <?php post_class( 'agent-page content-area' ); ?>> 
    <div class="container"> 
        <!-- Heading -->                     
        <h1 class="heading-2"><?php _e( 'Detalhes do Corretor', 'pam' ); ?></h1> 
        <div class="row"> 
            <div class="col-lg-8"> 
                <div <?php post_class( 'row team-4' ); ?> id="corretor-<?php the_ID(); ?>"> 
                    <div class="col-xl-5 col-lg-5 col-md-5 col-pad "> 
                        <div class="photo"> 
                            <?php echo PG_Image::getPostImage( null, 'agent', array(
                                  'class' => 'img-fluid',
                                  'sizes' => '(max-width: 320px) 84vw, (max-width: 640px) 508px, (max-width: 768px) 70vw, (max-width: 1024px) 29vw, (max-width: 1280px) 303px, 303px',
                                  'loading' => 'lazy'
                            ), null, null ) ?> 
                        </div>                                     
                    </div>                                 
                    <div class="col-xl-7 col-lg-7 col-md-7 col-pad align-self-center"> 
                        <div class="detail"> 
                            <h4 class="text-uppercase"><p><?php echo get_post_meta( get_the_ID(), 'creci_numero', true ); ?></p> </h4> 
                            <h3 class="text-capitalize"> <a href="#"><?php single_post_title(); ?></a> </h3> 
                            <div class="contact"> 
                                <ul> 
                                    <li> <span><i class="flaticon-location"></i></span> 
                                        <?php if ( get_field( 'endereco' ) ) : ?>
                                            <?php echo get_field( 'endereco' ); ?>
                                        <?php endif; ?> 
                                    </li>                                                 
                                    <li> <span><i class="flaticon-envelope"></i></span> 
                                        <?php echo get_post_meta( get_the_ID(), 'e-mail', true ); ?> 
                                    </li>                                                 
                                    <?php if ( get_field( 'telefone_celular' ) ) : ?>
                                        <li> <span><i class="lnr lnr-smartphone"></i></span> 
                                            <?php echo get_post_meta( get_the_ID(), 'telefone_celular', true ); ?> 
                                        </li>
                                    <?php endif; ?> 
                                    <?php if ( get_field( 'telefone_fixo' ) ) : ?>
                                        <li> <i class="fa fa-phone-square"></i> 
                                            <?php echo get_post_meta( get_the_ID(), 'telefone_fixo', true ); ?> 
                                        </li>
                                    <?php endif; ?>                                                  
                                </ul>                                             
                            </div>                                         
                            <ul class="social-list clearfix"> 
                                <li> 
                                    <?php if ( get_field( 'facebook' ) ) : ?>
                                        <a class="facebook-bg" href="<?php echo esc_url( get_field( 'facebook' ) ); ?>"><i class="fa fa-facebook"></i></a>
                                    <?php endif; ?> 
                                </li>                                             
                                <li> 
                                    <?php if ( get_field( 'twitter' ) ) : ?>
                                        <a class="twitter-bg" href="<?php echo esc_url( get_field( 'twitter' ) ); ?>"><i class="fa fa-twitter"></i></a>
                                    <?php endif; ?> 
                                </li>                                             
                                <li> 
                                    <?php if ( get_field( 'instagram' ) ) : ?>
                                        <a class="pinterest-bg" href="<?php echo esc_url( get_field( 'instagram' ) ); ?>"><i class="fa fa-instagram"></i></a>
                                    <?php endif; ?> 
                                </li>                                             
                                <li> 
                                    <?php if ( get_field( 'linkedin' ) ) : ?>
                                        <a class="linkedin-bg" href="<?php echo esc_url( get_field( 'linkedin' ) ); ?>"><i class="fa fa-linkedin"></i></a>
                                    <?php endif; ?> 
                                </li>                                             
                            </ul>                                         
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="agent-biography"> 
                    <h3 class="heading-2"><?php _e( 'Biografia | Resumo', 'pam' ); ?></h3>
                    <p><?php the_content(); ?></p>                                                                                                    
                </div>
            </div>                         
            <div class="col-lg-4"> 
                <?php get_sidebar( 'corretor' ); ?> 
            </div>                         
        </div>                     
    </div>                 
</div>                         

<?php get_footer(); ?>