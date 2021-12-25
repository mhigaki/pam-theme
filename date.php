<?php
/*
 The template for displaying: Archive Pages.
 */
?>
<?php get_header(); ?>

            <div class="blog-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><?php echo the_archive_title( ) ?></h2>
                            <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, '<i class="fa  fa-home"></i> Home'); ?>
                            <?php if( !empty( $breadcrumbs ) ) : ?>
                                <ul class="breadcrumbs" cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item=".active" cms-breadcrumbs-home-name="<i class=&quot;fa  fa-home&quot;></i> Home">
                                    <li>
                                        <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
                                            <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                            <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                            <?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
                                                <span>/</span>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </li>
                                    <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
                                    <li class="active">
</li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-body content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <!-- Option bar start -->
                            <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                                <div class="row">
                                    <div class="cod-pad offset-5 offset-md-5">
</div>
                                    <div class="col-md-7 col-sm-7 col-xs-10 cod-pad">
                                        <?php the_widget( 'WP_Widget_Archives', array(
                                              'title' => __( 'Ordenar por:', 'pam' ),
                                              'count' => true,
                                              'dropdown' => true
                                            ), array(
                                              'before_widget' => '<div class="sorting-options2">',
                                              'after_widget' => '</div>',
                                              'before_title' => '<span>',
                                              'after_title' => '<span>'
                                        ) ); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Option bar end -->
                            <!-- Property box 2 start -->
                            <?php
                                $por_per_date_args = array(
                                  'post_type' => 'post',
                                  'post_status' => 'publish',
                                  'posts_per_page' => 4,
                                  'posts_per_archive_page' => '4',
                                  'order' => 'DESC',
                                  'orderby' => 'date'
                                )
                            ?>
                            <?php $por_per_date = new WP_Query( $por_per_date_args ); ?>
                            <?php if ( $por_per_date->have_posts() ) : ?>
                                <div class="row">
                                    <?php $por_per_date_item_number = 0; ?>
                                    <?php while ( $por_per_date->have_posts() && $por_per_date_item_number++ < 4 ) : $por_per_date->the_post(); ?>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="blog-1" id="post-<?php the_ID(); ?>">
                                                <div class="blog-photo">
                                                    <?php echo PG_Image::getPostImage( null, 'large', array(
                                                          'class' => 'img-fluid',
                                                          'sizes' => '(max-width: 320px) 84vw, (max-width: 640px) 510px, (max-width: 768px) 70vw, (max-width: 1024px) 34vw, (max-width: 1280px) 350px, 350px'
                                                    ), 'both', null ) ?>
                                                    <div class="profile-user">
                                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?>
                                                    </div>
                                                </div>
                                                <div class="detail">
                                                    <?php get_template_part( 'template-parts/post/post', 'meta' ); ?>
                                                    <h3> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 15, ' ... ' ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            <?php endif; ?>
                            <!-- properties 2 end -->
                            <!-- Page navigation start -->
                            <?php get_template_part( 'template-parts/navigation/pagination', 'box' ); ?>
                            <!-- Page navigation end-->
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <?php get_sidebar( 'right' ); ?>
                        </div>
                    </div>
                </div>
            </div>            

<?php get_footer(); ?>