<?php echo $this->load->view('_inc/header_large')?>

			<div class="header-text-large-square-2 header-text-uppercase">
				<p>cadastro</p>
			</div>
		</div>
	</div>

	<div id="content" class="content-large">
		<?php echo form_open_multipart('usuario/insert_new_user')?>
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

			<label>Curso<br />
                <select name="curso">
                    <option > </option>
                    <option value="Ciência da computação(bacharelado)">Ciência da computação(bacharelado)</option>
                    <option value="Computação (licenciatura)">Computação (licenciatura)</option>
                </select><br /><br />
            </label>

			<label>Semestre<br />
                <select name="semestre">
                    <option > </option>
                    <?php for ($i=1; $i < 10 ; $i++) { 
                    ?>
                    <option value="<?php echo $i?>º"><?php echo $i?>º</option>
                    <?php } ?>
                </select><br /><br />
            </label>

			<label>Telefone<br /><input type="text" name="telefone" id="telefone" maxlength="15" value=""></label>

		</div>

		<div class="form-column-3">

		 	<label>Senha<br />(Mínimo de 6 caracteres)<br /><input type="password" name="senha" value=""></label>

		 	<label>Confirme a Senha<br /><input type="password" name="novasenha" value=""></label>
			<h3>
				<br />
			Quantas vezes já participou do processo seletivo?
		</h3><br />
	 	<input type="radio" name="num_de_ps" value="0" id="radio_sub_1" checked>
		<label for="radio_sub_1" class="label-radio">Nenhuma</label><br />
	  <input type="radio" name="num_de_ps" value="1" id="radio_sub_2">
		<label for="radio_sub_2" class="label-radio">
		<p>
			1 vez
		</p></label><br />
	  <input type="radio" name="num_de_ps" value="2" id="radio_sub_3">
		<label for="radio_sub_3" class="label-radio">
			2 vezes</label><br />
	  <input type="radio" name="num_de_ps" value="3" id="radio_sub_4">
		<label for="radio_sub_4" class="label-radio">
		3 ou mais</label><br /><br />
	  <input class="button b-light-accept" type="submit" value="">

		</div>

		<?php echo form_close();?>
	</div>

	<?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>
