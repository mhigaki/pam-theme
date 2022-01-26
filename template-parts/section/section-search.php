<div class="search-section-area ssa"> 
  <div class="search-area-inner"> 
    <div class="search-contents"> 
      <form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="search-adv"> 
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
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <?php $terms = get_terms( array(
                'taxonomy' => 'properties_types',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true
            ) ) ?>
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
                  <?php echo get_field( 'field_5fac3f659f6a1' ); ?>
                </option>                                                                                                      
              </select>               
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="form-group"> 
              <select class="selectpicker search-fields" name="min-area"> 
                <option>
                  <?php echo get_field( 'field_5faf728e8aa5e' ); ?>
                </option>                                                                                                      
              </select>               
            </div>             
          </div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">              
</div>           
          <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
            <div class="form-group"> 
              <button class="search-button">
                <?php _e( 'Procurar', 'pam' ); ?>
              </button>               
            </div>             
          </div>           
        </div>         
      </form>       
    </div>     
  </div>   
</div>