<?php
/*
 The template for displaying: 404 Error Pages
 */
?>
<?php get_header(); ?>

<?php if ( is_404() ) : ?>
    <div class="pages-404 overview-bgi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php get_template_part( 'template-parts/content/content', 'error-404' ); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>