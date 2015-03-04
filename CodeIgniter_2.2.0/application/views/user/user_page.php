<?php echo $this->load->view('_inc/header_thin')?>

		<div class="header-text-thin-square-2 header-text-uppercase">
			<h3>informações gerais</h3>
		</div>
	</div>
</div>

	<div id="content" class="content-thin">

		<div id="profile-nav">
			<div id="profile-nav-top" class="denied">
				<p>
					TENTE NOVAMENTE
				</p>
				<span><!-- Icone de aprovado --></span>
			</div>
			<div id="profile-nav-body">
				<div class="profile-nav-body-button">
					<a href="<?php echo base_url()?>index.php/usuario/feedback"><img src="<?php echo base_url();?>assets/images/icon_feedback.png" alt="" />
					<p>
						FeedBack
					</p></a>
				</div>
				<div class="profile-nav-body-button">
					<a href="<?php echo base_url()?>index.php/horario/load_user_interview">
					<img src="<?php echo base_url();?>assets/images/icon_date.png" alt="" />
					<p>
						Horário
					</p>
					</a>
				</div>
				<div class="profile-nav-body-button">
					<a href="<?php echo base_url();?>index.php/usuario/contact_us">
					<img src="<?php echo base_url();?>assets/images/icon_email.png" alt="" />
					<p>
						Fale Conosco
					</p>
					</a>
				</div>
				<div class="profile-nav-body-button">
					<a href="<?php echo base_url();?>index.php/usuario/edit_account">
					<img src="<?php echo base_url();?>assets/images/icon_edit.png" alt="" />
					<p>
						Editar Informações
					</p>
					</a>
				</div>
			</div>
		</div>
		<div id="profile-id">
			<div id="profile-id-photo">
				<div id="profile-id-photo-frame">
					<img src="<?php echo base_url();?>assets/images/photo_profile.png" />
					<img src="<?php echo base_url();?>assets/images/foto_usuario.png" />
				</div>
				<div id="profile-id-photo-name">
					<p>
						<?php echo $this->session->userdata('nome');?>
					</p>
				</div>
			</div>
			<div id="profile-id-info">
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

	</div>

<?php echo $this->load->view('_inc/footer')?>
