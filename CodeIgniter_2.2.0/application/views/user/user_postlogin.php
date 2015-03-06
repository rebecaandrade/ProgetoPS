<?php echo $this->load->view('_inc/header_large') ?>
<div class="header-text-large-square-2">
					<a href="http://www.cjr.org.br"><p>www.cjr.org.br</p></a>
				</div>
			</div>
		</div>

<div id="content" class="content-large">
  <div id="postlogin-field">
    <div class="postlogin-field-button">
      <img src="<?php echo base_url();?>assets/images/submission_post.png" alt="" />
        <p>Inscreva-se</p>
    </div>
    <div class="postlogin-field-button">
			<a href="<?php echo base_url();?>index.php/usuario/home/">
				<img src="<?php echo base_url();?>assets/images/profile_post.png" alt="" />
	        <p>Perfil</p>
			</a>
    </div>
  </div>
</div>

<?php echo $this->load->view('_inc/footer') ?>
