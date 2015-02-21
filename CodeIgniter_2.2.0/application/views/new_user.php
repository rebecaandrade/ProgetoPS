<?php echo $this->load->view('_inc/header_small')?>
	<div class="new_user">
		<?php echo form_open('usuario/insert_new_user')?>
			<label> Nome: <input type="text" name="nome" ></label><br>
			<label> Usuário: <input type="text" name="usuario"> </label><br>
			<label> Email: <input type="text" name="email"> </label><br>
			<label> Curso: 	<br>
							CIC<input type="radio" name="curso" checked=""><br>			
			</label>
			<label>LIC<input type="radio" name="curso"><br></label><br>
			<label> Semestre: <input type="text" name="semestre"> </label><br>
			<label> Telefone: <input type="text" name="telefone"> </label><br>
			<label> Foto: <input type="file" name="foto"></label><br>
			<label> Senha: <input type="password" name="password"></label><br>
			<label> Confirmação de Senha: <input type="password" name="newpassword"></label><br>
			
		<?php echo form_close() ?>
	</div>
<?php echo $this->load->view('_inc/footer')?>