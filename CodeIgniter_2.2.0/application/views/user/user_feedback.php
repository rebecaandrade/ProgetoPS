<?php echo $this->load->view('_inc/header_thin') ?>

	  <div class="header-text-thin-square-2 header-text-uppercase">
		<p>feedback</p>
	  </div>
	</div>
  </div>
  <div id="content" class="content-thin">
	<div id="feedback">
	  <div id="feedback-text">
		<div id="feedback-text-message">
		  <p>
		   <?php echo $feeds->feedback ?>
		  </p>
		</div>
		<div id="feedback-text-footer">
		  d
		</div>
	  </div>

	  <div id="feedback-nav">
		<div id="feedback-nav-top">
			<p>
			  edição
		 	</p>
		</div>
		<div id="feeback-nav-body">
		 	<?php foreach($semestres as $date => $semestre){?>
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/<?php echo $dates[$date] ?>"><?php echo $semestre ?></a><br>
			<?php }?>
		</div>
	</div>
	</div>
  </div>

<?php echo $this->load->view('_inc/footer') ?>