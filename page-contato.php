<?php
/*
 The template for displaying: Página de Contato
 */
?>
<?php get_header(); ?>

<?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
<div class="sub-banner" style="background-image: url('https://images.unsplash.com/photo-1587560699334-bea93391dcef?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDh8fGNvbnRhY3R8ZW58MHx8fHwxNjM0MDEyNjIz&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=1920&h=253&fit=crop');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> 
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
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, 'Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)"> 
                                <li>
                                    <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
                                        <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                        <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                        <?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
                                            <span>/</span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </li>                                             
                                <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
                                <li>
                                    <?php echo $breadcrumb[ 'name' ]; ?>
                                </li>                                             
                            </ul>
                        <?php endif; ?> 
                    </div>                                 
                </div>                             
                <div class="col-md-6"> 
                    <div class="contact-info"> 
                        <ul> 
                            <li><i class="fa fa-phone"></i> 
                                <?php echo get_theme_mod( 'pam_sc_header_telefone' ); ?>
                            </li>                                         
                            <li> <a class="btn btn-md button-theme" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'contato', 'page' ) ) ); ?>"><?php _e( 'Contate-nos', 'pam' ); ?></a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="contact-1 content-area-5"> 
    <div class="container"> 
        <div class="row"> 
            <div class=" col-lg-4 col-md-5"> 
                <div class="contact-info"> 
                    <h3 class="heading"><?php _e( 'Escritório', 'pam' ); ?></h3> 
                    <p><?php echo get_field( 'field_5fb3fd8e6ddd9' ); ?></p> 
                    <div class="media"> <i class="flaticon-technology-1"></i> 
                        <div class="media-body"> 
                            <h5 class="mt-0"><?php _e( 'Telefone:', 'pam' ); ?></h5> 
                            <p><?php echo get_post_meta( get_the_ID(), 'telefone', true ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="media"> <i class="flaticon-envelope"></i> 
                        <div class="media-body"> 
                            <h5 class="mt-0"><?php _e( 'Email:', 'pam' ); ?></h5> 
                            <p><?php echo get_field( 'e-mail' ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="media"> <i class="flaticon-globe"></i> 
                        <div class="media-body"> 
                            <h5 class="mt-0"><?php _e( 'Web:', 'pam' ); ?></h5> 
                            <p><?php echo get_field( 'website' ); ?></p> 
                        </div>                                     
                    </div>                                                                  
                </div>                             
            </div>                         
            <div class="offset-lg-1 col-lg-7 col-md-7 "> 
                <h3 class="heading"><?php _e( 'Entre em contato conosco', 'pam' ); ?></h3> 
                <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                <?php $mailer->process( array(
                      'form_id' => 'contact_form_mailer_id',
                      'send_to_email' => true,
                      'title' => 'Formulário de Contato'
                ) ); ?>
                <?php if( !$mailer->processed || $mailer->error) : ?>
                    <form action="<?php echo '#contact_form_mailer_id'; ?>" method="post" enctype="multipart/form-data" id="contact_form_mailer_id" onsubmit="event.stopImmediatePropagation();event.stopPropagation();"> 
                        <div class="row"> 
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                                <div class="form-group name"> 
                                    <input type="text" name="name_field" class="form-control" placeholder="Seu Nome" required value="<?php echo ( isset( $_POST['name_field'] ) ? $_POST['name_field'] : '' ); ?>"/> 
                                </div>                                             
                            </div>                                         
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                                <div class="form-group email"> 
                                    <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo ( isset( $_POST['email'] ) ? $_POST['email'] : '' ); ?>"/> 
                                </div>                                             
                            </div>                                         
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                                <div class="form-group subject"> 
                                    <input type="text" name="subject" class="form-control" placeholder="Assunto" required value="<?php echo ( isset( $_POST['subject'] ) ? $_POST['subject'] : '' ); ?>"/> 
                                </div>                                             
                            </div>                                         
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                                <div class="form-group number"> 
                                    <input type="text" name="phone" class="form-control" placeholder="Seu Telefone" required value="<?php echo ( isset( $_POST['phone'] ) ? $_POST['phone'] : '' ); ?>"/> 
                                </div>                                             
                            </div>                                         
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                <div class="form-group message"> 
                                    <textarea class="form-control is-valid" name="message" placeholder="Escreva sua mensagem"><?php echo ( isset( $_POST['message'] ) ? $_POST['message'] : '' ); ?></textarea> 
                                </div>                                             
                            </div>                                         
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                                <div class="send-btn"> 
                                    <button class="btn btn-md button-theme" type="submit">
                                        <?php _e( 'Enviar Mensagem', 'pam' ); ?>
                                    </button>                                                 
                                </div>                                             
                            </div>                                         
                        </div>                                     
                        <input type="hidden" name="contact_form_mailer_id" value="1"/>
                    </form>
                <?php endif; ?>
                <?php if( $mailer->processed ) : ?>
                    <?php echo $mailer->message; ?>
                <?php endif; ?> 
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="section"> 
    <div class="map">                      
        <?php echo get_field( 'mapa' ); ?> 
    </div>                 
</div>                         

<?php get_footer(); ?>