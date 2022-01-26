<?php
/*
 Template Name: galpao
 Template Post Type: properties
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/banner', 'sub' ); ?>
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php get_template_part( 'template-parts/content/content-detail-slider-full mb-40' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Heading properties start -->
                <?php get_template_part( 'template-parts/content/content-area', 'properties-galpao' ); ?>
                <!-- Heading properties end -->
                <!-- Advanced search start -->
                <!-- Advanced search end -->
                <!-- Properties description start -->
                <!-- Properties description end -->
                <!-- Properties condition start -->
                <!-- Properties condition end -->
                <!-- Properties amenities start -->
                <!-- Properties amenities end -->
                <!-- Floor plans start -->
                <!-- Floor plans end -->
                <!-- Inside properties start -->
                <!-- Inside properties end -->
                <!-- Location start -->
                <!-- Location end -->
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_template_part( 'sidebar', 'right' ); ?>
            </div>
        </div>
        <!-- Similar Properties start -->
        <!-- Similar Properties end -->
    </div>
</div>            

<?php get_footer(); ?>