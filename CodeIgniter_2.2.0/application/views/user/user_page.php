<?php echo $this->load->view('_inc/header_thin')?>
<?php echo $this->load->view('_inc/nav_bar')?>

<div class="header-text-thin-square-2 header-text-uppercase">
	<p>informações gerais</p>
</div>
</div>
</div>

<div id="content" class="content-thin">
	<div id="profile-nav">
		<?php $status_feed = $this->session->userdata('status_feed');
			if($status_feed == '0') { ?>
				<div id="profile-nav-top" class="none">
			<?php } 
			elseif($status_feed == '1') { ?>
				<div id="profile-nav-top" class="denied">
			<?php } elseif($status_feed == '2') { ?>
				<div id="profile-nav-top" class="avaliation">
			<?php } elseif($status_feed == '3') { ?>
				<div id="profile-nav-top" class="aproved">
			<?php } elseif($status_feed == '4') { ?>
				<a onclick="confirmar('Deseja inscrever-se no Processo Seletivo atual ?','<?php echo base_url().'index.php/ps/inscribe_in_current_ps'?>')"><div id="profile-nav-top" class="signin">
			<?php } ?>
			<span><!--Icone de aprovado--></span>
		</div>
			<?php if($status_feed == '4'){ ?>
				</a>
			<?php } ?>
		<div id="profile-nav-body">
			
			<div class="profile-nav-body-button">
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/0"><img src="<?php echo base_url();?>assets/images/icon_feedback.png" alt="" />
					<p>
						FeedBack
					</p></a>
				</div>
				<?php
				if($status_feed == '2'){?>
				<div class="profile-nav-body-button">
					<a onclick="horario('Qual horário você deseja editar?','','<?php echo base_url()?>index.php/horario/load_user_interview','<?php echo base_url()?>index.php/horario/load_user_activity')" >
						<img src="<?php echo base_url();?>assets/images/icon_date.png" alt="" />
						<p>
							Horário
						</p>
					</a>
				</div>
				<?php } elseif($status_feed == '4') { ?>
				<div class="profile-nav-body-button">
					<a	onclick="swal({ title:'Inscreva-se para poder marcar os horários!',type:'info'})">
						<img src="<?php echo base_url();?>assets/images/icon_date.png" alt="" />
						<p>
							Horário
						</p>
					</a>
				</div>
				<?php } else { ?>
				<div class="profile-nav-body-button">
					<a	onclick="swal({ title:'Os horários não podem ser alterados',type:'info'})">
						<img src="<?php echo base_url();?>assets/images/icon_date.png" alt="" />
						<p>
							Horário
						</p>
					</a>
				</div>
				<?php } ?>
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
					<img src="<?php if($this->session->userdata('foto')){echo $this->session->userdata('foto');} else{ echo base_url().'assets/images/foto_usuario.png';}?>" />
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
