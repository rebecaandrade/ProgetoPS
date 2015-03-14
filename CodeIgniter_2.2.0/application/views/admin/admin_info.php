<?php echo $this->load->view('_inc/header_large')?>
<?php echo $this->load->view('_inc/nav_bar')?>
		<div class="header-text-large-square-2 header-text-uppercase">
				<p>editar administrador</p>
			</div>
		</div>
		</div>

		<div id="content" class="content-large">
			<?php echo form_open('admin/update_admin_account');?>
		<div class="admin-info-column-2">
		<label> Nome<input type="text" name="nome" value="<?php echo $user->nome?>"></label><br />
		<label> Email<input type="text" name="email" value="<?php echo $user->email?>"></label><br />
		<label> Telefone<input type="text" name="telefone" id="telefone" maxlength="15" value="<?php echo $user->telefone?>"></label><br />
			<div class="button-box">
				<input class="button b-light-update" type="submit" value="">
			</div>
		</div>
		<div class="admin-info-column-2">
		<input type="hidden" name="id" value="<?php echo $user->id_login?>">
		</div>
		<?php echo form_close() ?>
		</div>

<?php echo $this->load->view('_inc/footer')?>
