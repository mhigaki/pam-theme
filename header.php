<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Google Tag Manager -->
        <!-- End Google Tag Manager -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="author" content="MNH"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <!-- Google Tag Manager (noscript) -->
        <!-- End Google Tag Manager (noscript) -->
        <div class="page_loader"></div>
        <?php if ( ! is_404() ) : ?>
            <header class="site-header">
                <div class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-7">
                                <div class="list-inline"><a href="tel:<?php echo str_replace(' ', '', get_theme_mod( 'pam_sc_header_telefone' )); ?>"><i class="fa fa-phone"></i> <?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?> </a><a href="mailto:<?php echo str_replace(' ', '', get_theme_mod( 'pam_sc_header_email' )); ?>"><i class="fa fa-envelope"> </i> <?php echo str_replace(' ', '', get_theme_mod( 'pam_sc_header_email' )); ?> </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-5">
                                <ul class="pull-right top-social-media">
                                    <li><a class="facebook" rel="nofollow noreferrer noopener" href="<?php echo esc_url( get_theme_mod( 'pam_sc_header_facebook' ) ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'pam_sc_header_twitter' ) ); ?>" class="twitter" rel="nofollow noreferrer noopener" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'pam_sc_header_linkedin' ) ); ?>" class="linkedin" rel="nofollow noreferrer noopener" target="_blank"><i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'pam_sc_header_instagram' ) ); ?>" class="instagram" rel="nofollow noreferrer noopener" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="d-none"> <a href="#" class="rss"><i class="lnr lnr-lock"></i></a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light"><a class="navbar-brand logo" href="<?php echo esc_url( home_url() ); ?>"> <?php if( get_theme_mod( 'custom_logo' ) ) : ?><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'custom_logo', esc_url( get_template_directory_uri() . '/img/logos/logo-site.svg' ) ), 'full' ) ?>" class="style-svg" width="130" height="40"/><?php endif; ?> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php wp_nav_menu( array(
                                      'menu' => 'primary',
                                      'menu_class' => 'navbar-nav ml-auto',
                                      'menu_id' => 'navbarSupportedContent',
                                      'container' => '',
                                      'depth' => '2',
                                      'theme_location' => 'primary',
                                      'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                      'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        <?php endif; ?>
        <main>