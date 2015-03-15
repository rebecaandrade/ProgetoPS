<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    FALE CONOSCO
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('_inc/nav_bar')?>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div id="email-field" class="form-group">
              <?php echo form_open('usuario/contact_email') ?>
              <div id="email-field-message">
                <h4>Digite sua mensagem:</h4>
                <textarea class="form-control" name="email" rows="8" cols="40"></textarea>
              </div>
              <div id="email-field-footer">
                <input class="btn btn-light-accept center-block" type="submit" name="enviar" value="">
              </div>
              <?php echo form_close() ?>
            </div>
        </div>
    </div
<?php echo $this->load->view('_inc/footer_boot') ?>
