<?php echo $this->load->view('_inc/header_large')?>

<div class="header-text-large-square-2">
					<a href="http://www.cjr.org.br"><h3>www.cjr.org.br/site</h3></a>
				</div>
			</div>
		</div>

		<div id="content" class="content-large">
				<div id="login-field">
					<?php echo form_open('access/sign_in') ?>
					<div id="login-field-signup">
						<a href="<?php echo base_url(); ?>index.php/usuario/create_user">Cadastre-se</a>
					</div>
					<div id="login-field-input">
						<div id="login-field-input-user">
							<label><input type="text" name="login" value="" placeholder="USUÁRIO"></label>
						</div>
						<div id="login-field-input-password">
							<label><input type="password" name="password" value="" placeholder="SENHA"></label>
							<a href="<?php echo base_url(); ?>index.php/access/password_recovery">Esqueci minha senha</a>
						</div>
						<div id="login-field-input-submit">
							<input type="submit" name="name" value="">
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>

<?php echo $this->load->view('_inc/footer')?>
