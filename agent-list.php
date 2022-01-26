<?php
/*
 Template Name: Corretores
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/content-area-banner' ); ?>
<div class="our-team-3 content-area">
    <div class="container">
        <div class="main-title">
            <h1><?php _e( 'Agent List', 'pam' ); ?></h1>
            <p><?php _e( 'Meet out small team that make those great products.', 'pam' ); ?></p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row team-3">
                    <div class="col-xl-4 col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <?php echo PG_Image::getPostImage( null, 'large', array(
                                  'class' => 'img-fluid'
                            ), 'both', null ) ?>
                            <ul class="social-list clearfix">
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12 col-pad align-self-center">
                        <div class="detail">
                            <h5><?php _e( 'Creative Director', 'pam' ); ?></h5>
                            <h4> <a href="agent-detail.html"><?php the_title(); ?></a> </h4>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>