<div class="blog-1 blog-big"> 
  <div class="blog-photo"> 
    <?php echo PG_Image::getPostImage( null, 'large', array(
        'class' => 'img-fluid'
    ), null, null ) ?>
    <div class="profile-user"> 
      <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?> 
    </div>     
  </div>   
  <div class="detail"> 
    <?php get_template_part( 'template-parts/post/post', 'meta' ); ?> 
    <h3> <a href="blog-single-sidebar-right.html" rel="nofollow noreferrer noopener"><?php the_title(); ?></a> </h3> 
    <p><?php the_content(); ?></p> 
  </div>   
  <?php if ( !is_home() ) : ?>
    <div class="row clearfix"> 
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
        <div class="blog-tags"> <span><?php _e( 'Tags', 'pam' ); ?></span> 
          <?php $terms = get_the_terms( get_the_ID(), 'post_tag' ) ?>
          <?php if( !empty( $terms ) ) : ?>
            <?php foreach( $terms as $term ) : ?>
              <a href="<?php echo esc_url( get_term_link( $term, 'post_tag' ) ) ?>"><?php echo $term->name; ?></a>
            <?php endforeach; ?>
          <?php endif; ?>                       
        </div>         
      </div>       
      <?php if ( get_theme_mod( 'share_social_list' ) ) : ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
          <div class="blog-social-list"> <span><?php _e( 'Share', 'pam' ); ?></span> 
            <?php if ( get_theme_mod( 'pam_sc_header_facebook' ) ) : ?>
              <a href="<?php echo get_theme_mod( 'pam_sc_header_facebook', '#' ); ?>" class="facebook-bg"> <i class="fa fa-facebook"></i> </a>
            <?php endif; ?> 
            <?php if ( get_theme_mod( 'pam_sc_header_twitter' ) ) : ?>
              <a href="<?php echo get_theme_mod( 'pam_sc_header_twitter', '#' ); ?>" class="twitter-bg"> <i class="fa fa-twitter"></i> </a>
            <?php endif; ?>              
            <?php if ( get_theme_mod( 'pam_sc_header_linkedin' ) ) : ?>
              <a href="<?php echo get_theme_mod( 'pam_sc_header_linkedin', '#' ); ?>" class="linkedin-bg"> <i class="fa fa-linkedin"></i> </a>
            <?php endif; ?> 
            <?php if ( get_theme_mod( 'pam_sc_header_instagram' ) ) : ?>
              <a href="<?php echo get_theme_mod( 'pam_sc_header_instagram', '#' ); ?>" class="pinterest-bg"> <i class="fa fa-pinterest"></i> </a>
            <?php endif; ?> 
          </div>           
        </div>
      <?php endif; ?> 
    </div>
  <?php endif; ?> 
</div>