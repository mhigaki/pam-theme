<?php
/*
 Template Name: login
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- Logo --><a href="<?php echo esc_url( wp_login_url( '1212121' ) ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'pam_brand_logo', esc_url( get_template_directory_uri() . '/img/logos/white-logo.png' ) ), 'large' ) ?>" class="cm-logo" alt="black-logo"/> </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3><?php _e( 'Faça login em sua conta', 'pam' ); ?></h3>
                        <!-- Form start -->
                        <?php wp_login_form( array(
                              'redirect' => 'http://pam.laragon:8080/wp-login.php',
                              'form_id' => 'loginform',
                              'label_password' => __( 'Password', 'pam' ),
                              'label_remember' => __( 'Remember', 'pam' ),
                              'label_log_in' => __( 'Log In', 'pam' ),
                              'id_username' => 'user_login',
                              'id_password' => 'user_pass',
                              'id_remember' => 'rememberme',
                              'id_submit' => 'wp-submit',
                              'remember' => true,
                              'value_remember' => true
                        )); ?>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer"><span><?php _e( 'Não tem conta?', 'pam' ); ?> <?php wp_register(); ?></span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>