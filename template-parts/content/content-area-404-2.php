
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
          <h1><?php _e( 'Ooops, This Page Could Not Be Found!', 'pam' ); ?></h1>
          <p><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'pam' ); ?></p>
        </div>
        <div class="row">
          <div class="col-xl-9 col-lg-10 col-md-8 col-sm-10 col-xs-10">
            <div class="coming-form clearfix">
              <div class="hr"></div>
              <p><?php _e( 'Please try searching again', 'pam' ); ?></p>
              <form class="form-inline" action="<?php echo get_template_directory_uri(); ?>/#" method="GET">
                <input type="text" class="form-control" placeholder="Search For Page"/>
                <button type="submit" class="btn btn-color">
                  <?php _e( 'Search', 'pam' ); ?>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
