<?php echo $this->load->view('_inc/header_thin')?>
			<div class="header-text-thin-square-2 header-text-uppercase">
				<p>preencher feedback</p>
			</div>
		</div>
	</div>
	<?php echo $this->load->view('_inc/nav_bar')?>
	<div id="content" class="content-thin">
	<?php $id = $user->id_login ?>
	<form method="post" accept-charset="utf-8" id="feed-form" action="<?php echo base_url().'index.php/feedback/set_feed/'.$id  ?>">
		<div id="admin-feedback">
			<div id="admin-feedback-top">
				<img src="<?php if($user->foto){echo $user->foto;} else { echo base_url().'assets/images/photo_feedback.png';};?>" alt="" />
				<h5><?php echo $user->nome?></h5>
			</div>
			<div id="admin-feedback-body">
				<div id="admin-feedback-body-text">
					<textarea style="width:90%;height:90%" name="feedback" form="feed-form"><?php if(sizeof($feed) > 0) echo $feed->feedback ?></textarea>
				</div>
				<div id="admin-feedback-body-interviewers">
					<div id="admin-feedback-body-interviewers-button">
						<img src="<?php echo base_url();?>assets/images/profile_post.png" alt="" />
						<p>
							Entrevistadores
						</p><br>
						<label>1º Entrevistador:<br><input type="text" name="entrevistador1" value="<?php if(sizeof($feed) > 0) echo $feed->entrevistador1 ?>"></label><br><br>
						<label>2º Entrevistador:<br><input type="text" name="entrevistador2" value="<?php if(sizeof($feed) > 0) echo $feed->entrevistador2 ?>"></label><br><br>
						<p>
							Status de aprovação:
						</p><br>
						<?php $checked = 'checked=""'; ?>
						<input type="radio" id="r1" name="status_feed" value="3" <?php if($feed->status_feed == 3) {echo $checked;} ?>>
						<label class="label-radio" for="r1">Aprovado</label>
						<br>
						<input type="radio" id="r2" name="status_feed" value="1" <?php if($feed->status_feed == 1) {echo $checked;} ?>>
						<label class="label-radio" for="r2">Reprovado</label>
						<br>
					</div>
					<div id="admin-feedback-body-interviewers-list">
						<!--<p>
							Nome Entrevistador
					</p>-->
					</div>
				</div>
			</div>
			<div id="admin-feedback-footer">
				<input type="submit" class="button b-light-accept" value=" ">
			</div>
		</div>
		<?php echo form_close()  ?>
	</div>

<?php echo $this->load->view('_inc/footer')?>



