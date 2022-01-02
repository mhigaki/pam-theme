<?php
/*
 Template Name: galpao
 Template Post Type: properties
*/
?>
<?php get_header(); ?>

            <?php get_template_part( 'template-parts/content/banner', 'sub' ); ?>
            <div class="properties-details-page content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <?php
$endereco = get_field( 'endereco' );
$cidade = get_field( 'cidade' ); ?>
                            <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                                <div class="heading-properties">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <h3><?php _e( 'Beautiful Single Home', 'pam' ); ?></h3>
                                                <p><i class="fa fa-map-marker"></i> <?php _e( '20/F Green Road, Dhanmondi, Dhaka', 'pam' ); ?></p>
                                            </div>
                                            <div class="p-r">
                                                <h3><?php _e( '$420,00', 'pam' ); ?></h3>
                                                <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- main slider carousel items -->
                                <?php echo get_field( 'slides_do_imovel' ); ?>
                                <!-- main slider carousel nav controls -->
                                <!-- main slider carousel items -->
                                <!-- Heading properties start -->
                                <div class="heading-properties">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <h3><?php _e( 'Galpão', 'pam' ); ?></h3>
                                                <p> <i class="fa fa-map-marker"></i><?php echo get_field( 'endereco' ); ?><?php echo get_field( 'cidade' ); ?> </p>
                                            </div>
                                            <div class="pull-right">
                                                <h3><span class="text-right"><?php echo get_field( 'valor' ); ?></span></h3>
                                                <p><?php echo get_field( 'field_606939e7915cd' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Heading properties end -->
                            </div>
                            <!-- Property meta start -->
                            <div class="property-meta mb-40">
                                <ul>
                                    <li><i class="flaticon-square"></i>
                                        <p><?php echo get_post_meta( get_the_ID(), 'informacoes_planta_area_construida', true ); ?></p>
                                    </li>
                                    <li><i class="fa fa-building-o"></i>
                                        <?php $terms = get_the_terms( get_the_ID(), 'properties_types' ) ?>
                                        <?php if( !empty( $terms ) ) : ?>
                                            <?php foreach( $terms as $term ) : ?>
                                                <p><?php echo $term->name; ?></p>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li><i class="flaticon-vehicle"></i>
                                        <p><?php echo get_field( 'informacoes_planta_garagem' ); ?></p>
                                    </li>
                                    <li><i class="flaticon-holidays"></i>
                                        <p><?php echo get_field( 'informacoes_planta_banheiros' ); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property meta end -->
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
                            <!-- Properties description start -->
                            <div class="properties-description mb-40">
                                <h3 class="heading-2"><?php _e( 'Descrição', 'pam' ); ?></h3>
                                <p><?php the_content(); ?></p>
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
                            <?php get_template_part( 'sidebar', 'properties' ); ?>
                        </div>
                    </div>
                    <!-- Similar Properties start -->
                    <!-- Similar Properties end -->
                </div>
            </div>            

<?php get_footer(); ?>