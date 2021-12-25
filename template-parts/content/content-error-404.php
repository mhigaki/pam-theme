<div class="error404-content">
  <div class="error404">
    <?php _e( '404', 'pam' ); ?>
  </div>
  <div class="nobottomborder">
    <h4><?php _e( 'Ooopps.! The Page you were looking for, couldn\'t be found.', 'pam' ); ?></h4>
    <p><?php _e( 'Experimente a pesquisa abaixo para encontrar páginas correspondentes:', 'pam' ); ?></p>
  </div>
  <div class="coming-form clearfix">
    <form class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform1">
      <input type="text" class="form-control" placeholder="Procurando por algo" value="<?php the_search_query(); ?>" id="textsearch2" name="s"/>
      <button type="submit" class="btn" id="searchsubmit" name="submit" value="<?php esc_attr_e( 'Search', 'pam' ); ?>">
        <?php _e( 'Procurar', 'pam' ); ?>
      </button>
    </form>
  </div>
</div>