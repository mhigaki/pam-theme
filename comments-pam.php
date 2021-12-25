<div class="comments-area" id="comments"> 
  <h3 class="heading-2"><?php printf( _nx( '1 comentário', '%1$s comentários', get_comments_number(), 'comments title', 'pam' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3> 
  <ol class="comment-list">
    <?php wp_list_comments( array(
        'max_depth' => '2',
        'style' => 'ul',
        'callback' => 'pam_comments',
        'per_page' => '3',
        'avatar_size' => '60',
        'format' => 'html5'
    ) ); ?>
  </ol>   
  <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?> 
    <p class="no-comments"><?php _e( 'Comments are closed.', 'pam'); ?></p> 
  <?php } ?> 
  <?php comment_form(); ?> 
</div>