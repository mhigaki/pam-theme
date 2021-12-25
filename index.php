<?php
/*
 Template Name: Front-Page
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/content-area', 'banner' ); ?>
<div class="bg-grea d-xl-none search-area-2 search-section">
    <div class="container">
        <?php get_template_part( 'template-parts/section/section', 'search' ); ?>
    </div>
</div>
<?php get_template_part( 'template-parts/content/content-area', 'featured' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'services-2' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'categories' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'counters' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'team-2' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'testemonial-3' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'blog' ); ?>
<?php get_template_part( 'template-parts/content/content-area', 'partners' ); ?>

<?php get_footer(); ?>