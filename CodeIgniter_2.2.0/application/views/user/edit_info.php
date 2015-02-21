<?php echo $this->load->view('_inc/header_small')?>
<div id="subtitle-logo">
		<h2>ALTERAR DADOS</h2>
</div>
    	</div>
    </div>
    <?php echo form_open('usuario/atualizar_cadastro');?>
	    <div class="collum">
	    	<label> Nome: <input type="text" name="nome" value="<?php echo $user->nome?>"> </label>
			<label> Adicionar foto: <input type="text" name="foto" value="<?php echo $user->?>"> </label>
	    </div>
	    <div class="collum">
	    	<label> Email: <input type="text" name="email" value="<?php echo $user->email?>"> </label>
	    	<label> Curso: <input type="text" name="curso" value="<?php echo $user->curso?>"> </label>
	    	<label> Semestre: <input type="text" name="semestre" value="<?php echo $user->semestre?>"> </label>
	    	<label> Telefone: <input type="text" name="telefone" value="<?php echo $user->telefone?>"> </label>
	    	<input type='submit' value='Atualizar'>
	    </div>
    <?php echo form_close();?>
<?php echo $this->load->view('_inc/footer')?>