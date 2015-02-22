<?php echo $this->load->view('_inc/header_big')?>
<div id="subtitle-logo">
		  <h2>CADASTRO</h2>
		</div>
	  </div>
	</div>

	<?php echo form_open('usuario/insert_new_user')?>

	<div class="collum-3">
	  <label for="nome">Nome:</label>
	  <input type="text" name="nome" value="">

	  <div class="foto-perfil">
		<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
		<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
	  </div>

	  <label for="foto">Adicionar foto:</label>
	</div>

	<div class="collum-3">
		<label for="usuario">Usuario::</label>
	 	<input type="text" name="usuario" value=""><br>
	 	<label for="senha">Senha:</label><br>
	 	<input type="password" name="senha" value=""><br>
	 	<label for="novasenha">Confirme a Senha:</label><br>
	 	<input type="password" name="novasenha" value=""><br>
	 	<label for="email">Email:</label>
	 	<input type="text" name="email" value="">
	 	<label for="curso">Curso:</label>
	 	<input type="text" name="curso" value="">
	 	<label for="semestre">Semestre</label>
	 	<input type="text" name="semestre" value="">
	 	<label for="telefone">Telefone:</label>
	 	<input type="text" name="telefone" value="">
	</div>

	<div class="collum-3">
	 	<p>
			<h5>Quantas vezes já participou do processo seletivo?</h5>
	 	</p>
	 	<input type="radio" name="num_de_ps" value="">Nenhuma<br />
	  	<input type="radio" name="num_de_ps" value="">1 vez<br />
	  	<input type="radio" name="num_de_ps" value="">2 vezes<br />
	  	<input type="radio" name="num_de_ps" value="">3 ou mais<br />
	  	<input type="hidden" name="perfil" value="1">
	  	<input type="submit" value="Cadastrar">
	</div>

	<?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>