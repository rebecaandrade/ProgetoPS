<?php echo $this->load->view('_inc/header_thin')?>
		<div id="subtitle-logo">
			<h2>CADASTRO DE ADMINISTRADOR</h2>
		</div>
	</div>
</div>
	<br>
	<?php echo form_open('admin/insert_new_admin')?>
	<p><label> Usuário:<input type="text" name="usuario"></label></p><br>
	<p><label> Nome:<input type="text" name="nome"></label></p><br>
	<p><label> Email:<input type="text" name="email"></label></p><br>
	<p><label> Telefone<input type="text" name="telefone"></label></p><br>
	<p><label>Senha:<input type="password" name="senha"></label></p><br>
	<p><label>Corfirmação de Senha:<input type="password" name="confirmasenha"></label></p><br>
	<input type="submit" value="CADASTRAR">
	<?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>