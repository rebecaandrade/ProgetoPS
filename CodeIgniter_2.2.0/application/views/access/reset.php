<?php echo $this->load->view('_inc/header_boot') ?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<p>Recuperar Senha</p>
</div>
</div>
</div>

	<div id="content" class="content-large">
        <?php echo form_open('usuario/reset_password') ?>
        	<label>Insira a nova senha<input type="password" name="senha" value=""></label><br />
        	<label>Confirme a nova senha<input type="password" name="novasenha" value=""></label><br />
        	<input type="submit" value="Alterar">
        <?php echo form_close() ?>
    </div>
<?php echo $this->load->view('_inc/footer_boot') ?>