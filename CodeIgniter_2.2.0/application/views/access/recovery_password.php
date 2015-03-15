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
    <div class="row">
		<div id="recovery-field" class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 form-group form-column">
        <h3>Insira seu email:</h3>
        <?php echo form_open('access/recovery') ?>
        	<input type="text" class="form-control" name="email-recovery" value=""><br />
        	<input type="submit" class="btn btn-dark-accept center-block" value="">
        <?php echo form_close() ?>
      </div>
		</div>

    </div>
<?php echo $this->load->view('_inc/footer') ?>
