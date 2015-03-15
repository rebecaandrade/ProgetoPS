<?php echo $this->load->view('_inc/header_thin') ?>
	  <div class="header-text-thin-square-2 header-text-uppercase">
		<p>feedback</p>
	  </div>
	</div>
  </div>
<?php echo $this->load->view('_inc/nav_bar')?>
  <div id="content" class="content-thin">
	<div id="feedback">
		<div id="feedback-nav">
		<div id="feedback-nav-top">
			<p>
			  EDIÇÃO
		 	</p>
		</div>
		<div id="feedback-nav-body">
			<span class="feedback-nav-before"></span>
		 	<?php if(isset($semestres)){?>
		 	<?php foreach($semestres as $date => $semestre){?>
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/<?php echo $dates[$date] ?>">
				<?php echo $semestre ?>
				</a><br>
			<?php }}?>
			<span class="feedback-nav-after"></span>
		</div>
		</div>
	  <div id="feedback-text">
		<div id="feedback-text-message">
			<p>
				<?php if(sizeof($feeds) > 0){?>
					<?php echo $feeds->feedback ?>
				<?php }?>
			</p>
		</div>
		<div id="feedback-text-footer">
			<p>
				Deseja marcar um Feedback presencial?<br>
				Entre em contato no <a href="<?php echo base_url().'index.php/usuario/contact_us'?>">Fale Conosco</a>
			</p>
		</div>
		</div>
	</div>
  </div>

<?php echo $this->load->view('_inc/footer') ?>
