<?php echo $this->load->view('_inc/header_thin')?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<p>administrador</p>
</div>
</div>
</div>
	<div id="content" class="content-thin">
		<div id="page-admin">
			<div id="page-admin-info">
				<h5>Informações Gerais</h5>
				<div class="count-activity">
					<p>
						Palestra Institucional
					</p>
					<p>
						<span>15</span><span>12:00</span>
					</p>
					<p>
						<span>18</span><span>18:00</span>
					</p>
				</div>
				<div class="count-activity">
					<p>
						Palestra Institucional
					</p>
					<p>
						Contador
					</p>
				</div>
			</div>
			<div id="page-admin-nav">
				<div class="page-admin-nav-button">
				  <a href="<?php echo base_url();?>/index.php/usuario/list_users"><img src="<?php echo base_url();?>assets/images/person_admin.png" alt="" /></a>
				  <p>
					Candidatos
				  </p>
				</div>
				<div class="page-admin-nav-button">
				  <a href="<?php echo base_url();?>/index.php/admin/list_admins"><img src="<?php echo base_url();?>assets/images/list_admin.png" alt="" /></a>
				  <p>
					Administradores
				  </p>
				</div>
				<div class="page-admin-nav-button">
					<a href="<?php echo base_url();?>index.php/ps/listar">
				  <img src="<?php echo base_url();?>assets/images/ps-admin.png" alt="" />
			</a>
				 <p>
					Processo Seletivo
				</p>
				</div>
				<div class="page-admin-nav-button">
				  <img src="<?php echo base_url();?>assets/images/ps-admin.png" alt="" />
				  <p>
					Alterar Horários
				  </p>
				</div>
			</div>

		</div>
	</div>

</div>
<?php echo $this->load->view('_inc/footer')?>
