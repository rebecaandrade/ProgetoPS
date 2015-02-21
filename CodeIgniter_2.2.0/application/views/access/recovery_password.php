<?php echo $this->load->view('_inc/header_small')?>
<div id="body-recovery">

    <h4>Recuperar senha:</h4>
    <?php echo form_open('access/recovery') ?>
    	<input type="text" name="email-recovery" value="">
    	<input type="submit" value="Enviar">
    <?php echo form_close() ?>

</div>
