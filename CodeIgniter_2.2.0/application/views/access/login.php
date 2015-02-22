<?php echo $this->load->view('_inc/header_big')?>
<div id="subtitle-logo">
		<span class="subtitle-url"><h5><a href="http://www.cjr.org.br/site/">http://www.cjr.org.br/site/</a></h5></span>
</div>
</div>
</div>

	<div id="login-field">
		<?php echo form_open('access/sign_in') ?>
		<div id="login-user">
	    	<img src="<?php echo base_url();?>assets/images/icon_user.png"/>
	    	<input type="text" name="login" placeholder="USUÁRIO" value="">
	    </div>
	    <div id="login-password">
	    	<img src="<?php echo base_url();?>assets/images/icon_password.png"/>
	    	<input type="password" name="password" placeholder="SENHA" value="">
	    	<a href="<?php echo base_url(); ?>index.php/access/password_recovery">Esqueci minha senha</a>
	    </div>
			<div id="login-submission">
				<p>
					Primeira vez aqui?
				</p>
				<a href="<?php echo base_url(); ?>index.php/usuario/create_user">
				<img src="<?php echo base_url();?>assets/images/submission_post.png" alt="" /><p>
					Cadastre-se
				</p>
				</a>
			</div>
			<input type="submit" value="ENTRAR">
			<?php echo form_close() ?>
	</div>



<?php echo $this->load->view('_inc/footer')?>
