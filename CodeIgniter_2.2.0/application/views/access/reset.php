<?php echo $this->load->view('_inc/header_boot') ?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<p>Recuperar Senha</p>
</div>
</div>
</div>
	<?php 

		if(isset($encrypt) && $encrypt){ 
			if(isset($time) && $time){
			?>
				<div id="content" class="content-large">
			        <?php echo form_open('access/reset_password') ?>
			        	<label>Insira a nova senha<input type="password" name="senha"></label><br />
			        	<label>Confirme a nova senha<input type="password" name="novasenha"></label><br />
			        	<input type="hidden" name="encrypt" value="<?php echo $encrypt?>">
			        	<input type="submit" value="Alterar">
			        <?php echo form_close() ?>
			    </div>
	    	<?php 
	    	} else { ?>
	    	<p>
	    		Link de confirmação expirou! Reenvie o e-mail para alterar a senha.
	    	</p>
	    <?php 
			} 
		} else { ?>
			<p>
				Acesse "Esqueci minha senha" para recuperar sua senha.
			</p>
		<?php 
		} ?>
<?php echo $this->load->view('_inc/footer_boot') ?>