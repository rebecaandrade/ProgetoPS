<?php echo $this->load->view('_inc/header_small') ?>
<div id="subtitle-logo-small">
		  <span class="subtitle-url"><h4>Informação Candidato</h4></span>
		</div>
	  </div>
	</div>
	<div id="dados" class="lista">
		<br><br>
		<p>Nome : <?php echo $user->nome; ?> <br /></p>
		<p>Usuario : <?php echo $user->usuario; ?> <br /></p>
		<p>E-mail : <?php echo $user->email;?> <br /></p>
		<p>Curso : <?php echo $user->curso; ?> <br /></p>
		<p>Semestre : <?php echo $user->semestre;?> <br /></p>
		<p>Telefone : <?php echo $user->telefone; ?> <br /></p>
		<p>Número de PS(s) que participou : <?php echo $user->num_de_ps; ?> <br /></p>

	   </div>
<?php echo $this->load->view('_inc/footer') ?>