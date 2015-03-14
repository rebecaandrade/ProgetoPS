<?php echo $this->load->view('_inc/header_thin')?>
      <div class="header-text-thin-square-2 header-text-uppercase">
        <p>preencher feedback</p>
      </div>
    </div>
  </div>
  <?php echo $this->load->view('_inc/nav_bar')?>
  <div id="content" class="content-thin">
  <?php $id = $user->id_login ?>
    <div id="admin-feedback">
      <div id="admin-feedback-top">
        <img src="<?php if($user->foto){echo $user->foto;} else { echo base_url().'assets/images/photo_feedback.png';};?>" alt="" />
        <h5><?php echo $user->nome?></h5>
      </div>
      <div id="admin-feedback-body">
        <div id="admin-feedback-body-text">
		 		<p>
          <?php if(sizeof($feed) > 0) echo $feed->feedback ?>
        </p>
		</div>
        <div id="admin-feedback-body-interviewers">
          <div id="admin-feedback-body-interviewers-button">
            <img src="<?php echo base_url();?>assets/images/profile_post.png" alt="" />
            <p>
              Entrevistadores
            </p><br>
            1º Entrevistador:<br> <?php if(sizeof($feed) > 0) echo $feed->entrevistador1 ?><br><br>
            2º Entrevistador:<br> <?php if(sizeof($feed) > 0) echo $feed->entrevistador2 ?></label>
          </div>
          <div id="admin-feedback-body-interviewers-list">
            <!--<p>
              Nome Entrevistador
          </p>-->
          </div>
        </div>
      </div>
      <div id="admin-feedback-footer">
      	<a href="<?php echo base_url();?>index.php/usuario/past_list_users"><img src="<?php echo base_url();?>/assets/images/checkbox_clicked.png"></a>
      </div>
    </div>
  </div>

<?php echo $this->load->view('_inc/footer')?>