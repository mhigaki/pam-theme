<?php
/*
 The template for displaying: 404 Error Pages
 */
?>
<?php get_header(); ?>

<?php if ( is_404() ) : ?>
    <?php get_template_part( 'template-parts/content/content-area', 'error-404' ); ?>
<?php endif; ?>

<?php get_footer(); ?>