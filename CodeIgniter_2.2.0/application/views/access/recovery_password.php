<?php echo $this->load->view('_inc/header_large')?>
<div class="header-text-large-square-2">
					<a href="http://www.cjr.org.br"><h3>www.cjr.org.br</h3></a>
				</div>
			</div>
		</div>

    <div id="content" class="content-large">
      <div id="recovery-field">
        <h5>Recuperar senha:</h5>
        <?php echo form_open('access/recovery') ?>
        	<input type="text" name="email-recovery" value=""><br />
        	<input type="submit" value="">
        <?php echo form_close() ?>
      </div>
    </div>

<?php echo $this->load->view('_inc/footer')?>
