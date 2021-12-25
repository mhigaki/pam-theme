<div class="sidebar-right"> 
  <!-- Contact 1 start -->   
  <div class="contact-2 widget reviews"> 
    <h3 class="sidebar-title"><?php _e( 'Mande uma mensagem', 'pam' ); ?></h3> 
    <?php $mailer = new PG_Simple_Form_Mailer(); ?>
    <?php $mailer->process( array(
        'form_id' => 'reviews_mailer_id',
        'send_to_email' => true,
        'email' => 'contato@pamconsultoria.com.br',
        'title' => 'Fale com o Corretor'
    ) ); ?>
    <?php if( !$mailer->processed || $mailer->error) : ?>
      <form action="<?php echo '#reviews_mailer_id'; ?>" method="post" enctype="multipart/form-data" id="reviews_mailer_id" onsubmit="event.stopImmediatePropagation();event.stopPropagation();"> 
        <div class="rowo"> 
          <div class="form-group name"> 
            <input class="form-control" type="text" name="name_field" placeholder="Seu Nome" value="<?php echo ( isset( $_POST['name_field'] ) ? $_POST['name_field'] : '' ); ?>"/> 
          </div>           
          <div class="form-group email"> 
            <input class="form-control" type="email" name="email" placeholder="Seu Email" value="<?php echo ( isset( $_POST['email'] ) ? $_POST['email'] : '' ); ?>"/> 
          </div>           
          <div class="form-group number"> 
            <input class="form-control" type="text" name="phone" placeholder="Seu Telefone de contato" value="<?php echo ( isset( $_POST['phone'] ) ? $_POST['phone'] : '' ); ?>"/> 
          </div>           
          <div class="form-group message"> 
            <textarea class="form-control" name="message" placeholder="Escreva sua mensagem"><?php echo ( isset( $_POST['message'] ) ? $_POST['message'] : '' ); ?></textarea> 
          </div>           
          <div class="send-btn"> 
            <button class="btn btn-md button-theme btn-block" type="submit">
              <?php _e( 'Enviar', 'pam' ); ?>
            </button>             
          </div>           
        </div>         
        <input type="hidden" name="reviews_mailer_id" value="1"/>
      </form>
    <?php endif; ?>
    <?php if( $mailer->processed ) : ?>
      <?php echo $mailer->message; ?>
    <?php endif; ?> 
  </div>   
  <!-- Latest reviews Start -->      
</div>