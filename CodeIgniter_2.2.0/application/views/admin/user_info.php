<?php echo $this->load->view('_inc/header_thin') ?>
<div id="subtitle-logo-small">
		  <h4>Informação Candidato</h4>
		</div>
	  </div>
	</div>
	<!--
	<div id="dados" class="lista">
		<br><br>
		<p>Nome : <?php echo $user->nome; ?> <br /></p>
		<p>E-mail : <?php echo $user->email;?> <br /></p>
		<p>Curso : <?php echo $user->curso; ?> <br /></p>
		<p>Semestre : <?php echo $user->semestre;?> <br /></p>
		<p>Telefone : <?php echo $user->telefone; ?> <br /></p>
	 </div>
-->
		<div id="user-info">
			<div class="profile-photo">
				<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
				<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				<p><?php echo $user->nome; ?> <br /</p>
			</div>
			<div id="profile-data">
			<p>
				Curso:
				</p>
			<p><?php echo $user->curso; ?></p>
			<p>
				Semestre:
			</p>
			<p><?php echo $user->semestre;?></p>
			<p>
				Email:
			</p>
			<p><?php echo $user->email;?> </p>
			<p>
				Telefone:
			</p>
			<p><?php echo $user->telefone; ?></p>
			<p>Usuario: </p>
			<p>
				<?php echo $user->usuario; ?>
			</p>
			<p>Número de PS(s) que participou :</p>
			<p>
				<?php echo $user->num_de_ps; ?>
			</p>

			</div>
		</div>

		<div id="user-activity">
			<div id="user-activity-nav-top">
				<img src="<?php echo base_url();?>assets/images/status_profile_out.png" alt="" />
			</div>
			<div id="user-activity-nav-body">
				<h5>Palestra Institucional</h5>
				<input type="radio" name="name" id="radio2" value="">
				<label for="radio2" class="label-radio"><span class="radio"></span>  18h00min</label>
				<br />
				<h5>Dinâmica em grupo</h5>
				<input type="radio" name="name" id="radio2" value="">
				<label for="radio2" class="label-radio"><span class="radio"></span>  18h00min</label>
		</div>
		</div>
		<div id="user-interview">
			<div id="table-interview">
				<table>
					<thead>
						<tr>
							<th colspan="6">
								Fevereiro 2015
							</th>
						</tr>
						<tr>
							<th colspan="3"><!--Adicionar contador PHP para expandir-->
								Qua 18
							</th>
							<th>
								Qui 19
							</th>
						</tr>

					</thead>
					<tbody>
						<tr>
							<td>
								08:00 - 09:00
							</td>
							<td>
								09:00 - 10:00
							</td>
							<td>
								09:00 - 10:00
							</td>
						</tr>

						<tr><!--Checkbox-->
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		</div>
<?php echo $this->load->view('_inc/footer') ?>
