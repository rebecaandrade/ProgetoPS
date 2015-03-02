<?php echo $this->load->view('_inc/header_big') ?>
<div id="subtitle-logo">
          <span class="subtitle-url"><h2>Fale Conosco</h2></span>
        </div>
      </div>
    </div>
    <div id="email-body">
      <h5>Digite sua mensagem:</h5>
      <?php echo form_open('usuario/contact_email') ?>
        <textarea name="email" rows="8" cols="40"></textarea>
        <input type="submit" name="enviar" value="">
      <?php echo form_close() ?>
    </div>
<?php echo $this->load->view('_inc/footer') ?>
