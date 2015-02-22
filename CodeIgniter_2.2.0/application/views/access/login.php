<?php echo $this->load->view('_inc/header_big')?>
<div id="subtitle-logo-small">
	<span class="subtitle-url"><h4>Preencher FeedBack</h4></span>
</div>
</div>
</div>

<?php echo form_open('access/sign_in') ?>
	<div id="login-field">
		<div id="login-user">
	    	<img src="<?php echo base_url();?>assets/images/icon_user.png" class="icon"/>
	    	<input type="text" name="login" placeholder="USUÁRIO" value="">
	    </div>
	    <div id="login-password">
	    	<img src="<?php echo base_url();?>assets/images/icon_password.png" class="icon"/>
	    	<input type="password" name="password" placeholder="SENHA" value="">
	    	<a href="<?php echo base_url(); ?>index.php/access/password_recovery">Esqueci minha senha</a>
	    	<div id="icon-cadastro"> </div>
				
				<input type="submit" value="Entrar">
	    </div>
	</div>
<?php echo form_close() ?>


<?php echo $this->load->view('_inc/footer')?>
