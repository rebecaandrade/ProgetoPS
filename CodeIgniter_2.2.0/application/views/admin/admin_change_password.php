<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    ALTERAR SENHA
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('_inc/nav_bar')?>
    <div class="row">
		<div class="col-md-6 col-md-offset-5 form-group form-column">
			<?php echo form_open('admin/set_new_password') ?>
	        	<label>Insira a senha atual<br />
				<input type="password" class="form-control" name="senha_old" value=""></label><br />
	        	<label>Insira a nova senha<br />
				<input type="password" class="form-control" name="senha" value=""></label><br />
	        	<label>Confirme a nova senha<br />
				<input type="password" class="form-control" name="novasenha" value=""></label><br />
		</div>
    </div>
	<div class="row">
		<div class="col-md-12">
			<input type="submit" class="btn btn-dark-accept center-block" value="">
		<?php echo form_close() ?>
		</div>
	</div>
<?php echo $this->load->view('_inc/footer') ?>
