<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    CADASTRO
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div id="form" class="col-xs-12 col-md-3 col-md-offset-2 form-group form-column">
            <label>Nome<br /><input type="text" class="form-control" name="nome" value=""></label>
            <label>Usuário<br /><input type="text" class="form-control" name="usuario" value=""></label><br />
			<div id="form-photo">
				<div id="form-photo-frame">
					<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				</div>
				<div id="form-photo-name">
					<input type="file" class="form-control" name="foto" value="">
				</div>
			</div>

        </div>

        <div class="col-xs-12 col-md-3 col-md-offset-0 form-group form-column">
			<label>Email<br /><input type="text" class="form-control" name="email" value=""></label>

			<label>Curso<br />
                <select name="curso" class="form-control">
                    <option > </option>
                    <option value="Ciência da computação(bacharelado)">Ciência da computação(bacharelado)</option>
                    <option value="Computação (licenciatura)">Computação (licenciatura)</option>
                </select>
            </label><br />

			<label>Semestre<br />
                <select name="semestre" class="form-control">
                    <option > </option>
                    <?php for ($i=1; $i < 10 ; $i++) {
                    ?>
                    <option value="<?php echo $i?>º"><?php echo $i?>º</option>
                    <?php } ?>
                </select>
            </label><br />

			<label>Telefone<br />
            <input type="text" class="form-control" name="telefone" id="telefone" maxlength="15" value=""></label>
            <label>Senha<br />(Mínimo de 6 caracteres)<br />
            <input type="password" class="form-control" name="senha" value=""></label>

            <label>Confirme a Senha<br />
            <input type="password" class="form-control" name="novasenha" value=""></label>
        </div>

        <div class="col-xs-12 col-md-3 col-md-offset-0 form-group form-column">
           <h4>Quantas vezes já participou do processo seletivo?</h4>
        <input type="radio" class="form-control" name="num_de_ps" value="0" id="radio_sub_1" checked>
       <label for="radio_sub_1" class="label-radio">Nenhuma</label><br />
     <input type="radio"  class="form-control" name="num_de_ps" value="1" id="radio_sub_2">
       <label for="radio_sub_2" class="label-radio">
       <p>
           1 vez
       </p></label><br />
     <input type="radio"  class="form-control" name="num_de_ps" value="2" id="radio_sub_3">
       <label for="radio_sub_3" class="label-radio">
           2 vezes</label><br />
     <input type="radio"  class="form-control" name="num_de_ps" value="3" id="radio_sub_4">
       <label for="radio_sub_4" class="label-radio">
       3 ou mais</label><br /><br />
               <input class="btn btn-dark-accept center-block" type="submit" value="">
     <?php echo form_close();?>
        </div>
    </div
<?php echo $this->load->view('_inc/footer_boot') ?>
