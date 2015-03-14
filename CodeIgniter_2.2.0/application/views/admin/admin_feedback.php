<?php echo $this->load->view('_inc/header_thin')?>
      <div class="header-text-thin-square-2 header-text-uppercase">
        <p>preencher feedback</p>
      </div>
    </div>
  </div>
  <?php echo $this->load->view('_inc/nav_bar')?>
  <div id="content" class="content-thin">
  <?php $id = $user->id_login ?>
  <?php echo form_open('feedback/set_feed/'.$id) ?>
    <div id="admin-feedback">
      <div id="admin-feedback-top">
        <img src="<?php if($user->foto){echo $user->foto;} else { echo base_url().'assets/images/photo_feedback.png';};?>" alt="" />
        <h5><?php echo $user->nome?></h5>
      </div>
      <div id="admin-feedback-body">
        <div id="admin-feedback-body-text">
		 		<input type="text" name="feedback" value="<?php if(sizeof($feed) > 0) echo $feed->feedback ?>">
		</div>
        <div id="admin-feedback-body-interviewers">
          <div id="admin-feedback-body-interviewers-button">
            <img src="<?php echo base_url();?>assets/images/profile_post.png" alt="" />
            <p>
              Entrevistadores
            </p><br>
            <label> 1º Entrevistador:<br><input type="text" name="entrevistador1" value="<?php if(sizeof($feed) > 0) echo $feed->entrevistador1 ?>"></label><br><br>
            <label>2º Entrevistador:<br><input type="text" name="entrevistador2" value="<?php if(sizeof($feed) > 0) echo $feed->entrevistador2 ?>"></label>
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



