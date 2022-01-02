<?php
/*
 The template for displaying: Category Page
 */
?>
<?php get_header(); ?>

<div class="blog-banner"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-12"> 
                <h2><?php echo single_cat_title(); ?></h2>
                <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, '<i class="fa  fa-home"></i> Home'); ?>
                <?php if( !empty( $breadcrumbs ) ) : ?>
                    <ul class="breadcrumbs" cms-breadcrumbs-home-name="<i class=&quot;fa  fa-home&quot;></i> Home" cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item-name=".active" cms-breadcrumbs-home cms-breadcrumbs-last-item=".active"> 
                        <li>
                            <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
                                <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>" rel="nofollow noreferrer noopener"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                <?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
                                    <span>/</span>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </li>                                     
                        <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
                        <li class="active">
                            <?php echo $breadcrumb[ 'name' ]; ?>
                        </li>                                     
                    </ul>
                <?php endif; ?> 
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="categories-body content-area"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-8 col-md-12"> 
                <?php if ( have_posts() ) : ?>
                    <div class="row"> 
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-6 col-md-6"> 
                                <div class="blog-1" id="post-<?php the_ID(); ?>"> 
                                    <div class="blog-photo"> 
                                        <?php echo PG_Image::getPostImage( null, array(0,170),true, array(
                                              'class' => 'img-fluid',
                                              'sizes' => 'max-width(320px) 85vw, max-width(640px) 510px, max-width(768px) 70vw, max-width(1024px) 34vw, max-width(1280px) 350px, 350px'
                                        ), null, null ) ?> 
                                        <div class="profile-user"> 
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?> 
                                        </div>                                                     
                                    </div>                                                 
                                    <div class="detail"> 
                                        <?php get_template_part( 'template-parts/post/post', 'meta' ); ?> 
                                        <h3> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3> 
                                        <p><?php echo wp_trim_words( get_the_content(), 20, ' ... ' ); ?></p> 
                                    </div>                                                 
                                </div>                                             
                            </div>
                        <?php endwhile; ?>                                                                                                                                                                                                                                                                    
                        <?php get_template_part( 'template-parts/navigation/pagination', 'box' ); ?> 
                    </div>
                <?php endif; ?> 
            </div>                         
            <div class="col-lg-4 col-md-12"> 
                <?php get_sidebar( 'right' ); ?> 
            </div>                         
        </div>                     
    </div>                 
</div>                         

<?php get_footer(); ?>