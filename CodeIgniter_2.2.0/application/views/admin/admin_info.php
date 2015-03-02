<?php echo $this->load->view('_inc/header_large')?>
		<div class="header-text-large-square-2 header-text-uppercase">
				<h3>editar administrador</h3>
			</div>
		</div>
		</div>

		<div id="content" class="content-large">
			<?php echo form_open('admin/update_admin_account');?>
		<div class="admin-info-column-2">
			<label> Usuário:<input type="text" name="usuario"></label><br />
		<label> Nome: <input type="text" name="nome" value="<?php echo $user->nome?>"></label><br />
		<label> Email: <input type="text" name="email" value="<?php echo $user->email?>"></label><br />
		<label> Telefone: <input type="text" name="telefone" value="<?php echo $user->telefone?>"></label><br />
		<label> Curso: <input type="text" name="curso" value="<?php echo $user->curso?>">
		</div>
		<div class="admin-info-column-2">
		<label> Semestre: <input type="text" name="semestre" value="<?php echo $user->semestre?>"></label><br />
		<label>Senha:<input type="password" name="senha"></label><br />
		<label>Corfirmação de Senha:<input type="password" name="confirmasenha"></label><br />
		<input type="hidden" name="id" value="<?php echo $user->id_login?>">
			<div class="button-box">
				<input type="submit" value="">
			</div>
		</div>
		<?php echo form_close() ?>
		</div>

<?php echo $this->load->view('_inc/footer')?>
