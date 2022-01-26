<div class="pages-404-2 content-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7 col-md-12">
        <div class="error404-content">
          <div class="error404">
            <?php _e( '404', 'pam' ); ?>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-5 col-md-12">
        <div class="nobottomborder">
          <h1><?php _e( '‎Ooops, esta página não pode ser encontrada!‎', 'pam' ); ?></h1>
          <p><?php _e( '‎A página que você está procurando pode ter sido removida, teve seu nome alterado ou está temporariamente indisponível.‎', 'pam' ); ?></p>
        </div>
        <div class="row">
          <div class="col-xl-9 col-lg-10 col-md-8 col-sm-10 col-xs-10">
            <div class="coming-form clearfix">
              <div class="hr"></div>
              <p><?php _e( 'Por favor, tente procurar novamente.‎', 'pam' ); ?></p>
              <form class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform1">
                <input type="text" class="form-control" placeholder="Procurando por algo" value="<?php the_search_query(); ?>" id="textsearch2" name="s"/>
                <button type="submit" class="btn" id="searchsubmit" name="submit" value="<?php esc_attr_e( 'Search', 'pam' ); ?>">
                  <?php _e( 'Procurar', 'pam' ); ?>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>