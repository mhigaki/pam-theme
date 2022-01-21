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
        </ul>         
      </div>       
      <div class="col-md-4 col-sm-6"> 
        <ul> 
          <?php if ( get_field( 'informacoes_planta_area' ) ) : ?>
            <li> <strong><?php _e( 'Área(m²):', 'pam' ); ?></strong>
              <?php echo get_field( 'informacoes_planta_area' ); ?> 
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
          <td><strong><?php _e( 'Banheiros', 'pam' ); ?></strong></td> 
          <td><strong><?php _e( 'Vagas', 'pam' ); ?></strong></td>            
        </tr>         
        <tr class="text-center"> 
          <td><?php echo get_field( 'informacoes_planta_area' ); ?></td>            
          <td><?php echo get_field( 'informacoes_planta_banheiros' ); ?></td> 
          <td><?php echo get_field( 'informacoes_planta_garagem' ); ?></td>            
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