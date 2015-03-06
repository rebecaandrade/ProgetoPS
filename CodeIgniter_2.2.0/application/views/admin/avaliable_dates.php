<?php echo $this->load->view('_inc/header_large')?>

		<div class="header-text-large-square-2 header-text-uppercase">
				<p>cadastrar datas</p>
			</div>
		</div>
	</div>
	<div id="content" class="content-large">
		<?php echo form_open('admin/insert_new_date')?>
		<div class="admin-create-column-2">
		<?php for ($i=0; $i < 11; $i++) { ?>

			<label for="dia">Digite uma data válida:<input name="enterview_date" type="date">

			<div class="button-box">
				<input type="submit" value="">
			</div>

		<?php }?>
		</div>
		<?php echo form_close() ?>
	</div>

<?php echo $this->load->view('_inc/footer')?>
