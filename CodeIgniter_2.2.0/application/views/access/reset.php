<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    RECUPERAR SENHA
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div id="reset-password" class="col-md-8 col-md-offset-2 form-group">
        		<?php 
		if(isset($encrypt)){ 
			if(isset($encrypt)){
			?>
			        <?php echo form_open('access/reset_password') ?>
			        	<label>Insira a nova senha<br /><input type="password" class="form-control center-block" name="senha"></label><br />
			        	<label>Confirme a nova senha<br /><input type="password" class="form-control center-block" name="novasenha"></label><br />
			        	<input type="hidden" class="form-control" name="encrypt" value="<?php echo $encrypt?>">
			        	
			        	<input type="submit" class="btn btn-dark-accept center-block" value="">
			        <?php echo form_close() ?>
	    	<?php 
	    	} else { ?>
	    	<h3>
	    		Link de confirmação expirou! Reenvie o e-mail para alterar a senha.
	    	</h3>
	    <?php 
			} 
		} else { ?>
			<h3>
				Acesse "Esqueci minha senha" para recuperar sua senha.
			</h3>
		<?php 
		} ?>
        </div>
    </div>
<?php echo $this->load->view('_inc/footer_boot') ?>