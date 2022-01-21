<div class="properties-details-page content-area">
  <?php
    $endereco = get_field( 'endereco' );
  $cidade = get_field( 'cidade' ); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="detail-slider-full mb-40">
          <!-- Properties detail slider start -->
          <?php echo get_field( 'slides_do_imovel' ); ?>
          <!-- Properties detail slider end -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <!-- Heading properties start -->
        <div class="heading-properties-2 hp-3">
          <div class="row">
            <div class="col-md-12">
              <div class="pull-left">
                <?php $terms = get_the_terms( get_the_ID(), 'properties_types' ) ?>
                <?php if( !empty( $terms ) ) : ?>
                  <?php foreach( $terms as $term ) : ?>
                    <h3><?php echo $term->name; ?></h3>
                  <?php endforeach; ?>
                <?php endif; ?>
                <p> <i class="fa fa-map-marker"></i> <?php echo "$endereco - $cidade" ?> </p>
              </div>
              <div class="pull-right"> 
                <h3><span class="text-right"><?php echo get_field( 'valor' ); ?></span></h3>
                <p><?php echo get_field( 'rattings' ); ?></p> 
              </div>
            </div>
          </div>
        </div>
        <!-- Heading properties end -->
        <!-- Advanced search start -->
        <div class="widget-2 advanced-search-2 d-lg-none d-xl-none">
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
            </div>
            <div class="form-group mb-0">
              <button class="search-button">
                <?php _e( 'Search', 'pam' ); ?>
              </button>
            </div>
          </form>
        </div>
        <div class="property-details mb-40"> 
          <h3 class="heading-2"><?php _e( 'Detalhes do Imóvel', 'pam' ); ?></h3> 
          <div class="row"> 
            <div class="col-md-4 col-sm-6"> 
              <ul> 
                <li> <strong><?php _e( 'ID:', 'pam' ); ?></strong> 
                  <?php the_ID(); ?> 
                </li>
                <li> <strong><?php _e( 'Tipo :', 'pam' ); ?></strong>
                  <?php the_terms( null, 'properties_status' ); ?> 
                </li>
                <?php if ( get_field( 'cidade' ) ) : ?>
                  <li> <strong><?php _e( 'Cidade:', 'pam' ); ?></strong>
                    <?php echo get_field( 'cidade' ); ?> 
                  </li>
                <?php endif; ?> 
              </ul>               
            </div>             
            <div class="col-md-4 col-sm-6"> 
              <ul> 
                <?php if ( get_field( 'informacoes_planta_area' ) ) : ?>
                  <li> <strong><?php _e( 'Área(m²):', 'pam' ); ?></strong>
                    <?php echo get_field( 'informacoes_planta_area' ); ?> 
                  </li>
                <?php endif; ?>
                <?php if ( get_field( 'valor_do_condominio' ) ) : ?>
                  <li> <strong><?php _e( 'Condomínio:&nbsp;', 'pam' ); ?></strong>
                    <?php echo get_field( 'valor_do_condominio' ); ?> 
                  </li>
                <?php endif; ?>
                <?php if ( get_field( 'valor_do_iptu' ) ) : ?>
                  <li> <strong><?php _e( 'IPTU:', 'pam' ); ?></strong>
                    <?php echo get_field( 'valor_do_iptu' ); ?> 
                  </li>
                <?php endif; ?> 
              </ul>               
            </div>             
            <div class="col-md-4 col-sm-6"> 
              <ul> 
                <?php if ( get_field( 'field_5fac3f8b9f6a3' ) ) : ?>
                  <li> <strong><?php _e( 'Banheiro', 'pam' ); ?></strong>
                    <?php echo get_field( 'field_5fac3f8b9f6a3' ); ?> 
                  </li>
                <?php endif; ?>
                <li> <strong><?php _e( 'Vagas:', 'pam' ); ?></strong>
                  <?php echo get_field( 'informacoes_planta_garagem' ); ?>
                </li>
                <?php if ( get_field( 'field_61ea275e7c1c3' ) ) : ?>
                  <li> <strong><?php _e( 'Piscina:', 'pam' ); ?></strong>
                    <?php echo get_field( 'field_61ea275e7c1c3' ); ?> 
                  </li>
                <?php endif; ?> 
              </ul>               
            </div>             
          </div>           
        </div>
        <!-- Advanced search end -->
        <!-- Properties description start -->
        <div class="properties-description mb-40">
          <h3 class="heading-2"><?php _e( '‎Descrição‎', 'pam' ); ?></h3>
          <p><?php the_content( null, true ); ?></p>
        </div>
        <!-- Properties description end -->
        <!-- Properties condition start -->
        <!-- Properties condition end -->
        <!-- Properties amenities start -->
        <!-- Properties amenities end -->
        <!-- Floor plans start -->
        <div class="floor-plans mb-50"> 
          <h3 class="heading-2"><?php _e( 'Planta Baixa', 'pam' ); ?></h3> 
          <table> 
            <tbody class="text-center"> 
              <tr> 
                <td><strong><?php _e( 'Metragem', 'pam' ); ?></strong></td> 
                <td><strong><?php _e( 'Quartos', 'pam' ); ?></strong></td> 
                <td><strong><?php _e( 'Banheiros', 'pam' ); ?></strong></td> 
                <td><strong><?php _e( 'Vagas', 'pam' ); ?></strong></td> 
                <td><strong><?php _e( 'Suítes', 'pam' ); ?></strong></td> 
              </tr>               
              <tr class="text-center"> 
                <td><?php echo get_field( 'informacoes_planta_area' ); ?></td> 
                <td><?php echo get_field( 'informacoes_planta_quartos' ); ?></td> 
                <td><?php echo get_field( 'informacoes_planta_banheiros' ); ?></td> 
                <td><?php echo get_field( 'informacoes_planta_garagem' ); ?></td> 
                <td><?php echo get_field( 'informacoes_planta_suites' ); ?></td> 
              </tr>               
            </tbody>             
          </table>           
          <div class="text-center"> 
            <?php if ( get_field( 'imagem_da_planta' ) ) : ?>
              <img src="<?php echo PG_Image::getUrl( get_field( 'imagem_da_planta' ), 'large' ) ?>" alt="floor-plans" width="600" height="300"/>
            <?php endif; ?> 
          </div>           
        </div>
        <!-- Floor plans end -->
        <!-- Inside properties start -->
        <?php if ( get_field( 'video_do_imovel' ) ) : ?>
          <div class="inside-properties mb-50"> 
            <h3 class="heading-2"><?php _e( 'Vídeo do Imóvel', 'pam' ); ?></h3> 
            <?php echo get_field( 'video_do_imovel' ); ?> 
          </div>
        <?php endif; ?>
        <!-- Inside properties end -->
        <!-- Location start -->
        <?php if ( get_field( 'mapa_do_imovel' ) ) : ?>
          <div class="location mb-50"> 
            <div class="map"> 
              <h3 class="heading-2"><?php _e( 'Localização do Imóvel', 'pam' ); ?></h3> 
              <?php echo get_field( 'mapa_do_imovel' ); ?> 
            </div>             
          </div>
        <?php endif; ?>
        <!-- Location end -->
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="sidebar-right">
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
              </div>
              <a class="show-more-options" data-toggle="collapse" data-target="#options-content"> <i class="fa fa-plus-circle"></i> <?php _e( 'Show More Options', 'pam' ); ?> </a>
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
            <ul class="list-unstyled list-cat">
              <li><a href="#"><?php _e( 'Single Family', 'pam' ); ?> <span><?php _e( '(45)', 'pam' ); ?></span></a>
              </li>
              <li><a href="#"><?php _e( 'Apartment', 'pam' ); ?> <span><?php _e( '(21)', 'pam' ); ?></span> </a>
              </li>
              <li><a href="#"><?php _e( 'Condo', 'pam' ); ?> <span><?php _e( '(23)', 'pam' ); ?></span></a>
              </li>
              <li><a href="#"><?php _e( 'Multi Family', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a>
              </li>
              <li><a href="#"><?php _e( 'Villa', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a> 
              </li>
              <li><a href="#"><?php _e( 'Other', 'pam' ); ?> <span><?php _e( '(22)', 'pam' ); ?> </span></a>
              </li>
            </ul>
          </div>
          <!-- Social media box start -->
          <div class="social-media-box widget clearfix">
            <h3 class="sidebar-title"><?php _e( 'Social Media', 'pam' ); ?></h3>
            <ul class="social-list">
              <li>
                <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> </a>
              </li>
              <li>
                <a href="#" class="twitter-bg"> <i class="fa fa-twitter"></i> </a>
              </li>
              <li>
                <a href="#" class="google-bg"> <i class="fa fa-google"></i> </a>
              </li>
              <li>
                <a href="#" class="linkedin-bg"> <i class="fa fa-linkedin"></i> </a>
              </li>
              <li>
                <a href="#" class="pinterest-bg"> <i class="fa fa-pinterest"></i> </a>
              </li>
            </ul>
          </div>
          <!-- Team 5 start -->
          <div class="team-5 widget">
            <h3 class="sidebar-title"><?php _e( 'Contact Agent', 'pam' ); ?></h3>
            <div class="media">
              <a href="agent-detail.html"> <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/avatar-1.jpg" alt="avatar"/> </a>
              <div class="media-body align-self-center">
                <h5> <a href="properties-details.html"><?php _e( 'John Antony', 'pam' ); ?></a> </h5>
                <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p>
                <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p>
              </div>
            </div>
            <div class="media mb-0">
              <a href="agent-detail.html"> <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/avatar-2.jpg" alt="avatar"/> </a>
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
      </div>
    </div>
    <h3 class="heading-2"><?php _e( 'Similar Properties', 'pam' ); ?></h3>
    <!-- Featured Properties start -->
    <div class="row similar-properties">
      <div class="container-fluid">
        <div class="slick-slider-area">
          <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="slick-slide-item">
              <div class="property-box-4 category">
                <div class="category_bg_box property-photo">
                  <div class="category-overlay">
                    <div class="category-content">
                      <h3> <a href="properties-details.html"><?php _e( 'Park Avenue', 'pam' ); ?></a> </h3>
                      <ul>
                        <li>
                          <i class="flaticon-furniture"></i>
                          <?php _e( '3 Beds', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <?php _e( '2 Bath', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slide-item">
              <div class="property-box-4 category">
                <div class="category_bg_box property-photo-2">
                  <div class="category-overlay">
                    <div class="category-content">
                      <h3> <a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a> </h3>
                      <ul>
                        <li>
                          <i class="flaticon-furniture"></i>
                          <?php _e( '3 Beds', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <?php _e( '2 Bath', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slide-item">
              <div class="property-box-4 category">
                <div class="category_bg_box property-photo-3">
                  <div class="category-overlay">
                    <div class="category-content">
                      <h3> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h3>
                      <ul>
                        <li>
                          <i class="flaticon-furniture"></i>
                          <?php _e( '3 Beds', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <?php _e( '2 Bath', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slide-item">
              <div class="property-box-4 category">
                <div class="category_bg_box property-photo-4">
                  <div class="category-overlay">
                    <div class="category-content">
                      <h3> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h3>
                      <ul>
                        <li>
                          <i class="flaticon-furniture"></i>
                          <?php _e( '3 Beds', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <?php _e( '2 Bath', 'pam' ); ?>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-prev slick-arrow-buton">
            <i class="fa fa-angle-left"></i>
          </div>
          <div class="slick-next slick-arrow-buton">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- Featured Properties end -->
  </div>
</div>