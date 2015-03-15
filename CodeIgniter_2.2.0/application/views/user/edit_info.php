<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    EDITAR INFORMÇÕES
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('_inc/nav_bar')?>
    <div class="row">
        <?php echo form_open_multipart('usuario/update_account');?>
        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-2 form-column">
            <label>Nome<br /><input class="form-control" type="text" name="nome" value="<?php echo $user->nome?>"></label>
            <div id="edit-info-photo" class="form-group">
                <div id="edit-info-photo-frame">
                    <img src="<?php if($user->foto){echo $user->foto;} else{ echo base_url().'assets/images/foto_usuario.png';}?>" alt="" />
                </div>
                <div id="edit-info-photo-name">
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-1 form-column">
            <label>Email<br />
            <input type="text" class="form-control" name="email" value="<?php echo $user->email?>"> </label><br />

			<label>Curso<br />
                <select name="curso" class="form-control">
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
                </select>
            </label><br />

			<label>Semestre<br />
                <select name="semestre" class="form-control">
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
                </select>
            </label><br />

			<label>Telefone<br />
            <input type="text" class="form-control" name="telefone" id="telefone" maxlength="14" value="<?php echo $user->telefone?>"></label><br />
            <a style="
            position:absolute;
            display:block;
            left:4%;
            margin-top: 10px;
            background-color:white"
            href="<?php echo base_url().'index.php/usuario/change_password' ?>">
            <img style="width:50px;height:50px;" src="<?php echo base_url().'assets/images/incon_change_password.png' ?>">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-md-1 col-md-offset-6">
            <input type='submit' value="" class="btn btn-dark-accept" style="margin-top:70px">
        </div>
    </div>
    <?php echo form_close();?>
<?php echo $this->load->view('_inc/footer_boot') ?>
