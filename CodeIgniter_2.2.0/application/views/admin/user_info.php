<?php echo $this->load->view('_inc/header_small') ?>
<div id="subtitle-logo-small">
		  <span class="subtitle-url"><h4>Informação Candidato</h4></span>
		</div>
	  </div>
	</div>
	<!--
	<div id="dados" class="lista">
		<br><br>
		<p>Nome : <?php echo $user->nome; ?> <br /></p>
		<p>E-mail : <?php echo $user->email;?> <br /></p>
		<p>Curso : <?php echo $user->curso; ?> <br /></p>
		<p>Semestre : <?php echo $user->semestre;?> <br /></p>
		<p>Telefone : <?php echo $user->telefone; ?> <br /></p>
	 </div>
-->
		<div id="user-info">
			<div class="profile-photo">
				<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
				<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				<p><?php echo $user->nome; ?> <br /</p>
			</div>
			<div id="profile-data">
			<p>
				Curso:
				</p>
			<p><?php echo $user->curso; ?></p>
			<p>
				<br />
				Semestre:
			</p>
			<p><?php echo $user->semestre;?></p>
			<p>
				<br />
				Email:
			</p>
			<p><?php echo $user->email;?> </p>
			<p>
				<br />
				Telefone:
			</p>
			<p><?php echo $user->telefone; ?></p>
			<p>Usuario : <?php echo $user->usuario; ?> <br /></p>
			<p>Número de PS(s) que participou : <?php echo $user->num_de_ps; ?> <br /></p>
			</div>
		</div>

		<div id="user-activity">
			<div id="user-activity-nav-top">
				<img src="<?php echo base_url();?>assets/images/status_profile_out.png" alt="" />
			</div>
			<div id="user-activity-nav-body">
		</div>

		<div id="user-interview">

		</div>
<?php echo $this->load->view('_inc/footer') ?>
