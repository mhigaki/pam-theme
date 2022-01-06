<div class="blog content-area"> 
  <div class="container"> 
    <!-- Main title -->     
    <div class="main-title"> 
      <h1><?php echo get_theme_mod( 'pam_sc_blog_main_title_h1', __( 'Latest news', 'pam' ) ); ?></h1> 
      <p><?php echo get_theme_mod( 'pam_sc_blog_main_title_p', __( 'Check out some recent news posts.', 'pam' ) ); ?></p> 
    </div>     
    <?php
      $post_query_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'date'
      )
    ?>
    <?php $post_query = new WP_Query( $post_query_args ); ?>
    <?php if ( $post_query->have_posts() ) : ?>
      <div class="row wow fadeInUp delay-04s"> 
        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
          <?php PG_Helper::rememberShownPost(); ?>
          <div <?php post_class( 'col-lg-4 col-md-6' ); ?> id="post-<?php the_ID(); ?>"> 
            <div class="blog-1"> 
              <div class="blog-photo"> 
                <?php echo PG_Image::getPostImage( null, 'blog_fig', array(
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
    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
    <?php endif; ?> 
  </div>   
</div>