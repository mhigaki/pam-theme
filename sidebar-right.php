<div class="sidebar-right"> 
  <!-- Search box -->   
  <div class="widget search-box"> 
    <h3 class="sidebar-title"><?php _e( 'Pesquisa', 'pam' ); ?></h3> 
    <form class="form-inline form-search" method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform"> 
      <div class="form-group"> 
        <label class="sr-only" for="textsearch2">
          <?php _e( 'Looking for something', 'pam' ); ?>
        </label>         
        <input type="text" class="form-control" id="textsearch2" placeholder="Procurando por algo" name="s" value="<?php the_search_query(); ?>"/> 
      </div>       
      <button type="submit" class="btn" id="searchsubmit" name="submit" value="<?php esc_attr_e( 'Search', 'pam' ); ?>"> <i class="fa fa-search"></i> 
      </button>       
    </form>     
  </div>   
  <!-- Popular posts start -->   
  <?php
    $post_recents_args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'ignore_sticky_posts' => true,
      'order' => 'DESC',
      'orderby' => 'date'
    )
  ?>
  <?php $post_recents = new WP_Query( $post_recents_args ); ?>
  <?php if ( $post_recents->have_posts() ) : ?>
    <div class="widget popular-posts"> 
      <h3 class="sidebar-title"><?php _e( 'Postagens Recentes', 'pam' ); ?></h3> 
      <?php while ( $post_recents->have_posts() ) : $post_recents->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class( 'media' ); ?> id="post-<?php the_ID(); ?>"> 
          <div class="media-left"> 
            <?php echo PG_Image::getPostImage( null, 'thumbnail', array(
                'class' => 'media-object',
                'sizes' => '(max-width: 1280px) 70px, 70px'
            ), 'both', null ) ?> 
          </div>           
          <div class="media-body"> 
            <h3 class="media-heading"> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3> 
            <?php the_modified_date( 'M d, Y', '<p>', '</p>' ); ?>              
          </div>           
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>               
    </div>
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
  <?php endif; ?> 
  <!-- Posts by Start -->   
  <div class="posts-by-category widget"> 
    <h3 class="sidebar-title"><?php _e( 'Categorias', 'pam' ); ?></h3> 
    <ul class="list-unstyled list-cat"> 
      <?php wp_list_categories( array(
          'orderby' => 'name',
          'order' => 'ASC',
          'style' => 'list',
          'use_desc_for_title' => false,
          'exclude' => '14,2,16',
          'hierarchical' => false,
          'title_li' => '',
          'show_option_none' => 'Sem Categorias',
          'number' => '5',
          'taxonomy' => 'category'
      ) ); ?>                                    
    </ul>     
  </div>   
  <!-- Tags box Start -->   
  <div class="widget tags-box"> 
    <h3 class="sidebar-title"><?php _e( 'Tags', 'pam' ); ?></h3> 
    <ul class="tags"> 
      <?php wp_tag_cloud(array(
          'largest' => '14',
          'number' => '10',
          'format' => 'list',
          'orderby' => 'name',
          'order' => 'ASC',
          'taxonomy' => 'post_tag'
      )); ?>                                                         
    </ul>     
  </div>   
  <!-- Latest reviews Start -->      
</div>