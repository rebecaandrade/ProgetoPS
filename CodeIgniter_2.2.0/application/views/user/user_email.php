<?php echo $this->load->view('_inc/header_large') ?>
<div class="header-text-large-square-2 header-text-uppercase">
         <h3>fale conosco</h3>
       </div>
     </div>
   </div>

    <div id="content" class="content-large">
      <div id="email-field">
        <?php echo form_open('usuario/contact_email') ?>
        <div id="email-field-message">
          <h2>Digite sua mensagem:</h2>
          <textarea name="email" rows="8" cols="40"></textarea>
        </div>
        <div id="email-field-footer">
          <input type="submit" name="enviar" value="">
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
<?php echo $this->load->view('_inc/footer') ?>
