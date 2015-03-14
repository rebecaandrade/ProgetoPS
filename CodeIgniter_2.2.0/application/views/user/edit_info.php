<?php echo $this->load->view('_inc/header_large')?>
<?php echo $this->load->view('_inc/nav_bar')?>
			<div class="header-text-large-square-2 header-text-uppercase">
				<p>EDITAR INFORMAÇÕES</p>
			</div>
		</div>
	</div>

	<div id="content" class="content-large">
		<?php echo form_open_multipart('usuario/update_account');?>
		<div class="edit-info-column-3">
			<label>Nome<br /><input type="text" name="nome" value="<?php echo $user->nome?>"></label>


			<div id="edit-info-photo">
				<div id="edit-info-photo-frame">
					<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
					<img src="<?php if($user->foto){echo $user->foto;} else{ echo base_url().'assets/images/foto_usuario.png';}?>" alt="" />
				</div>
				<div id="edit-info-photo-name">
					<input type="file" name="foto">
				</div>
			</div>
		</div>

		<div class="edit-info-column-3">
			<br />
			<label>Email<br /><input type="text" name="email" value="<?php echo $user->email?>"> </label><br />

			<label>Curso<br />
                <select name="curso">
                    <option > </option>
                    <?php if($user->curso == 'Ciência da computação(bacharelado)'){ ?>
                    	<option value="Ciência da computação(bacharelado)" selected >Ciência da computação(bacharelado)</option>
                    <?php } else { ?>
                    	<option value="Ciência da computação(bacharelado)" >Ciência da computação(bacharelado)</option>
                   	<?php } if($user->curso == 'Computação (licenciatura)' ){ ?>
                    	<option value="Computação (licenciatura)" selected >Computação (licenciatura)</option>
                    <?php } else { ?>
                    	<option value="Computação (licenciatura)" selected >Computação (licenciatura)</option>
                    <?php } ?>
                </select><br /><br />
            </label>

			<label>Semestre<br />
                <select name="semestre">
                    <option > </option>
                    <?php 
                    for ($i=1; $i < 15 ; $i++) { 
                    	if($i.'º' == $user->semestre){
                    ?>
                    		<option value="<?php echo $i?>º" selected ><?php echo $i?>º</option>
                    <?php }else{ ?>
                    		<option value="<?php echo $i?>º"><?php echo $i?>º</option>
                    	<?php }
                    } ?>
                </select><br /><br />
            </label>
			
			<label>Telefone<br /><input type="text" name="telefone" id="telefone" maxlength="14" value="<?php echo $user->telefone?>"></label>

		</div>

		<div class="edit-info-column-3">
			<label>Senha<br /><input type="password" name="password" value="<?php ?>"> </label><br />
			<label>Confirmação de Senha<br /><input type="password" name="password" value=""> </label><br />

			<div class="button-box">
				<a onclick="confirmar('Deseja Excluir seu cadastro ?', '<?php echo base_url().'index.php/usuario/delete_account?id='.$user->id_login ?>' ) ">
				<span class="button b-dark-cancel"></span>
				<p>
					Deletar<br />Cadastro
				</p>
				</a>
				<input type='submit' value="" class="button b-dark-accept">
			</div>
		</div>

		<?php echo form_close();?>
	</div>
<?php echo $this->load->view('_inc/footer')?>

