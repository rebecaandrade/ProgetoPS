<?php echo $this->load->view('_inc/header_small')?>
	<div id="subtitle-logo">
		<h2>DADOS ADMINISTRADOR</h2>
	</div>
	<div>
		<?php echo form_open('admin/update_admin_account');?>
			<br><br>
		    <p><label> Nome: <input type="text" name="nome" value="<?php echo $user->nome?>"> </label><br></p>
	    	<p><label> Email: <input type="text" name="email" value="<?php echo $user->email?>"> </label><br></p>
	    	<p><label> Curso: <input type="text" name="curso" value="<?php echo $user->curso?>"> </label><br></p>
	    	<p><label> Semestre: <input type="text" name="semestre" value="<?php echo $user->semestre?>"> </label><br></p>
	    	<p><label> Telefone: <input type="text" name="telefone" value="<?php echo $user->telefone?>"> </label><br></p>
	    <?php echo form_close();?>
    </div>
<?php echo $this->load->view('_inc/footer')?>