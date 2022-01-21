
        </main>
        <!-- Footer start -->
        <?php if ( ! is_404() ) : ?>
            <footer class="footer site-footer">
                <div class="container footer-inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-item">
                                <h4><?php _e( 'CONTATE-NOS', 'pam' ); ?></h4>
                                <ul class="contact-info">
                                    <li>
                                        <?php _e( 'Endereço:', 'pam' ); ?>
                                        <?php echo get_theme_mod( 'pam_sc_header_endereco' ); ?>
                                    </li>
                                    <li>
                                        <?php _e( 'Email:', 'pam' ); ?> <a href="mailto:<?php echo get_theme_mod( 'pam_sc_header_email' ); ?>"><?php echo get_theme_mod( 'pam_sc_header_email' ); ?></a>
                                    </li>
                                    <li>
                                        <?php _e( 'Phone:', 'pam' ); ?> <a href="tel:<?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?>"><?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?></a>
                                    </li>
                                </ul>
                                <ul class="clearfix social-list"> 
                                    <li>
                                        <a class="facebook" rel="nofollow noreferrer noopener" href="<?php echo get_theme_mod( 'pam_sc_header_facebook', '#' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod( 'pam_sc_header_twitter', '#' ); ?>" class="twitter" rel="nofollow noreferrer noopener" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod( 'pam_sc_header_linkedin', '#' ); ?>" class="linkedin" rel="nofollow noreferrer noopener" target="_blank"><i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod( 'pam_sc_header_instagram', '#' ); ?>" class="instagram" rel="nofollow noreferrer noopener" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="d-none"> <a href="#" class="rss"><i class="lnr lnr-lock"></i></a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-item">
                                <h4> <?php _e( 'LINKS ÚTEIS', 'pam' ); ?> </h4>
                                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                          <a {ATTRS}><i class="fa fa-angle-right"></i>{TITLE}</a>
                                                        </li>';
                                        wp_nav_menu( array(
                                          'container' => '',
                                          'theme_location' => 'footer',
                                          'items_wrap' => '<ul class="%2$s links" id="%1$s">%3$s</ul>',
                                          'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-item clearfix">
                                <h4> <?php _e( 'Gallery', 'pam' ); ?> </h4>
                                <ul class="gallery">
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-1.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-2.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-3.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-4.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-6.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-5.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-7.jpg" alt="sub-properties"/> </a>
                                    </li>
                                    <li><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/sub-properties/sub-properties-8.jpg" alt="sub-properties"/> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="clearfix footer-item" id="subscribe_mailer_id">
                                <h4><?php _e( 'Newsletter', 'pam' ); ?></h4>
                                <div class="Subscribe-box">
                                    <p><?php _e( 'Assine e receberá periodicamente as nossas atualizações, novidades e dicas.', 'pam' ); ?></p>
                                    <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                                    <?php $mailer->process( array(
                                          'form_id' => 'subscribe_mailer_id',
                                          'send_to_email' => true
                                    ) ); ?>
                                    <?php if( !$mailer->processed || $mailer->error) : ?>
                                        <form action="<?php echo '#subscribe_mailer_id'; ?>" method="post" id="subscribe" onsubmit="event.stopImmediatePropagation();event.stopPropagation();">
                                            <p> <input class="form-contact" type="text" name="Seu Nome" placeholder="Seu Nome" value="<?php echo ( isset( $_POST['Seu Nome'] ) ? $_POST['Seu Nome'] : '' ); ?>"/> </p>
                                            <p> <input class="form-contact" type="text" name="E-Mail" placeholder="Seu E-mail" value="<?php echo ( isset( $_POST['E-Mail'] ) ? $_POST['E-Mail'] : '' ); ?>"/> </p>
                                            <p> <button class="btn btn-block button-theme" type="submit">
                                                    <?php _e( 'Quero Receber', 'pam' ); ?>
                                                </button> </p>
                                            <input type="hidden" name="subscribe_mailer_id" value="1"/>
                                        </form>
                                    <?php endif; ?>
                                    <?php if( $mailer->processed ) : ?>
                                        <?php echo $mailer->message; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy"><?php echo the_copyright(); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end -->
            <!-- Full Page Search -->
            <div id="full-page-search">
                <button type="button" class="close">×</button>
                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" value="<?php the_search_query(); ?>" placeholder="Procurando por algo" name="s" id="txtsearch"/>
                    <button class="btn btn-sm button-theme" id="searchsubmit" type="submit" value="&lt;?php esc_attr_e( 'Search', 'pam' ); ?&gt;" name="submit">
                        <?php _e( 'Procurar', 'pam' ); ?>
                    </button>
                </form>
            </div>
        <?php endif; ?>
        <!-- Full Page Search -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.0.min.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
