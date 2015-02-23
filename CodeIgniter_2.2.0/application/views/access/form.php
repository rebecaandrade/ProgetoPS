<?php echo $this->load->view('_inc/header_big')?>
<div id="subtitle-logo">
		  <h2>CADASTRO</h2>
		</div>
	  </div>
	</div>

	<?php echo form_open('usuario/insert_new_user')?>

	<div class="collum-3">
	  <label for="nome">Nome </label>
	  <input type="text" name="nome" value="">
		<label for="email">Email </label>
		<input type="text" name="email" value="">
		<label for="curso">Curso </label>
		<input type="text" name="curso" value="">
		<label for="semestre">Semestre</label>
		<input type="text" name="semestre" value="">
		<label for="telefone">Telefone </label>
		<input type="text" name="telefone" value="">
	</div>

	<div class="collum-3">
		<div id="submission-photo">
		<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
		<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
		<span>Adicionar foto</span>
		</div>
		<label for="usuario">Usuario </label>
	 	<input type="text" name="usuario" value=""><br>
	 	<label for="senha">Senha </label><br>
	 	<input type="password" name="senha" value=""><br>
	 	<label for="novasenha">Confirme a Senha </label><br>
	 	<input type="password" name="novasenha" value=""><br>
	</div>

	<div class="collum-3">
	 	<p>
			Quantas vezes já participou do processo seletivo?
	 	</p>
	 	<input type="radio" name="num_de_ps" value="" id="radio_sub_1"><label for="radio_sub_1"><span></span>Nenhuma</label>
	  	<input type="radio" name="num_de_ps" value="" id="radio_sub_2"><label for="radio_sub_2"><span></span>1 vez</label>
	  	<input type="radio" name="num_de_ps" value="" id="radio_sub_3"><label for="radio_sub_3"><span></span>2 vezes</label>
	  	<input type="radio" name="num_de_ps" value="" id="radio_sub_4"><label for="radio_sub_4"><span></span>3 ou mais</label>
	  	<input type="hidden" name="perfil" value="1">
	  	<input type="submit" value="">
	</div>

	<?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>
