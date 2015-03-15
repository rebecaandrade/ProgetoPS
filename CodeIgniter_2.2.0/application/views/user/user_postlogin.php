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
        <div id="postlogin-field" class="col-md-6 col-md-offset-3">
          <div class="postlogin-field-button">
          	<a onclick="confirmar('Deseja inscrever-se no Processo Seletivo atual ?','<?php echo base_url().'index.php/ps/inscribe_in_current_ps'?>') ">
            	<img src="<?php echo base_url();?>assets/images/form_signup.png" alt="" />
              	<p>Inscreva-se</p>
              	</a>
          </div>
          <div class="postlogin-field-button">
      			<a href="<?php echo base_url();?>index.php/usuario/load_user_page/">
      				<img src="<?php echo base_url();?>assets/images/profile_post.png" alt="" />
      	        <p>Perfil</p>
      			</a>
          </div>
        </div>
    </div
<?php echo $this->load->view('_inc/footer_boot') ?>
