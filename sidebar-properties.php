<div class="sidebar-left"> 
  <!-- Advanced search start -->   
  <div class="widget search-area advanced-search d-none d-xl-block d-lg-block"> 
    <h3 class="sidebar-title"><?php _e( 'Advanced Search', 'pam' ); ?></h3> 
    <form method="GET"> 
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="all-status"> 
          <option>
            <?php _e( 'All Status', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'For Sale', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'For Rent', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="all-type"> 
          <option>
            <?php _e( 'All Type', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Apartments', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Houses', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Commercial', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Garages', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="commercial"> 
          <option>
            <?php _e( 'Commercial', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Residential', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Land', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Hotels', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="location"> 
          <option>
            <?php _e( 'location', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'New York', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Bangladesh', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'India', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Canada', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="row"> 
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="bedrooms"> 
              <option>
                <?php _e( 'Bedrooms', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="bathroom"> 
              <option>
                <?php _e( 'Bathroom', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
      </div>       
      <div class="row"> 
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="balcony"> 
              <option>
                <?php _e( 'Balcony', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="garage"> 
              <option>
                <?php _e( 'Garage', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
      </div>       
      <div class="range-slider"> 
        <label>
          <?php _e( 'Area', 'pam' ); ?>
        </label>         
        <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>         
        <div class="clearfix"></div>         
      </div>       
      <div class="range-slider"> 
        <label>
          <?php _e( 'Price', 'pam' ); ?>
        </label>         
        <div data-min="0" data-max="150000" data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>         
        <div class="clearfix"></div>         
      </div>       <a class="show-more-options" data-toggle="collapse" data-target="#options-content"> <i class="fa fa-plus-circle"></i> <?php _e( 'Show More Options', 'pam' ); ?> </a> 
      <div id="options-content" class="collapse"> 
        <label class="margin-t-10">
          <?php _e( 'Features', 'pam' ); ?>
        </label>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox1" type="checkbox"/> 
          <label for="checkbox1"> 
            <?php _e( 'Free Parking', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox2" type="checkbox"/> 
          <label for="checkbox2"> 
            <?php _e( 'Air Condition', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox3" type="checkbox"/> 
          <label for="checkbox3"> 
            <?php _e( 'Places to seat', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox4" type="checkbox"/> 
          <label for="checkbox4"> 
            <?php _e( 'Swimming Pool', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox5" type="checkbox"/> 
          <label for="checkbox5"> 
            <?php _e( 'Laundry Room', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox6" type="checkbox"/> 
          <label for="checkbox6"> 
            <?php _e( 'Window Covering', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox7" type="checkbox"/> 
          <label for="checkbox7"> 
            <?php _e( 'Central Heating', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox8" type="checkbox"/> 
          <label for="checkbox8"> 
            <?php _e( 'Alarm', 'pam' ); ?> 
          </label>           
        </div>         
      </div>       
      <div class="form-group mb-0"> 
        <button class="search-button">
          <?php _e( 'Search', 'pam' ); ?>
        </button>         
      </div>       
    </form>     
  </div>   
  <!-- Posts by category start -->   
  <div class="posts-by-category widget"> 
    <h3 class="sidebar-title"><?php _e( 'Category', 'pam' ); ?></h3> 
    <?php $terms = get_terms( array(
        'taxonomy' => 'properties_types',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => true
    ) ) ?>
    <?php if( !empty( $terms ) ) : ?>
      <ul class="list-unstyled list-cat"> 
        <?php foreach( $terms as $term ) : ?>
          <li> <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" rel="tag"><?php echo $term->name; ?></a> 
          </li>
        <?php endforeach; ?>                                              
      </ul>
    <?php endif; ?> 
  </div>   
  <!-- Social media box start -->   
  <div class="social-media-box widget clearfix"> 
    <h3 class="sidebar-title"><?php _e( 'Social Media', 'pam' ); ?></h3> 
    <ul class="social-list"> 
      <li> <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> </a> 
      </li>       
      <li> <a href="#" class="twitter-bg"> <i class="fa fa-twitter"></i> </a> 
      </li>       
      <li> <a href="#" class="google-bg"> <i class="fa fa-google"></i> </a> 
      </li>       
      <li> <a href="#" class="linkedin-bg"> <i class="fa fa-linkedin"></i> </a> 
      </li>       
      <li> <a href="#" class="pinterest-bg"> <i class="fa fa-pinterest"></i> </a> 
      </li>       
    </ul>     
  </div>   
  <!-- Team 5 start -->   
  <div class="team-5 widget"> 
    <h3 class="sidebar-title"><?php _e( 'Contact Agent', 'pam' ); ?></h3> 
    <div class="media"> <a href="agent-detail.html"> <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/avatar-1.jpg" alt="avatar"/> </a> 
      <div class="media-body align-self-center"> 
        <h5> <a href="properties-details.html"><?php _e( 'John Antony', 'pam' ); ?></a> </h5> 
        <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p> 
        <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p> 
      </div>       
    </div>     
    <div class="media mb-0"> <a href="agent-detail.html"> <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/avatar-2.jpg" alt="avatar"/> </a> 
      <div class="media-body align-self-center"> 
        <h5> <a href="properties-details.html"><?php _e( 'Karen Paran', 'pam' ); ?></a> </h5> 
        <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p> 
        <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p> 
      </div>       
    </div>     
  </div>   
  <!-- Financing calculator start -->   
  <div class="contact-1 financing-calculator widget"> 
    <h5 class="sidebar-title"><?php _e( 'Mortgage Calculator', 'pam' ); ?></h5> 
    <form action="<?php echo get_template_directory_uri(); ?>/#" method="GET" enctype="multipart/form-data"> 
      <div class="form-group"> 
        <label class="form-label">
          <?php _e( 'Property Price', 'pam' ); ?>
        </label>         
        <input type="text" class="form-control" placeholder="$24.400"/> 
      </div>       
      <div class="form-group"> 
        <label class="form-label">
          <?php _e( 'Interest Rate (%)', 'pam' ); ?>
        </label>         
        <input type="text" class="form-control" placeholder="12%"/> 
      </div>       
      <div class="form-group"> 
        <label class="form-label">
          <?php _e( 'Period In Months', 'pam' ); ?>
        </label>         
        <input type="text" class="form-control" placeholder="6 Months"/> 
      </div>       
      <div class="form-group"> 
        <label class="form-label">
          <?php _e( 'Down PaymenT', 'pam' ); ?>
        </label>         
        <input type="text" class="form-control" placeholder="$32,300"/> 
      </div>       
      <div class="form-group mb-0"> 
        <button type="submit" class="btn button-theme btn-md btn-block">
          <?php _e( 'Cauculate', 'pam' ); ?>
        </button>         
      </div>       
    </form>     
  </div>   
</div>