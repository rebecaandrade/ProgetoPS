<?php echo $this->load->view('_inc/header_boot') ?>
                          <div class="header-text-aside">
                              <a href="http://cjr.org.br/">www.cjr.org.br/</a>
                          </div>
                  </div>
              </div>
          </div>
      </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div id="login-field" class="row center-block" >
                <?php echo form_open('access/sign_in') ?>
                    <div id="login-field-input" class="col-xs-8 col-md-9">
                        <div class="form-group">
                            <label for="login-field-user"></label>
                            <input type="text" class="form-control" name="login" placeholder="USUÁRIO" id="login-field-user">
                            <label for="login-field-password"></label>
                            <input type="password" class="form-control" name="password" placeholder="SENHA" id="login-field-password">
                            <a href="<?php echo base_url(); ?>index.php/access/password_recovery">Esqueci minha senha</a>
                            <input type="submit" class="btn btn-light-accept center-block" name="name" value="&nbsp">
                        </div>
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/usuario/create_user">
                    <div id="login-field-signup" class="col-xs-1 col-md-1">
                            <p>Primeira vez aqui?</p>
                        <img src="<?php echo base_url(); ?>/assets/images/form_signup.png" alt="" />
                    </div>
                    </a>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
</div>
<?php echo $this->load->view('_inc/footer_boot') ?>
