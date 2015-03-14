<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<p>Informações Candidato</p>
</div>
</div>
</div>
<div id="content" class="content-thin">	
	<div id="infouser-id">
		<div id="infouser-id-photo">
			<div id="infouser-id-photo-frame">
				<img src="<?php echo base_url();?>assets/images/photo_profile.png" />
				<img src="<?php if($user->foto){echo $user->foto;} else {echo base_url().'assets/images/foto_usuario.png';}?>" />
			</div>
			<div id="infouser-id-photo-name">
				<p>
					<?php echo $user->nome; ?>
				</p>
			</div>

		</div>
		<div id="infouser-id-info">
			<p>
				Curso:
				</p>
			<p> <?php echo $user->curso; ?> </p>
			<p>
				<br />
				Semestre:
			</p>
			<p> <?php echo $user->semestre;?> </p>
			<p>
				<br />
				Email:
			</p>
			<p> <?php echo $user->email;?> </p>
			<p>
				<br />
				Telefone:
			</p>
			<p> <?php echo $user->telefone; ?> </p>
			<p>
				<br />
				Usuario:
			</p>
			<p> <?php echo $user->usuario; ?> </p>
			<p>
				<br />
				Número de PS(s) que participou :
			</p>
			<p> <?php echo $user->num_de_ps; ?></p>
		</div>
	</div>
</div>

<?php echo $this->load->view('_inc/footer') ?>