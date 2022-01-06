<div class="post-meta clearfix"> 
  <ul> 
    <li> <strong><a href="#"><?php the_author_meta( 'display_name' ); ?></a></strong> 
    </li>     
    <li class="mr-0"> <span><?php echo get_the_time( 'M d, Y' ) ?></span> 
    </li>     
    <?php if ( get_comments_number() ) : ?>
      <li class="float-right mr-0"> <a href="#"><i class="fa fa-commenting-o"></i></a> 
        <?php printf( _nx( '1', '%1$s', get_comments_number(), 'comments title', 'pam' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?> 
      </li>
    <?php endif; ?> 
    <li class="float-right"> <a href="#"><i class="fa fa-pencil-square-o"></i></a> <span><?php echo count_user_posts( get_the_author_meta( 'ID', false ), 'post', true) ?></span> 
    </li>     
  </ul>   
</div>