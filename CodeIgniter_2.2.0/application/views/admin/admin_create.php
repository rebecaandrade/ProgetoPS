<?php echo $this->load->view('_inc/header_large')?>

		<div class="header-text-large-square-2 header-text-uppercase">
				<h3>cadastrar administrador</h3>
			</div>
		</div>
	</div>
	<div id="content" class="content-large">
		<?php echo form_open('admin/insert_new_admin')?>
		<div class="admin-create-column-2">
			<label> Usuário:<input type="text" name="usuario"></label><br />
		<label> Nome:<input type="text" name="nome"></label><br />
		<label> Email:<input type="text" name="email"></label><br />
		<label> Telefone<input type="text" name="telefone"></label><br />
		</div>
		<div class="admin-create-column-2">
		<label>Senha:<input type="password" name="senha"></label><br />
		<label>Corfirmação de Senha:<input type="password" name="confirmasenha"></label><br />
			<div class="button-box">
				<input type="submit" value="">
			</div>
		</div>
		<?php echo form_close() ?>
	</div>

<?php echo $this->load->view('_inc/footer')?>
