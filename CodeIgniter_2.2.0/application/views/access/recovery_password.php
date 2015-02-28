<?php echo $this->load->view('_inc/header_large')?>
</div>
</div><!-- Não apagar estes div's -->

<div id="body-recovery">
    <h5>Recuperar senha:</h5>
    <?php echo form_open('access/recovery') ?>
    	<input type="text" name="email-recovery" value="">
    	<input type="submit" value="">
    <?php echo form_close() ?>
</div>

<?php echo $this->load->view('_inc/footer')?>
