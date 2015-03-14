<?php echo $this->load->view('_inc/header_large')?>
<?php echo $this->load->view('_inc/nav_bar')?>
		<div class="header-text-large-square-2 header-text-uppercase">
				<p>cadastrar administrador</p>
			</div>
		</div>
	</div>
	<div id="content" class="content-large">
		<?php echo form_open('admin/insert_new_admin')?>
		<div class="admin-create-column-2">
			<label> Usuário<input type="text" name="usuario"></label><br />
		<label> Nome<input type="text" name="nome"></label><br />
		<label> Email<input type="text" name="email"></label><br />
		<label> Telefone<input type="text" name="telefone" id="telefone" maxlength="15" ></label><br />
		</div>
		<div class="admin-create-column-2">
		<label>Senha<br />(Mínimo de 6 caracteres)<input type="password" name="senha"></label><br />
		<label>Corfirmação de Senha<input type="password" name="confirmasenha"></label><br />
			<div class="button-box">
				<input class="button b-dark-accept" type="submit" value="">
			</div>
		</div>
		<?php echo form_close() ?>
	</div>

<?php echo $this->load->view('_inc/footer')?>
