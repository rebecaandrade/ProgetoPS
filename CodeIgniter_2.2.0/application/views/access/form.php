<?php echo $this->load->view('_inc/header_large')?>

			<div class="header-text-large-square-2 header-text-uppercase">
				<h3>cadastro</h3>
			</div>
		</div>
	</div>

	<div id="content" class="content-large">
		<?php echo form_open('usuario/insert_new_user')?>
		<div class="form-column-3">
			<label>Nome<br /><input type="text" name="nome" value=""></label>

			<div id="form-photo">
				<div id="form-photo-frame">
					<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
					<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				</div>
				<div id="form-photo-name">
					<input type="file" name="foto" value="">
				</div>
			</div>

		</div>

		<div class="form-column-3">
			<label>Usuário<br /><input type="text" name="usuario" value=""></label><br />

			<label>Email<br /><input type="text" name="email" value=""></label>

			<label>Curso<br /><input type="text" name="curso" value=""></label>

			<label>Semestre<br /><input type="text" name="semestre" value=""></label>

			<label>Telefone<br /><input type="text" name="telefone" value=""></label>

		</div>

		<div class="form-column-3">

		 	<label>Senha<br /><input type="password" name="senha" value=""></label>

		 	<label>Confirme a Senha<br /><input type="password" name="novasenha" value=""></label>
			<p>
				<br />
			Quantas vezes já participou do processo seletivo?
	 	</p>
	 	<input type="radio" name="num_de_ps" value="" id="radio_sub_1"><label for="radio_sub_1">
		<span></span>Nenhuma</label><br />
	  <input type="radio" name="num_de_ps" value="" id="radio_sub_2"><label for="radio_sub_2">
		<span></span>1 vez</label><br />
	  <input type="radio" name="num_de_ps" value="" id="radio_sub_3"><label for="radio_sub_3">
		<span></span>2 vezes</label><br />
	  <input type="radio" name="num_de_ps" value="" id="radio_sub_4"><label for="radio_sub_4">
		<span></span>3 ou mais</label><br /><br />
	  <input type="submit" value="">

		</div>

		<?php echo form_close();?>
	</div>

	<?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>
