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
			  edição
		 	</p>
		</div>
		<div id="feedback-nav-body">
<<<<<<< HEAD
			<?php if(isset($semestres)){?>
		 	<?php foreach($semestres as $date => $semestre){?>
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/<?php echo $dates[$date] ?>"><?php echo $semestre ?></a><br>
=======
		 	<?php if(isset($semestres)){?>
		 	<?php foreach($semestres as $date => $semestre){?>
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/<?php echo $dates[$date] ?>">
				<p>
				<?php echo $semestre ?>
				</p></a><br>
>>>>>>> fc86d36cc22be825aaa9290f844ab61b183c1b87
			<?php }}?>
		</div>
		</div>
	  <div id="feedback-text">
		<div id="feedback-text-message">
<<<<<<< HEAD
			<p>
				<?php if(sizeof($feeds) > 0){?>
					<?php echo $feeds->feedback ?>
				<?php }?>
			</p>
		</div>
		<div id="feedback-text-footer">
			<p>
				Deseja marcar um Feedback presencial?
			</p>
=======
		 	<p>
		  		<?php if(sizeof($feeds) > 0){?>
		   			<?php echo $feeds->feedback ?>
		 		<?php }?>
		 	</p>
		</div>
		<div id="feedback-text-footer">
		  d
>>>>>>> fc86d36cc22be825aaa9290f844ab61b183c1b87
		</div>
		</div>
	</div>
  </div>

<?php echo $this->load->view('_inc/footer') ?>
