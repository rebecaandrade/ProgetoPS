<?php echo $this->load->view('_inc/header_small')?> 
<div id="subtitle-logo-small">
		  <span class="subtitle-url"><h4>Administrador</h4></span>
		</div>
	  </div>
	</div>

<div id="body-admin">
  <div id="body-admin-info">
	<h5>Informações Gerais</h5>
  </div>
  <div id="body-admin-nav">
	<div class="admin-nav">
	  <a href="<?php echo base_url();?>/index.php/usuario/list_users"><img src="<?php echo base_url();?>assets/images/person_admin.png" alt="" /></a>
	  <p>
		Candidatos
	  </p>
	</div>
	<div class="admin-nav">
	  <a href="<?php echo base_url();?>/index.php/admin/list_admins"><img src="<?php echo base_url();?>assets/images/list_admin.png" alt="" /></a>
	  <p>
		Administradores
	  </p>
	</div>
	<div class="admin-nav">
	  <img src="<?php echo base_url();?>assets/images/ps-admin.png" alt="" />
	  <p>
		Processo Seletivo
	  </p>
	</div>
  </div>
</div>
