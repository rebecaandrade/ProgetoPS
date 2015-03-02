<?php echo $this->load->view('_inc/header_large')?>

			<div class="header-text-large-square-2 header-text-uppercase">
				<h3>EDITAR INFORMAÇÕES</h3>
			</div>
		</div>
	</div>

	<div id="content" class="content-large">
		<?php echo form_open('usuario/update_account');?>
		<div class="edit-info-column-3">
			<label>Nome:<br /><input type="text" name="nome" value="<?php echo $user->nome?>"></label>


			<div id="edit-info-photo">
				<div id="edit-info-photo-frame">
					<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
					<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				</div>
				<div id="edit-info-photo-name">
					<input type="file" name="foto" value="<?php if($user->foto)echo $user->foto?>">
				</div>
			</div>

		</div>

		<div class="edit-info-column-3">
			<label>Email:<br /><input type="text" name="email" value="<?php echo $user->email?>"> </label><br />
			<label>Curso:<br /><input type="text" name="curso" value="<?php echo $user->curso?>"> </label><br />
			<label>Semestre:<br /><input type="text" name="semestre" value="<?php echo $user->semestre?>"></label><br />
			<label>Telefone:<br /><input type="text" name="telefone" value="<?php echo $user->telefone?>"></label>

		</div>

		<div class="edit-info-column-3">
			<label>Confirmação de Senha:<br /><input type="password" name="password" value=""> </label><br />

			<div class="button-box">
				<a href="<?php echo base_url();?>index.php/usuario/delete_account?id=<?php echo $user->id_login?>">
				<img src="<?php echo base_url();?>assets/images/button_dark_cancel.png" class="icon"/></a>
				<input type='submit' value="">
			</div>
		</div>

		<?php echo form_close();?>
	</div>

<?php echo $this->load->view('_inc/footer')?>
