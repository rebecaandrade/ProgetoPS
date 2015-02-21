<?php echo $this->load->view('_inc/header_big')?>

<?php echo form_open('usuario/logar') ?>
	<div id="login-field">
		<div id="login-user">
	    	<img src="<?php echo base_url();?>assets/images/icon_user.png" class="icon"/>
	    	<input type="text" name="login" placeholder="USUÁRIO" value="">
	    </div>
	    <div id="login-password">
	    	<img src="<?php echo base_url();?>assets/images/icon_password.png" class="icon"/>
	    	<input type="password" name="password" placeholder="SENHA" value="">
	    	<input type="submit" value="Entrar">
	    	<a href="#">Esqueci minha senha</a>
	    	<div id="icon-cadastro"> </div>
	    </div>
	</div>	
<?php echo form_close() ?>

<?php echo $this->load->view('_inc/footer')?>
