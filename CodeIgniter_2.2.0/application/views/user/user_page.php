<?php echo $this->load->view('_inc/header_small')?>

<div id="subtitle-logo-small">
	<span class="subtitle-url"><h4>INFORMAÇÕES GERAIS</h4></span>
</div>
</div>
</div>

<script charset="utf-8">
	swal("Bem vindo ao sistema");
</script>

<div id="profile-body">
	<div class="profile-photo">
		<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
		<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
		<p><?php echo $this->session->userdata('nome');?></p>
	</div>
	<div id="profile-data">
	<p>
		Curso:
		</p>
	<p> <?php echo $this->session->userdata('curso');?> </p>
	<p>
		<br />
		Semestre:
	</p>
	<p> <?php echo $this->session->userdata('semestre');?> </p>
	<p>
		<br />
		Email:
	</p>
	<p> <?php echo $this->session->userdata('email');?> </p>
	<p>
		<br />
		Telefone:
	</p>
	<p> <?php echo $this->session->userdata('telefone');?> </p>
	</div>
</div>

<div id="profile-nav">
	<div id="profile-nav-top">
		<img src="<?php echo base_url();?>assets/images/status_profile_out.png" alt="" />
	</div>
	<div id="profile-nav-body">
		<div class="profile-icon-nav">
			<img src="<?php echo base_url();?>assets/images/icon_feedback.png" alt="" />
			<p>FeedBack</p>
		</div>

		<div class="profile-icon-nav">
			<img src="<?php echo base_url();?>assets/images/icon_date.png" alt="" />
			<p>Horário</p>
		</div>

		<div class="profile-icon-nav">
			<a href="<?php echo base_url();?>index.php/usuario/contact_us">
				<img src="<?php echo base_url();?>assets/images/icon_email.png" alt="" />
				<p>Fale Conosco</p>
			</a>
		</div>

		<div class="profile-icon-nav">
			<a href="<?php echo base_url();?>index.php/usuario/edit_account"><img src="<?php echo base_url();?>assets/images/icon_edit.png" alt="" /></a>
			<p>Editar Informações</p>
		</div>
	</div>
	<div><img src="<?php echo base_url();?>assets/images/icon_facebook.png" alt="" /><p>Facebook</p></div>
	<div><img src="<?php echo base_url();?>assets/images/icon_site.png" alt="" /><p>Site</p></div>
</div>



<?php echo $this->load->view('_inc/footer')?>
