<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<h3></h3>
</div>
</div>
</div>

	<div id="content" class="content-thin">
    <div class="box-page-ps open">
			<div class="box-page-ps-top"></div>
			<div class="box-page-ps-middle"></div>
			<div class="box-page-ps-content">
				<input type="checkbox" name="name" value=""><label for="name">f</label>
	      <h3>StarWars</h3>
	      <h5>1º/2015</h5>
			</div>
			<div class="box-page-ps-bottom"></div>

    </div>

		<div class="box-page-ps closed">
			<div class="box-page-ps-top"></div>
			<div class="box-page-ps-middle"></div>
			<div class="box-page-ps-content">
	      <h5>StarWars</h5>
	      <p>1º/2015</p>
			</div>
			<div class="box-page-ps-bottom"></div>
    </div>

	<div class="box-page-ps closed">
		<div class="box-page-ps-top"></div>
		<div class="box-page-ps-middle"></div>
		<div class="box-page-ps-content">
	<h5>StarWars</h5>
	<p>1º/2015</p>
		</div>
		<div class="box-page-ps-bottom"></div>
</div>

<div class="box-page-ps closed">
	<div class="box-page-ps-top"></div>
	<div class="box-page-ps-middle"></div>
	<div class="box-page-ps-content">
<h5>StarWars</h5>
<p>1º/2015</p>
	</div>
	<div class="box-page-ps-bottom"></div>
</div>
<?php if($this->session->userdata('login_id') == 3){ ?>
    <div id="action-page-ps">
		<ul>
			<li><img src="<?php echo base_url()?>assets/images/add_ps.png" alt="" />Abrir Processo Seletivo</li>
			<li><img src="<?php echo base_url()?>assets/images/cancel_ps.png" alt="" />Fechar Processo Seletivo</li>
		</ul>
    </div>
  </div>
<?php } ?>
<?php echo $this->load->view('_inc/footer') ?>
