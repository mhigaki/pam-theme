<?php
/*
 Template Name: apto
 Template Post Type: properties
*/
?>
<?php get_header(); ?>

            <div class="sub-banner" src="<?php echo esc_url( get_header_image() ); ?>"> 
                <div class="container"> 
                    <div class="page-name"> 
                        <h1><?php the_title(); ?></h1> 
                    </div>                     
                </div>                 
                <div class="page-info"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-6"> 
                                <div class="breadcrumb-area"> 
                                    <ul> 
                                        <li> <a href="index-2.html"><?php _e( 'Index', 'pam' ); ?></a> 
                                        </li>                                         
                                        <li><span>/</span><span><?php the_terms( '0', 'properties_types' ); ?></span>
                                        </li>                                         
                                    </ul>                                     
                                </div>
                                <!-- Breadcrumbs -->                                 
                                <!-- Breadcrumbs -->                                 
                            </div>                             
                            <div class="col-md-6"> 
                                <div class="contact-info"> 
                                    <ul> 
                                        <li><i class="fa fa-phone"></i> <span></span>
                                            <?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?>
                                        </li>                                         
                                        <li> <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contact us', 'pam' ); ?></a> 
                                        </li>                                         
                                    </ul>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="properties-details-page content-area-7"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-lg-8 col-md-12 col-xs-12"> 
                            <?php
$endereco = get_field( 'endereco' );
$cidade = get_field( 'cidade' ); ?>
                            <div class="properties-details-section"> 
                                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40"> 
                                    <!-- Heading properties start -->                                     
                                    <div class="heading-properties-2"> 
                                        <div class="row"> 
                                            <div class="col-md-12"> 
                                                <div class="pull-left"> 
                                                    <h3><?php the_terms( '0', 'properties_types' ); ?></h3> 
                                                    <p> <i class="fa fa-map-marker"></i> <?php echo "$endereco - $cidade" ?> </p> 
                                                </div>                                                 
                                                <div class="pull-right"> 
                                                    <h3><span class="text-right"><?php echo get_field( 'valor' ); ?></span></h3>
                                                    <?php echo get_field( 'field_606939e7915cd' ); ?> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Heading properties end -->                                     
                                    <!-- main slider carousel items -->                                     
                                    <?php echo get_field( 'slides_do_imovel' ); ?> 
                                </div>                                 
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
                                <!-- Advanced search end -->                                 
                                <!-- Tabbing box start -->                                 
                                <div class="tabbing tabbing-box mb-40"> 
                                    <ul class="nav nav-tabs" id="carTab" role="tablist"> 
                                        <li class="nav-item"> <a class="active nav-link show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="three" aria-selected="true"><?php _e( 'Detalhes', 'pam' ); ?></a> 
                                        </li>                                         
                                        <li class="nav-item"> <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false"><?php _e( 'Planta', 'pam' ); ?></a> 
                                        </li>                                         
                                        <li class="nav-item"> <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="one" aria-selected="false"><?php _e( 'Descrição', 'pam' ); ?></a> 
                                        </li>                                         
                                        <li class="nav-item"> <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true"><?php _e( 'Video', 'pam' ); ?></a> 
                                        </li>                                         
                                        <li class="nav-item"> <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true"><?php _e( 'Mapa', 'pam' ); ?></a> 
                                        </li>                                         
                                    </ul>                                     
                                    <div class="tab-content" id="carTabContent"> 
                                        <div class="active fade show tab-pane" id="one" role="tabpanel" aria-labelledby="three-tab"> 
                                            <div class="property-details mb-40"> 
                                                <h3 class="heading-2"><?php _e( 'Detalhes do Imóvel', 'pam' ); ?></h3> 
                                                <div class="row"> 
                                                    <div class="col-md-4 col-sm-6"> 
                                                        <ul> 
                                                            <li> <strong><?php _e( 'ID:', 'pam' ); ?></strong> 
                                                                <?php the_ID(); ?> 
                                                            </li>                                                             
                                                            <li> <strong><?php _e( 'Preço:', 'pam' ); ?></strong> 
                                                                <?php echo get_field( 'valor' ); ?> 
                                                            </li>
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
                                                            <?php if ( get_field( 'informacoes_planta_garagem' ) ) : ?>
                                                                <li> <strong><?php _e( 'Vagas:', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'informacoes_planta_garagem' ); ?> 
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ( get_field( 'informacoes_planta_quartos' ) ) : ?>
                                                                <li> <strong><?php _e( 'Nº de Torres:', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'informacoes_planta_quartos' ); ?> 
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ( get_field( 'ano' ) ) : ?>
                                                                <li> <strong><?php _e( 'Un. por Andar:', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'field_6001dd4d6d977' ); ?>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ( get_field( 'ano' ) ) : ?>
                                                                <li> <strong><?php _e( 'Andar:', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'field_6001dd4d6d977' ); ?>
                                                                </li>
                                                            <?php endif; ?> 
                                                        </ul>                                                         
                                                    </div>                                                     
                                                    <div class="col-md-4 col-sm-6"> 
                                                        <ul> 
                                                            <?php if ( get_field( 'cidade' ) ) : ?>
                                                                <li> <strong><?php _e( 'Cidade:', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'cidade' ); ?> 
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ( get_field( 'tipo_do_imovel' ) ) : ?>
                                                                <li> <strong><?php _e( 'Tipo :', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'tipo_do_imovel' ); ?> 
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ( get_field( 'ano' ) ) : ?>
                                                                <li> <strong><?php _e( 'Sacada:', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'field_6001dd4d6d977' ); ?>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ( get_field( 'informacoes_planta_area' ) ) : ?>
                                                                <li> <strong><?php _e( 'Área(m²):', 'pam' ); ?></strong>
                                                                    <?php echo get_field( 'informacoes_planta_area' ); ?> 
                                                                </li>
                                                            <?php endif; ?> 
                                                        </ul>                                                         
                                                    </div>                                                     
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab"> 
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
                                        </div>                                         
                                        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="one-tab"> 
                                            <div class="properties-description mb-50"> 
                                                <h3 class="heading-2"><?php _e( 'Descrição', 'pam' ); ?></h3> 
                                                <p><?php the_content( null, true ); ?></p> 
                                            </div>                                             
                                        </div>                                         
                                        <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab"> 
                                            <?php if ( get_field( 'video_do_imovel' ) ) : ?>
                                                <div class="inside-properties mb-50"> 
                                                    <h3 class="heading-2"><?php _e( 'Vídeo do Imóvel', 'pam' ); ?></h3> 
                                                    <?php echo get_field( 'video_do_imovel' ); ?> 
                                                </div>
                                            <?php endif; ?> 
                                        </div>                                         
                                        <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab"> 
                                            <?php if ( get_field( 'mapa_do_imovel' ) ) : ?>
                                                <div class="location mb-50"> 
                                                    <div class="map"> 
                                                        <h3 class="heading-2"><?php _e( 'Localização do Imóvel', 'pam' ); ?></h3> 
                                                        <?php echo get_field( 'mapa_do_imovel' ); ?> 
                                                    </div>                                                     
                                                </div>
                                            <?php endif; ?> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <!-- Properties condition start -->                                 
                                <div class="properties-condition mb-40"> 
                                    <h3 class="heading-2"><?php _e( 'Área Privativa', 'pam' ); ?></h3> 
                                    <div class="row"> 
                                        <div class="col-md-4 col-sm-4 col-xs-12"> 
                                            <?php $cond_1 = get_field( 'cond_1' ); ?> 
                                            <?php if ( $cond_1 ) : ?> 
                                                <ul class="condition"> 
                                                    <?php foreach ( $cond_1 as $cond_1 ): ?> 
                                                        <li> 
                                                            <?php echo $cond_1 ; ?> 
                                                        </li>                                                         
                                                    <?php endforeach; ?> 
                                                </ul>                                                 
                                            <?php endif; ?> 
                                        </div>                                         
                                        <div class="col-md-4 col-sm-4 col-xs-12"> 
                                            <?php $cond_2 = get_field( 'cond_2' ); ?> 
                                            <?php if ( $cond_2 ) : ?> 
                                                <ul class="condition"> 
                                                    <?php foreach ( $cond_2 as $cond_2 ): ?> 
                                                        <li> 
                                                            <?php echo $cond_2 ; ?> 
                                                        </li>                                                         
                                                    <?php endforeach; ?> 
                                                </ul>                                                 
                                            <?php endif; ?> 
                                        </div>                                         
                                        <div class="col-md-4 col-sm-4 col-xs-12"> 
                                            <?php $cond_3 = get_field( 'cond_3' ); ?> 
                                            <?php if ( $cond_3 ) : ?> 
                                                <ul class="condition"> 
                                                    <?php foreach ( $cond_3 as $cond_3 ): ?> 
                                                        <li> 
                                                            <?php echo $cond_3 ; ?> 
                                                        </li>                                                         
                                                    <?php endforeach; ?> 
                                                </ul>                                                 
                                            <?php endif; ?> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <!-- Properties condition end -->                                 
                                <!-- Properties amenities start -->                                 
                                <div class="properties-amenities mb-40"> 
                                    <h3 class="heading-2"><?php _e( 'Área Comum', 'pam' ); ?></h3> 
                                    <div class="row"> 
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
                                            <?php $col_01 = get_field('col_01'); if( $col_01 ): ?> 
                                            <ul class="amenities"> 
                                                <?php foreach ( $col_01 as $col_01 ): ?> 
                                                    <li> 
                                                        <?php echo $col_01 ; ?> 
                                                    </li>                                                     
                                                <?php endforeach; ?> 
                                            </ul>                                             
                                        <?php endif; ?> 
                                        </div>                                         
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
                                            <?php $col_02 = get_field('col_02');
                    if( $col_02 ): ?> 
                                            <ul class="amenities"> 
                                                <?php foreach( $col_02 as $col_02 ): ?> 
                                                    <li> 
                                                        <?php echo $col_02; ?> 
                                                    </li>                                                     
                                                <?php endforeach; ?> 
                                            </ul>                                             
                                        <?php endif; ?> 
                                        </div>                                         
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
                                            <?php $col_03 = get_field('col_03');
                    if( $col_03 ): ?> 
                                            <ul class="amenities"> 
                                                <?php foreach( $col_03 as $col_03 ): ?> 
                                                    <li> 
                                                        <?php echo $col_03; ?> 
                                                    </li>                                                     
                                                <?php endforeach; ?> 
                                            </ul>                                             
                                        <?php endif; ?> 
                                        </div>                                         
                                        <!-- Properties amenities end -->                                         
                                        <!-- Inside properties start -->                                         
                                        <!-- Inside properties end -->                                         
                                        <!-- Location start -->                                         
                                        <!-- Location end -->                                         
                                    </div>                                     
                                </div>                                 
                                <!-- Properties amenities end -->                                 
                                <!-- Comments start -->                                 
                                <!-- Comments end -->                                 
                                <!-- Contact 1 start -->                                 
                                <!-- Contact 1 end -->                                 
                            </div>
                        </div>                         
                        <div class="col-lg-4 col-md-12"> 
                            <?php get_sidebar( 'properties' ); ?> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>                         

<?php get_footer(); ?>