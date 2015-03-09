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
		 	<?php foreach($semestres as $date => $semestre){?>
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/<?php echo $dates[$date] ?>">
				<p>
				<?php echo $semestre ?>
				</p></a><br>
			<?php }?>
		</div>
		</div>
	  <div id="feedback-text">
<<<<<<< HEAD
		<div id="feedback-text-message">
		  <p>
		   <?php echo $feeds->feedback ?>
		  </p>
		</div>
		<div id="feedback-text-footer">
			<p>
				Deseja marcar um Feedback presencial?
			</p>
=======

		<div id="feedback-text-message">
		 	<p>
		  		<?php if(sizeof($feeds) > 0){?>
		   			<?php echo $feeds->feedback ?>
		 		<?php }?>
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

			<?php if(isset($semestres)){?>
		 	<?php foreach($semestres as $date => $semestre){?>
				<a href="<?php echo base_url()?>index.php/feedback/load_feedback/<?php echo $dates[$date] ?>"><?php echo $semestre ?></a><br>
			<?php }}?>
>>>>>>> 6368aba79a3e6bf7f1784fee66c02bd985d0234f
		</div>
		</div>
	</div>
  </div>

<?php echo $this->load->view('_inc/footer') ?>
