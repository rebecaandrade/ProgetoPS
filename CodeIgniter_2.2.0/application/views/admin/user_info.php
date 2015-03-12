<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
<div class="header-text-thin-square-2 header-text-uppercase">
	<p>Informações Candidato</p>
</div>
</div>
</div>
<div id="content" class="content-thin">
	<div id="infouser-nav">
		<div id="infouser-nav-top" class="aproved">
			<span><!--Icone de aprovado--></span>
		</div>
		<div id="infouser-nav-body">
				<h5>Palestra Institucional</h5>
				<?php if(isset($hours['palestra_hour'])){ ?>
				<input type="radio"  value="" checked>
				<label class="label-radio"><?php echo substr($hours['palestra_hour']->tempo, 0,-3) ?></label>
				<br />
				<?php } else { ?>
				<input type="radio" value="" >
				<label class="label-radio">Não Marcado</label>
				<br />
				<?php } ?>
				<h5>Dinâmica em grupo</h5>
				<?php if(isset($hours['dinamica_hour'])){ ?>
				<input type="radio" value="" checked>
				<label class="label-radio"><?php echo substr($hours['dinamica_hour']->tempo, 0,-3) ?></label>
				<br />
				<?php } else { ?>
				<input type="radio" value="" >
				<label class="label-radio">Não Marcado</label>
				<br />
				<?php } ?>
		</div>
	</div>

	<div id="infouser-id">
		<div id="infouser-id-photo">
			<div id="infouser-id-photo-frame">
				<img src="<?php echo base_url();?>assets/images/photo_profile.png" />
				<img src="<?php if($user->foto){echo $user->foto;} else {echo base_url().'assets/images/foto_usuario.png';}?>" />
			</div>
			<div id="infouser-id-photo-name">
				<p>
					<?php echo $user->nome; ?>
				</p>
			</div>

		</div>
		<div id="infouser-id-info">
			<p>
				Curso:
				</p>
			<p> <?php echo $user->curso; ?> </p>
			<p>
				<br />
				Semestre:
			</p>
			<p> <?php echo $user->semestre;?> </p>
			<p>
				<br />
				Email:
			</p>
			<p> <?php echo $user->email;?> </p>
			<p>
				<br />
				Telefone:
			</p>
			<p> <?php echo $user->telefone; ?> </p>
			<p>
				<br />
				Usuario:
			</p>
			<p> <?php echo $user->usuario; ?> </p>
			<p>
				<br />
				Número de PS(s) que participou :
			</p>
			<p> <?php echo $user->num_de_ps; ?></p>
		</div>
	</div>
	<div id="infouser-interview">
		<div id="infouser-table-interview">
			<table>
				<thead>
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
--> <!--
		<div id="user-info">
			<div class="infouser-photo">
				<img src="<?php echo base_url();?>assets/images/photo_infouser.png" alt="" />
				<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				<p><?php echo $user->nome; ?> <br /</p>
			</div>
			<div id="infouser-data">
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
-->

<?php echo $this->load->view('_inc/footer') ?>
