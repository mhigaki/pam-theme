<?php get_header(); ?>

<div class="blog-banner"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-12"> 
                <h2><?php echo esc_html( get_search_query( false ) ); ?></h2>                              
                <p><?php echo $wp_query->found_posts.' resultado(s) encontrado(s).'; ?></p> 
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="blog-body content-area"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-8 col-md-12"> 
                <?php if ( have_posts() ) : ?>
                    <div class="row"> 
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div <?php post_class( 'col-lg-6 col-md-6' ); ?> id="post-<?php the_ID(); ?>"> 
                                <div class="blog-1 blog-big"> 
                                    <?php echo PG_Image::getPostImage( null, 'large', array(
                                          'class' => 'img-fluid'
                                    ), 'both', null ) ?> 
                                    <div class="blog-photo"> 
                                        <div class="profile-user"> 
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?> 
                                        </div>                                                     
                                    </div>                                                 
                                    <div class="detail"> 
                                        <div class="post-meta clearfix"> 
                                            <ul> 
                                                <li> <strong><?php echo get_the_author_meta( 'display_name', false ) ?></strong> 
                                                </li>                                                             
                                                <li class="mr-0"> <span><?php echo get_the_time( get_option( 'date_format' ) ) ?></span> 
                                                </li>                                                                                                                                                                                       
                                            </ul>                                                         
                                        </div>                                                     
                                        <h3> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3> 
                                        <p><?php echo get_the_excerpt(); ?></p>                                                                                                                                                                                                                     
                                    </div>                                                 
                                </div>                                             
                            </div>
                        <?php endwhile; ?>                                                                                                                                                                                                                                                                    
                    </div>
                <?php endif; ?> 
            </div>                         
            <div class="col-lg-4 col-md-12"> 
                <?php get_template_part( 'sidebar', 'right' ); ?> 
            </div>                         
        </div>                     
    </div>                 
</div>                         

<?php get_footer(); ?>