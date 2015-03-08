<?php echo $this->load->view('_inc/header_large') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-large-square-2 header-text-uppercase">
         <p>fale conosco</p>
       </div>
     </div>
   </div>

    <div id="content" class="content-large">
      <div id="email-field">
        <?php echo form_open('usuario/contact_email') ?>
        <div id="email-field-message">
          <p>Digite sua mensagem:</p>
          <textarea name="email" rows="8" cols="40"></textarea>
        </div>
        <div id="email-field-footer">
          <input class="button b-light-accept" type="submit" name="enviar" value="">
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
<?php echo $this->load->view('_inc/footer') ?>
