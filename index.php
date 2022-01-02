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
        <div class="search-section-area">
            <?php get_template_part( 'template-parts/section/section-search' ); ?>
        </div>
    </div>
</div>
<?php if ( get_theme_mod( 'display_pam_sc_features' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-featured' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_service' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-services_2' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_categories' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-categories' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_counters' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-counters' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_team' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area', 'team-2' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_testemonials' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-testemonial-3' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_blog' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-blog' ); ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_partners' ) ) : ?>
    <?php get_template_part( 'template-parts/content/content-area-partners' ); ?>
<?php endif; ?>

<?php get_footer(); ?>