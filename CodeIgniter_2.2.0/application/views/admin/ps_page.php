<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<h3></h3>
</div>
</div>
</div>
	<?php if(isset($current_ps)) { ?>
		<div id="content" class="content-thin">
	    <div class="box-page-ps open">
				<div class="box-page-ps-top"></div>
				<div class="box-page-ps-middle"></div>
				<div class="box-page-ps-content">
		      <h3><?php echo $current_ps->nome ?></h3>
		      <h5><?php echo $current_ps->edicao ?></h5>
				</div>
				<div class="box-page-ps-bottom"></div>

	    </div>
	<?php } 
	foreach ($tb_ps as $ps) {
		if(!$ps->status_ps){
		?>
		<div class="box-page-ps closed">
			<div class="box-page-ps-top"></div>
			<div class="box-page-ps-middle"></div>
			<div class="box-page-ps-content">
	      <h5><?php echo $ps->nome ?></h5>
	      <p><?php echo $ps->edicao ?></p>
			</div>
			<div class="box-page-ps-bottom"></div>
	    </div>
	<?php }
	} ?>
<?php if($this->session->userdata('login_perfil') == 3){ ?>
    <div id="action-page-ps">
		<ul>
			<?php if($status_ps){ ?>
					<a onclick="confirmar('Realmente deseja finalizar o PS atual?','<?php echo base_url()?>index.php/ps/excluir')" ><li><img src="<?php echo base_url()?>assets/images/cancel_ps.png" alt="" />Fechar Processo Seletivo</li></a>
			<?php } else { ?>
					<a href="<?php echo base_url()?>index.php/ps/open_ps" ><li><img src="<?php echo base_url()?>assets/images/add_ps.png" alt="" />Abrir Processo Seletivo</li></a>
			<?php } ?>
		</ul>
    </div>
  </div>
<?php } ?>
<?php echo $this->load->view('_inc/footer') ?>
