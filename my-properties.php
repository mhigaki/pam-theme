<?php
/*
 Template Name: my-properties
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/banner', 'sub' ); ?>
<div class="my-properties content-area"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-4 col-md-12 col-sm-12"> 
                <!-- Avatar start -->                             
                <div class="edit-profile-photo"> 
                    <?php echo PG_Image::getPostImage( null, 'agent', array(
                          'class' => 'img-fluid'
                    ), 'both', null ) ?> 
                    <div class="change-photo-btn"> 
                        <div class="photoUpload"> <span><i class="fa fa-upload"></i> <?php _e( 'Upload Photo', 'pam' ); ?></span> 
                            <input type="file" class="upload"/> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <!-- Avatar end -->                             
                <!-- My account box start -->                             
                <div class="my-account-box"> 
                    <ul> 
                        <li> <a href="my-profile.html"> <i class="flaticon-people"></i><?php _e( 'My Profile', 'pam' ); ?> </a> 
                        </li>                                     
                        <li> <a href="favorited-properties.html"> <i class="flaticon-favorite"></i><?php _e( 'Favorited Properties', 'pam' ); ?> </a> 
                        </li>                                     
                        <li> <a href="my-properties.html" class="active"> <i class="flaticon-internet"></i><?php _e( 'My Properties', 'pam' ); ?> </a> 
                        </li>                                     
                        <li> <a href="submit-property.html"> <i class="flaticon-cross"></i><?php _e( 'Submit New Property', 'pam' ); ?> </a> 
                        </li>                                     
                        <li> <a href="change-password.html"> <i class="flaticon-lock"></i><?php _e( 'Change Password', 'pam' ); ?> </a> 
                        </li>                                     
                        <li> <a href="index-2.html"> <i class="flaticon-exit"></i><?php _e( 'Log Out', 'pam' ); ?> </a> 
                        </li>                                     
                    </ul>                                 
                </div>                             
                <!-- My account box end -->                             
            </div>                         
            <div class="col-lg-8 col-md-12 col-sm-12"> 
                <!-- Heading -->                             
                <h3 class="heading-2"><?php _e( 'My Properties', 'pam' ); ?></h3> 
                <?php
                    $properties_query_args = array(
                      'post__in' => PG_Helper::getRelationshipFieldValue( 'properties' ) ?: array(''),
                      'post_type' => 'any',
                      'post_status' => 'any',
                      'posts_per_page' => -1,
                      'ignore_sticky_posts' => true,
                      'orderby' => 'post__in'
                    )
                ?>
                <?php $properties_query = new WP_Query( $properties_query_args ); ?>
                <div class="my-properties"> 
                    <table class="table brd-none"> 
                        <thead> 
                            <tr> 
                                <th><?php _e( 'Property', 'pam' ); ?></th> 
                                <th></th> 
                                <th><?php _e( 'Date', 'pam' ); ?></th> 
                                <th><span class="hedin-div"><?php _e( 'Views', 'pam' ); ?></span></th> 
                                <th><?php _e( 'Actions', 'pam' ); ?></th> 
                            </tr>                                         
                        </thead>                                     
                        <?php if ( $properties_query->have_posts() ) : ?>
                            <tbody> 
                                <?php while ( $properties_query->have_posts() ) : $properties_query->the_post(); ?>
                                    <?php PG_Helper::rememberShownPost(); ?>
                                    <tr <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                        <td class="image"> <a href="properties-details.html"><?php echo PG_Image::getPostImage( null, 'large', array(
                                                      'class' => 'img-fluid'
                                                ), 'both', null ) ?></a> </td> 
                                        <td> 
                                            <div class="inner"> 
                                                <h5><a href="properties-details.html"><?php the_title(); ?></a></h5> 
                                                <figure class="hedin-div"><i class="fa fa-map-marker"></i> 
                                                    <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?>
                                                </figure>                                                             
                                                <div class="tag price">
                                                    <?php _e( '$ 27,000', 'pam' ); ?>
                                                </div>                                                             
                                            </div>                                                         
                                        </td>                                                     
                                        <td><?php _e( '7.02.2018', 'pam' ); ?></td> 
                                        <td> <span class="hedin-div"><?php _e( '421', 'pam' ); ?></span></td> 
                                        <td class="actions"> <a href="#" class="edit"><i class="fa fa-pencil"></i><?php _e( 'Edit', 'pam' ); ?></a> <a href="#"><i class="delete fa fa-trash-o"></i></a> </td> 
                                    </tr>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?> 
                                <tr> 
                                    <td class="image"> <a href="properties-details.html"><img alt="properties-small" src="<?php echo get_template_directory_uri(); ?>/img/properties/small-properties-2.jpg" class="img-fluid"/></a> </td> 
                                    <td> 
                                        <div class="inner"> 
                                            <h5><a href="properties-details.html"><?php _e( 'Beautiful Single Home', 'pam' ); ?></a></h5> 
                                            <figure class="hedin-div"><i class="fa fa-map-marker"></i> 
                                                <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?>
                                            </figure>                                                         
                                            <div class="tag price">
                                                <?php _e( '$ 19,000', 'pam' ); ?>
                                            </div>                                                         
                                        </div>                                                     
                                    </td>                                                 
                                    <td><?php _e( '4.07.2018', 'pam' ); ?></td> 
                                    <td> <span class="hedin-div"><?php _e( '365', 'pam' ); ?></span></td> 
                                    <td class="actions"> <a href="#" class="edit"><i class="fa fa-pencil"></i><?php _e( 'Edit', 'pam' ); ?></a> <a href="#"><i class="delete fa fa-trash-o"></i></a> </td> 
                                </tr>                                             
                                <tr> 
                                    <td class="image"> <a href="properties-details.html"><img alt="properties-small" src="<?php echo get_template_directory_uri(); ?>/img/properties/small-properties-3.jpg" class="img-fluid"/></a> </td> 
                                    <td> 
                                        <div class="inner"> 
                                            <h5><a href="properties-details.html"><?php _e( 'Masons Villas', 'pam' ); ?></a></h5> 
                                            <figure class="hedin-div"><i class="fa fa-map-marker"></i> 
                                                <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?>
                                            </figure>                                                         
                                            <div class="tag price">
                                                <?php _e( '$ 19,000', 'pam' ); ?>
                                            </div>                                                         
                                        </div>                                                     
                                    </td>                                                 
                                    <td><?php _e( '9.03.2018', 'pam' ); ?></td> 
                                    <td> <span class="hedin-div"><?php _e( '165', 'pam' ); ?></span></td> 
                                    <td class="actions"> <a href="#" class="edit"><i class="fa fa-pencil"></i><?php _e( 'Edit', 'pam' ); ?></a> <a href="#"><i class="delete fa fa-trash-o"></i></a> </td> 
                                </tr>                                             
                                <tr> 
                                    <td class="image"> <a href="properties-details.html"><img alt="properties-small" src="<?php echo get_template_directory_uri(); ?>/img/properties/small-properties-1.jpg" class="img-fluid"/></a> </td> 
                                    <td> 
                                        <div class="inner"> 
                                            <h5><a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a></h5> 
                                            <figure class="hedin-div"><i class="fa fa-map-marker"></i> 
                                                <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?>
                                            </figure>                                                         
                                            <div class="tag price">
                                                <?php _e( '$ 27,000', 'pam' ); ?>
                                            </div>                                                         
                                        </div>                                                     
                                    </td>                                                 
                                    <td><?php _e( '7.02.2018', 'pam' ); ?></td> 
                                    <td> <span class="hedin-div"><?php _e( '421', 'pam' ); ?></span></td> 
                                    <td class="actions"> <a href="#" class="edit"><i class="fa fa-pencil"></i><?php _e( 'Edit', 'pam' ); ?></a> <a href="#"><i class="delete fa fa-trash-o"></i></a> </td> 
                                </tr>                                             
                                <tr> 
                                    <td class="image"> <a href="properties-details.html"><img alt="properties-small" src="<?php echo get_template_directory_uri(); ?>/img/properties/small-properties-2.jpg" class="img-fluid"/></a> </td> 
                                    <td> 
                                        <div class="inner"> 
                                            <h5><a href="properties-details.html"><?php _e( 'Beautiful Single Home', 'pam' ); ?></a></h5> 
                                            <figure class="hedin-div"><i class="fa fa-map-marker"></i> 
                                                <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?>
                                            </figure>                                                         
                                            <div class="tag price">
                                                <?php _e( '$ 19,000', 'pam' ); ?>
                                            </div>                                                         
                                        </div>                                                     
                                    </td>                                                 
                                    <td><?php _e( '4.07.2018', 'pam' ); ?></td> 
                                    <td> <span class="hedin-div"><?php _e( '365', 'pam' ); ?></span></td> 
                                    <td class="actions"> <a href="#" class="edit"><i class="fa fa-pencil"></i><?php _e( 'Edit', 'pam' ); ?></a> <a href="#"><i class="delete fa fa-trash-o"></i></a> </td> 
                                </tr>                                             
                                <tr class="brd-none"> 
                                    <td class="image"> <a href="properties-details.html"><img alt="properties-small" src="<?php echo get_template_directory_uri(); ?>/img/properties/small-properties-3.jpg" class="img-fluid"/></a> </td> 
                                    <td> 
                                        <div class="inner"> 
                                            <h5><a href="properties-details.html"><?php _e( 'Masons Villas', 'pam' ); ?></a></h5> 
                                            <figure class="hedin-div"><i class="fa fa-map-marker"></i> 
                                                <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?>
                                            </figure>                                                         
                                            <div class="tag price">
                                                <?php _e( '$ 19,000', 'pam' ); ?>
                                            </div>                                                         
                                        </div>                                                     
                                    </td>                                                 
                                    <td><?php _e( '9.03.2018', 'pam' ); ?></td> 
                                    <td> <span class="hedin-div"><?php _e( '165', 'pam' ); ?></span></td> 
                                    <td class="actions"> <a href="#" class="edit"><i class="fa fa-pencil"></i><?php _e( 'Edit', 'pam' ); ?></a> <a href="#"><i class="delete fa fa-trash-o"></i></a> </td> 
                                </tr>                                             
                            </tbody>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                        <?php endif; ?> 
                    </table>                                 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
</div>            

<?php get_footer(); ?>