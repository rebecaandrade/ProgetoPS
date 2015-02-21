<?php echo $this->load->view('_inc/header_small')?>
<div id="subtitle-logo">
		<h2>ALTERAR DADOS</h2>
</div>
    	</div>
    </div>
    <?php echo form_open('usuario/update_account');?>
	    <div class="collum">
	    	<label> Nome: <input type="text" name="nome" value="<?php echo $user->nome?>"> </label>
			<label> Adicionar foto: <input type="file" name="foto" value="<?php if($user->foto)echo $user->foto?>"> </label>
	    </div>
	    <div class="collum">
	    	<label> Email: <input type="text" name="email" value="<?php echo $user->email?>"> </label><br>
	    	<label> Curso: <input type="text" name="curso" value="<?php echo $user->curso?>"> </label><br>
	    	<label> Semestre: <input type="text" name="semestre" value="<?php echo $user->semestre?>"> </label><br>
	    	<label> Telefone: <input type="text" name="telefone" value="<?php echo $user->telefone?>"> </label><br>
	    	<label> Confirmação de Senha: <input type="password" name="password" value=""> </label><br>
	    	<input type='submit' value='Atualizar'>
	    </div>
    <?php echo form_close();?>
<?php echo $this->load->view('_inc/footer')?>