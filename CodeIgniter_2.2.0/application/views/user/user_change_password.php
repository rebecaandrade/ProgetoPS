<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<p>Alterar Senha</p>
</div>
</div>
</div>

	<div id="content" class="content-large">
        <?php echo form_open('usuario/set_new_password') ?>
        	<label>Insira a senha atual<input type="password" name="senha_old" value=""></label><br />
        	<label>Insira a nova senha<input type="password" name="senha" value=""></label><br />
        	<label>Confirme a nova senha<input type="password" name="novasenha" value=""></label><br />
        	<input type="submit" value="Alterar">
        <?php echo form_close() ?>
    </div>
<?php echo $this->load->view('_inc/footer') ?>