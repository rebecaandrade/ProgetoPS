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
					<?php if(isset($palestra_inscritos_1) && isset($palestra_inscritos_2)) { ?>
						<span class="counter">
							<span><?php echo $palestra_inscritos_1 ?></span><span><?php echo substr($horas_palestra['palestra_1'],0,-3) ?></span>
						</span>
						<span class="counter">
							<span><?php echo $palestra_inscritos_2 ?></span><span><?php echo substr($horas_palestra['palestra_2'],0,-3) ?></span>
						</span>
					<?php } else { ?>
						<span class="counter">
							<span>0</span><span>Não há PS ativo</span>
						</span>
						<span class="counter">
							<span>0</span><span>Não há PS ativo</span>
						</span>
					<?php } ?>
				</div>
				<div class="count-activity">
					<p>
						Dinâmica
					</p>
					<?php if(isset($dinamica_inscritos_1) && isset($dinamica_inscritos_2)) { ?>
						<span class="counter">
							<span><?php echo $dinamica_inscritos_1 ?></span><span><?php echo substr($horas_dinamica['dinamica_1'],0,-3) ?></span>
						</span>
						<span class="counter">
							<span><?php echo $dinamica_inscritos_2 ?></span><span><?php echo substr($horas_dinamica['dinamica_2'],0,-3) ?></span>
						</span>
					<?php } else { ?>
						<span class="counter">
							<span>0</span><span>Não há PS ativo</span>
						</span>
						<span class="counter">
							<span>0</span><span>Não há PS ativo</span>
						</span>
					<?php } ?>
			</div>
			</div>
			<div id="page-admin-nav">
				<div class="page-admin-nav-button">
					<a href="<?php echo base_url();?>/index.php/usuario/past_list_users"><img src="<?php echo base_url();?>assets/images/person_admin.png" alt="" /></a>
					  <p>
						Candidatos
					  </p>
				</div>
			</div>
		</div>
	</div>
<?php echo $this->load->view('_inc/footer')?>