<div class="search-section-area ssa"> 
  <div class="search-area-inner"> 
    <div class="search-contents"> 
      <form method="GET"> 
        <div class="row"> 
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <?php $terms = get_terms( array(
                'taxonomy' => 'properties_city',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true
            ) ) ?>
            <div class="form-group"> 
              <?php if( !empty( $terms ) ) : ?>
                <select class="selectpicker search-fields" name="area"> 
                  <?php foreach( $terms as $term ) : ?>
                    <option>
                      <?php echo $term->name; ?>
                    </option>
                  <?php endforeach; ?>                                                                             
                </select>
              <?php endif; ?> 
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <?php $terms = get_terms( array(
                'taxonomy' => 'properties_uf',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true
            ) ) ?>
            <div class="form-group"> 
              <?php if( !empty( $terms ) ) : ?>
                <select class="selectpicker search-fields" name="property-status"> 
                  <?php foreach( $terms as $term ) : ?>
                    <option>
                      <?php echo $term->name; ?>
                    </option>
                  <?php endforeach; ?>                                       
                </select>
              <?php endif; ?> 
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <?php $terms = get_terms( array(
                'taxonomy' => 'properties_status',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true
            ) ) ?>
            <div class="form-group"> 
              <?php if( !empty( $terms ) ) : ?>
                <select class="selectpicker search-fields" name="property-types"> 
                  <?php foreach( $terms as $term ) : ?>
                    <option>
                      <?php echo $term->name; ?>
                    </option>
                  <?php endforeach; ?>                                                                             
                </select>
              <?php endif; ?> 
            </div>             
          </div>           
          <?php $terms = get_terms( array(
              'taxonomy' => 'properties_types',
              'orderby' => 'name',
              'order' => 'ASC',
              'hide_empty' => true
          ) ) ?>
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="form-group"> 
              <?php if( !empty( $terms ) ) : ?>
                <select class="selectpicker search-fields" name="location"> 
                  <?php foreach( $terms as $term ) : ?>
                    <option>
                      <?php echo $term->name; ?>
                    </option>
                  <?php endforeach; ?>                                                                             
                </select>
              <?php endif; ?> 
            </div>             
          </div>           
        </div>         
        <div class="row"> 
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="form-group"> 
              <select class="selectpicker search-fields" name="max-area"> 
                <option>
                  <?php _e( 'Max Area (Sq Ff)', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '2400', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '2800', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '3200', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '3600', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '4000', 'pam' ); ?>
                </option>                 
              </select>               
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="form-group"> 
              <select class="selectpicker search-fields" name="min-area"> 
                <option>
                  <?php _e( 'Min Area (Sq Ff)', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '2400', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '2800', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '3200', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '3600', 'pam' ); ?>
                </option>                 
                <option>
                  <?php _e( '4000', 'pam' ); ?>
                </option>                 
              </select>               
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="range-slider"> 
              <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>               
              <div class="clearfix"></div>               
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="form-group"> 
              <button class="search-button">
                <?php _e( 'Search', 'pam' ); ?>
              </button>               
            </div>             
          </div>           
        </div>         
      </form>       
    </div>     
  </div>   
</div>