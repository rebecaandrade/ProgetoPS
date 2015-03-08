<?php echo $this->load->view('_inc/header_thin')?>
      <div class="header-text-thin-square-2 header-text-uppercase">
        <p>preencher feedback</p>
      </div>
    </div>
  </div>
  <?php echo $this->load->view('_inc/nav_bar')?>
  <div id="content" class="content-thin">
    <div id="admin-feedback">
      <div id="admin-feedback-top">
        <img src="<?php echo base_url();?>assets/images/photo_feedback.png" alt="" />
        <h5><?php echo $user->nome?></h5>
      </div>
      <div id="admin-feedback-body">
        <div id="admin-feedback-body-text">
          <p>
            <?php echo $feed->feedback ?>
          </p>
        </div>
        <div id="admin-feedback-body-interviewers">
          <div id="admin-feedback-body-interviewers-button">
            <img src="<?php echo base_url();?>assets/images/profile_post.png" alt="" />
            <p>
              Entrevistadores
            </p>
          </div>
          <div id="admin-feedback-body-interviewers-list">
            <!--<p>
              Nome Entrevistador
          </p>-->
          </div>
        </div>
      </div>
      <div id="admin-feedback-footer">
        <a href="#"><img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" /></a>
        <a href="#"><img src="<?php echo base_url();?>assets/images/button_light_accept.png" alt="" /></a>
      </div>
    </div>
  </div>

<?php echo $this->load->view('_inc/footer')?>
