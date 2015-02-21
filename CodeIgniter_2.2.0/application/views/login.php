<?php echo $this->load->view('_inc/header_big')?>
<<<<<<< HEAD
<?php echo form_open('usuario/login') ?>

<div id="login-field">
	<div id="login-user">
    	<img src="<?php echo base_url();?>assets/images/icon_user.png" class="icon"/>
    	<input type="text" name="login" placeholder="USUÁRIO" value="">
    </div>
    <div id="login-password">
    	<img src="<?php echo base_url();?>assets/images/icon_password.png" class="icon"/>
    	<input type="password" name="password" placeholder="SENHA" value="">
    	<a href="#">Esqueci minha senha</a>
    	<div id="icon-cadastro">
    	</div>
    </div>
</div>
<?php echo form_close() ?>
=======

<?php echo form_open('access/sign_in') ?>
	<div id="login-field">
		<div id="login-user">
	    	<img src="<?php echo base_url();?>assets/images/icon_user.png" class="icon"/>
	    	<input type="text" name="login" placeholder="USUÁRIO" value="">
	    </div>
	    <div id="login-password">
	    	<img src="<?php echo base_url();?>assets/images/icon_password.png" class="icon"/>
	    	<input type="password" name="password" placeholder="SENHA" value="">
	    	<input type="submit" value="Entrar">
	    	<a href="<?php echo base_url(); ?>index.php/access/password_recovery">Esqueci minha senha</a>
	    	<div id="icon-cadastro"> </div>
	    </div>
	</div>	
<?php echo form_close() ?>

>>>>>>> 339209d339e2ff9a27e3f8a8d847a08bd5d47d00
<?php echo $this->load->view('_inc/footer')?>
