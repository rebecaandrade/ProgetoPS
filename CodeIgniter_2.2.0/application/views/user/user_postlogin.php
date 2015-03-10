<?php echo $this->load->view('_inc/header_large') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-large-square-2">
					<a href="http://www.cjr.org.br"><p>www.cjr.org.br</p></a>
				</div>
			</div>
		</div>

<div id="content" class="content-large">
  <div id="postlogin-field">
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
</div>

<?php echo $this->load->view('_inc/footer') ?>
